<?php

class Horarios extends CI_Model {


	public function consultar(){
		$query=$this->db->get('horarios');
		return $query;
	}
	public function consultar_canchas($id_cancha){
		$query=$this->db->where('id_cancha',$id_cancha);
		$query=$this->db->get('canchas');
		return $query->row();
	}

	public function consultar_gym($id_gym){
		$query=$this->db->where('id_gym',$id_gym);
		$query=$this->db->get('gym');
		$row = $query->row();
		return $row->Nombre;
	}	

	public function reservar($id_horario, $id_cliente){
		$query=$this->db->query("UPDATE `horarios` SET `estado` = 'no disponible' WHERE `horarios`.`id_horario` = $id_horario;");
		$query=$this->db->query("UPDATE `horarios` SET `id_cliente` = $id_cliente WHERE `horarios`.`id_horario` = $id_horario;");
		if ($query) {
			$this->session->success_msg = "Operacion realizada con exito.";
		}else{
		$this->session->success_msg = "Ha ocurrido un error, intentelo de nuevo mas tarde, si el error persiste, comuniquese con el administrador del sitio.";
		}
	}
		public function cancelar_reserva($id_horario, $id_cliente){
		$query=$this->db->query("UPDATE `horarios` SET `estado` = 'disponible' WHERE `horarios`.`id_horario` = $id_horario;");
		$query=$this->db->query("UPDATE `horarios` SET `id_cliente` = null WHERE `horarios`.`id_horario` = $id_horario;");
		if ($query) {
			$this->session->success_msg = "Operacion realizada con exito. ";
		}else{
		$this->session->success_msg = "Ha ocurrido un error, intentelo de nuevo mas tarde, si el error persiste, comuniquese con el administrador del sitio. ";
		}
	}
}
?>