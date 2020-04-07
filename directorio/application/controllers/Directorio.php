<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Directorio extends CI_Controller {
    //se crea mi funcion constructor
	function __construct(){
		parent::__construct();
		
			      // load URL helper
		$this->load->helper('url');
			//se carga el modelo
		$this->load->model('Model_1');
		}//finaliza el constructor



		//se carga la vista
		public function index() {
			$data  = array(
			'resultados' => $this->Model_1->verTodo()
			);


 $this->load->view('vista_directorio/headers');
			$this->load->view('vista_directorio/directorio',$data);


	}//termina la funcion index


	function enlace(){
		$data  = array(

			'resultados' => $this->Model_1->verTodo()
		);
		$this->load->view('vista_directorio/headers');
		$this->load->view('vista_directorio/vista_enlace',$data);

	}

}//termina la clase controladors