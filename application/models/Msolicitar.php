<?php


class Msolicitar extends CI_Model {
    
	public function solicitar($estatus, $municipio, $carreras)
	{
        $query = $this->db->select('estatus', 'municipio', 'carreras');
        $this->db->from('estados');
        $this->db->join('municipios', 'municipios.id_municipio', '=', 'estados.id_estado');
        $this->db->join('universidades', 'municipios.id_municipio', '=', 'universidades.municipios_id_municipio');
        $this->db->join('universidades_has_carreras', 'universidades_has_carreras.universidades_id_universidad', '=', 'universidades.id_universidad');
        $this->db->join('carreras', 'carreras.id_carrera', '=', 'universidades_has_carreras.carreras_id_carrera');

        /*$query = $this->db->get();

        if($query->num_rows() == 1){
            return true;
        }
        return false;*/
	}
}