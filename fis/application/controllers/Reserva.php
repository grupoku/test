<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reserva extends CI_Controller {

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

	public function cargar_reserva(){
         $this->load->model('horarios'); //load se refiere a cargar en este caso el modelo correspondiente
         $horarios_disponibles = array(); //arreglo que contendra todos los horarios de la base de datos
         $horarios_reservados = array();
         $query=$this->horarios->consultar();
         foreach( $query->result() as $row ){
			$cancha = $this->horarios->consultar_canchas($row->id_cancha);
            $datos_cancha = array(
            		'nombre' => $cancha->Nombre,
            		'precio' => $cancha->Precio,
            		'id_gym' => $cancha->id_gym,
            	);
            $nombre_gym = $this->horarios->consultar_gym($cancha->id_gym);

            if ($row->estado == "disponible") {           	
            
            $horario_disp = array(
         		'id_horario' => $row->id_horario,
         		'nombre_gym' => $nombre_gym,
         		'nombre_cancha' => $datos_cancha['nombre'],
         		'fecha' => $row->fecha,
         		'hora' => $row->hora,
         		'precio' => $datos_cancha['precio'],
         		'id_cancha'=> $row->id_cancha,
         		'id_cliente' => $row->id_cliente,
         		'estado' => $row->estado

            );
            $horarios_disponibles[] = $horario_disp;
            }

            if ($row->estado == "no disponible" && $row->id_cliente == $this->session->userdata('id')) {
            	$horario_res = array(
         		'id_horario' => $row->id_horario,
         		'nombre_gym' => $nombre_gym,
         		'nombre_cancha' => $datos_cancha['nombre'],
         		'fecha' => $row->fecha,
         		'hora' => $row->hora,
         		'id_cancha'=> $row->id_cancha,
         		'id_cliente' => $row->id_cliente,
         		'estado' => $row->estado

            ); 
            $horarios_reservados[] = $horario_res;
            }
     	 }
     	 //se podrian pasar los arreglos directamente a la vista
     	 $this->session->horarios_disponibles = $horarios_disponibles;
     	 $this->session->horarios_reservados = $horarios_reservados;
         $this->load->view('reserva');
    

		
	}


}
?>