<?php
    class Equipo_model extends CI_Model {
        
        public function __construct() {
            parent::__construct();
        }
        
        public function insertar_equipo($equipo) {
            $equipoArray = implode("-", $equipo);
            $datos = array(
                'Pokemons' => $equipoArray,
                'Id_Usuario' => $this->session->userdata('id'));
            $this->db->insert('Equipo', $datos);
        }
        
        public function listar_equipos($id_usuario) {
            $this->db->select('Id, Pokemons');
            $this->db->from('Equipo');
            $this->db->where('Id_Usuario', $id_usuario);
            
            $query = $this->db->get();
            
            if ($query->num_rows() > 0) {
                return $query->result();
            } else {
                return false;
            }
        }
        
        public function borrar($id){
            $this->db->where('Id', $id);
            $this->db->delete('Equipo');
        }
    }
?>