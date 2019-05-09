<?php

class Estado_Model extends CI_Model {

	public function estado()
	{
        /*$this->db->select('*');
        $this->db->from('estados');
        //return $this->db->get()->result();
        return $this->db->get()->result();*/

        $this->db->select('select id_estado, estado, municipio, id_municipio carrera, id_carrera');
        $this->db->from('estados');
        $this->db->join('municipios', 'municipios.id_municipio = estados.id_estados');
        $this->db->join('universidades', 'universidades.Municipios_id_municipio = municipios.Estados_id_estado');
        $this->db->join('universidades_has_carreras', 'universidades_has_carreras.Universidades_id_universidad = universidades.id_universidad');
        $this->db->join('carreras', 'carreras.id_carrera = universidades_has_carreras.Carreras_id_carrera');

        return $this->db->get()->result();
	}
}