<?php

    class Usuario_model extends CI_Model{
        
        public function __construct(){
            parent::__construct();
        }
        
        public function usuario_por_nombre_password($nombre, $password){
            $this->db->select('Id, Nombre, Email');
            $this->db->from('Usuario');
            $this->db->where('Nombre', $nombre);
            $this->db->where('Password',md5($password));
            $this->db->limit(1);
            
            $query = $this->db->get();
            if($query->num_rows() == 1){
                return $query->result();
            }
            
            return false;
        }
        
        
        public function insertar_usuario($nombre, $password, $email){
            $datos = array(
                'Nombre' => $nombre,
                'Password' => md5($password),
                'Email'=> $email);
            $this->db->insert('Usuario', $datos);
        }
        
    }
?>