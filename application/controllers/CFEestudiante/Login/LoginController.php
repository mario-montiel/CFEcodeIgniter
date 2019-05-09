<?php


class LoginController extends CI_Controller {
    
	public function index()
	{
		$this->load->view('CFEestudiante/Login/login');
	}

	public function verificacion(){
		$this->form_validation->set_rules('usuario', 'Usuario', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|callback_verifyUser');

		/*$config = array(
			array(
				'field' => 'usuario',
				'label' => 'Usuario',
				'rules' => 'required|alpha_numeric',
				'errors' => array(
					'required' => 'Campo de %s vacio',
					'alpha_numeric' => 'Solo se permiten letras en el usuario'
				),
			),
			array(
				'field' => 'password',
				'label' => 'Contraseña',
				'rules' => 'required',
				'errors' => array(
					'required' => 'Campo de %s vacio'
				)
			),
		);

		$this->form_validation->set_rules($config);*/

		if($this->form_validation->run() == false){
			return $this->load->view('CFEestudiante/Login/login');
		}
		return $this->load->view('CFEestudiante/Home/home');
	}

	public function verifyUser(){
		$name = $this->input->post('usuario');
		$pass = $this->input->post('password');

		$this->load->model('Login_Model');
		if($this->Login_Model->Login($name, $pass)){
			return true;
		}
		$this->form_validation->set_message('verifyUser', 'Usuario o Contraseña son Incorrectos!!');
		return false;
	}
}
