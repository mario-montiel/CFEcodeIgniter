<?php


class Login_Model extends CI_Model {
    
	public function login($name, $pass)
	{
        $this->db->select('usuario', 'password');
        $this->db->from('usuarios');
        $this->db->where('usuario', $name);
        $this->db->where('password', $pass);

        $query = $this->db->get();

        if($query->num_rows() == 1){
            return true;
        }
        return false;
	}
}