<?php
class PokeApi extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('equipo_model');
        
    }
    
	public function index() {
        $data['crear'] = 'active';
        $data['pokedex'] = '';
        $this->load->view('templates/header', $data);
        $this->load->view('pages/builder');
        $this->load->view('templates/footer');
    }
    
    public function equipoCreado() {
        $data['crear'] = 'active';
        $data['pokedex'] = '';
        $this->load->view('templates/header', $data);
        $this->load->view('pages/builder_exito');
        $this->load->view('templates/footer');
    }
    
    public function pokedex() {
        $data['crear'] = '';
        $data['pokedex'] = 'active';
        $this->load->view('templates/header', $data);
        $this->load->view('pages/pokedex');
        $this->load->view('templates/footer');
    }
   
    public function forgot() {
        $data['crear'] = '';
        $data['pokedex'] = '';
        $this->load->view('templates/header', $data);
        $this->load->view('pages/forgot');
        $this->load->view('templates/footer');
    }
    
    public function pokemon(){
        $data['crear'] = '';
        $data['pokedex'] = 'active';
        $this->load->view('templates/header', $data);
        $this->load->view('pages/pokemon');
        $this->load->view('templates/footer');        
    }
    
    public function equipos() {
        if($this->session->userdata('id') != null){
            $equipos = $this->equipo_model->listar_equipos($this->session->userdata('id'));
            $i = 0;
            $team['data'] = array();
            if($equipos){
                foreach($equipos as $equipo){
                    array_push($team['data'], array('id'=> $equipo->Id, 'equipo' => $equipo->Pokemons));
                }
            }
            $data['crear'] = '';
            $data['pokedex'] = '';
            $this->load->view('templates/header', $data);
            $this->load->view('pages/teams', $team);
            $this->load->view('templates/footer');
        }
    }
    
    public function guardaEquipo(){
        if($this->session->userdata('id') != null){
            if($this->input->post()){
                $pokemones = array(
                    '1' => $this->input->post("pokemon1"),
                    '2' => $this->input->post("pokemon2"),
                    '3' => $this->input->post("pokemon3"),
                    '4' => $this->input->post("pokemon4"),
                    '5' => $this->input->post("pokemon5"),
                    '6' => $this->input->post("pokemon6"));
                    
                $this->equipo_model->insertar_equipo($pokemones);
                redirect("PokeApi/equipoCreado");
            }
        } else {
            redirect('Usuarios/login');
        }
    }
    
    public function borrarEquipo(){
        $id = $_GET['id'];
        $this->equipo_model->borrar($id);
        redirect("PokeApi/equipos");
    }
}
?>
    

