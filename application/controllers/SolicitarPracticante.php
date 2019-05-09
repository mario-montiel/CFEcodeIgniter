<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Restserver\Libraries\REST_Controller;
require APPPATH . '/libraries/REST_Controller.php';
require APPPATH . '/libraries/Format.php';

class SolicitarPracticante extends REST_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    
	public function estados_get()
	{
        header("Access-Control-Allow-Origin: *");
        $this->response($this->db->get('estados')->result());

        /*$sql = $this->db->select('select id_estado, estado, municipio, id_municipio carrera, id_carrera');
        $this->db->from('estados');
        $this->db->join('municipios', 'municipios.id_municipio = estados.id_estados');
        $this->db->join('universidades', 'universidades.Municipios_id_municipio = municipios.Estados_id_estado');
        $this->db->join('universidades_has_carreras', 'universidades_has_carreras.Universidades_id_universidad = universidades.id_universidad');
        $this->db->join('carreras', 'carreras.id_carrera = universidades_has_carreras.Carreras_id_carrera');*/


        //$sql = 'SELECT * FROM estados';

        /*$sql = 'SELECT estados.id_estado, estados.estado FROM estados
        INNER JOIN municipios ON municipios.id_municipio "=" estados.id_estados'; */

        /*$this->db->select('id_estado, estado, municipio, id_municipio carrera, id_carrera');
        $this->db->from('estados');
        $this->db->join('municipios', 'municipios.id_municipio = estados.id_estado');
        $this->db->join('universidades', 'universidades.Municipios_id_municipio = municipios.Estados_id_estado');
        $this->db->join('universidades_has_carreras', 'universidades_has_carreras.Universidades_id_universidad = universidades.id_universidad');
        $this->db->join('carreras', 'carreras.id_carrera = universidades_has_carreras.Carreras_id_carrera');
        $query = $this->db->get();*/

        // Return the result object
        //return $this->db->query($sql);

        header('Access-Control-Allow-Methods', 'HEAD, GET, POST, PUT, PATCH, DELETE');
        header('Access-Control-Allow-Headers', ('Access-Control-Request-Headers'));
        header("Access-Control-Allow-Origin: *");

        header('Access-Control-Allow-Origin:  http://127.0.0.1:3000');
        header('Access-Control-Allow-Methods: POST');
        header('Access-Control-Allow-Headers: Content-Type, Authorization');

        

        //header('Content-type: application/json'); $sql = json_decode(file_get_contents('php://input'),true);
        //$resultados = $this->db->query($sql);

        //$this->response($this->db->get($sql)->result());
        //$this->response($this->db->query($query)->result());
    }

    public function municipios_get(){
        header("Access-Control-Allow-Origin: *");
        $this->response($this->db->get('municipios')->result());
    }

    public function carreras_get(){
        header("Access-Control-Allow-Origin: *");
        $this->response($this->db->get('carreras')->result());
    }

    public function filtro_post(){
        header("Access-Control-Allow-Origin: *");
        //$this->load->helper('form');
        header("Content-Type: application/json");
        //$peticion = json_decode(file_get_contents('php://inputs'));
        /*$data = array('returned: '. $this->post());
        if($this->input->post()){
            $this->response($data);
            print_r($_POST);
        }*/

        //echo 'Putas Harry'.$this->post('estado');

        $data = array(
        /*$estatus = $this->input->post(2);
        $municipio = $this->input->post('municipio');
        $carreras = $this->input->post('carrera');*/
        'estatus'=> 1
        /*'municipios_id_municipio'=>$this->input->post('municipio'),
        'carreras_id_carrera'=>$this->input->post('carrera'),*/
        );
        $this->db->insert('requiero_practicantes',$data);

		/*$this->load->model('Msolicitar');
		if($this->Msolicitar->solicitar($estatus, $municipio, $carreras)){
            $response = json_encode($request); header('Content-Type: application/json'); echo $response; 
			return true;
		}
        return false;*/
        
       /* header('Access-Control-Allow-Methods', 'HEAD, GET, POST, PUT, PATCH, DELETE');
        header('Access-Control-Allow-Headers', ('Access-Control-Request-Headers'));
        header("Access-Control-Allow-Origin: *");

        header('Access-Control-Allow-Origin:  http://127.0.0.1:3000');
        header('Access-Control-Allow-Methods: POST');
        header('Access-Control-Allow-Headers: Content-Type, Authorization');

        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
        header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

        header('content-type: application/json; charset=utf-8');*/

        
        /*header ("Access-Control-Allow-Origin: *");
        header ("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, 
        Content-Type, Accept, Access-Control-Request-Method");
        header ("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        header ("Allow: GET, POST, OPTIONS, PUT, DELETE");
        $data = array(

            'id'=>$this->input->post('id'),
            'estatus'=>$this->input->post(2),
            'municipios_id_municipio'=>$this->input->post('municipio'),
            'carreras_id_carrera'=>$this->input->post('carrera'),
            'imagen'=>$this->input->post('imagen'),
            'negocio_id'=>$this->input->post('negocio_id'),
            'categoria_id'=>$this->input->post('categoria_id')
    
             );
             echo 'Putas Harry'.$this->post('estado');
            $this->db->insert('requiero_practicantes',$data);*/
    
            
    }
}
