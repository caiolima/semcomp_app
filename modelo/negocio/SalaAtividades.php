<?php

class SalaAtividades{
	
	private $data;
	private $hora_inicio;
	private $hora_fim;
	private $sala_idsala;
	private $atividades_idatividades;
	private $atividades_categoria_idcategoria;
	
	
	public function getData(){
		return $this->data;
	}
	
	public function setData($data){
		 $this->data = $data;
	}
	
	public function getHoraInicio(){
		return $this->hora_inicio;
	}
	
	public function setHoraInicio($hora_inicio){
		$this->hora_inicio = $hora_inicio;
	}
	
	public function getHoraFim(){
		return $this->hora_fim;
	}
	
	public function setHoraFim($hora_fim){
		$this->hora_fim = $hora_fim;
	}
	
	public function getSalaId(){
		return $this->sala_idsala;
	}
	
	public function setSalaId($sala_idsala){
		$this->sala_idsala = $sala_idsala;
	}
	
	public function getAtividaesId(){
		return $this->atividades_idatividades;
	}
	
	public function setAtividadesId($atividades_idatividades){
		$this->atividades_idatividades = $atividades_idatividades;
	}
	
	public function getCategoriaId(){
		return $this->atividades_categoria_idcategoria;
	}
	
	public function setCategoriaId($atividades_categoria_idcategoria){
		$this->atividades_categoria_idcategoria = $atividades_categoria_idcategoria;
	}
	
}

?>
