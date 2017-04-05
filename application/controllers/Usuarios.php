<?php

class Usuarios extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->model('usuario_model');
        
    }
        
    public function login() {
        $data['crear'] = '';
        $data['pokedex'] = '';
        $this->load->view('templates/header', $data);
        $this->load->view('pages/login');
        $this->load->view('templates/footer');
    }

    public function doLogin(){
        if ($this->input->post()) {
            $nombre = $this->input->post('usuario');
            $password = $this->input->post('password');
            $usuarios = $this->usuario_model->usuario_por_nombre_password($nombre, $password);
            if($usuarios){
                foreach($usuarios as $user){
                    $usuario_data = array(
                        'id' => $user->Id, 
                        'nombre' => $user->Nombre,
                        'email' => $user->Email,
                        'logueado' => TRUE);
                    $this->session->set_userdata($usuario_data);
                }
                redirect("PokeApi");
            }else{
                redirect("Usuarios/login");
            }
        }
    }
    
    public function logout(){
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('nombre');
        $this->session->sess_destroy();
        redirect("PokeApi");
    }
    
    public function registration() {
        $data['crear'] = '';
        $data['pokedex'] = '';
        $this->load->view('templates/header', $data);
        $this->load->view('pages/registration');
        $this->load->view('templates/footer');
    } 
    
    public function register(){
        if ($this->input->post()) {
            $this->form_validation->set_rules('usuario', 'Usuario', 'required|min_length[5]|max_length[12]');
            $this->form_validation->set_rules('password', 'Contraseña', 'required|matches[password_conf]');
            $this->form_validation->set_rules('password_conf', 'Confirmar contraseña', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        
            if($this->form_validation->run() == FALSE){
                $data['crear'] = '';
                $data['pokedex'] = '';
                $this->load->view('templates/header', $data);
                $this->load->view('pages/registration');
                $this->load->view('templates/footer');
            } else {
                $this->usuario_model->insertar_usuario($this->input->post('usuario'),
                                                       $this->input->post('password'),
                                                       $this->input->post('email'));
                $this->doLogin();
                $this->session->set_flashdata('correcto', 'Usuario registrado correctamente!');
            }
            
        }
        
    }

    public function perfil() {
        $data['crear'] = '';
        $data['pokedex'] = '';
        $this->load->view('templates/header', $data);
        $this->load->view('pages/user');
        $this->load->view('templates/footer');
    }
}

?>