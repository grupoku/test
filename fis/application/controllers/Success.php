<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Success extends CI_Controller {

   public function cargar_login(){

      $this->load->view('login');

   }
   public function condor(){
      $this->load->view('condor');
   }
   public function massu(){
      $this->load->view('massu');
   }
   public function phelps(){
      $this->load->view('phelps');
   }
   public function nba(){
      $this->load->view('nba');
   }

   public function cargar_contacto(){
      $this->load->view('contacto');
   }

   public function index(){
      $this->load->model('horarios');
      $code = $_GET['code'];
      $id_horario = $_GET['id_horario'];
      if( $code == "true")
      $this->horarios->reservar($id_horario, $this->session->userdata('id'));
      else
      $this->horarios->cancelar_reserva($id_horario, $this->session->userdata('id'));   
      $this->load->view('success');
   }

		
	


}
?>