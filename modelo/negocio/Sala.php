<?php

Class Sala{
	
	private $idsala;
	private $descricao;
	private $localizacao;
	
	public function getDescricao(){
		return $this->descricao;
	}
	
	public function setDescricao($descricao){
		$this->descricao = $descricao;
	}
	
	public function getIdSala(){
		return $this->idsala;
	}
	
	public function setIdSala($idsala){
		$this->idsala = $idsala;
	}
	
	public function getLocalizacao(){
		return $this->localizacao;
	}
	
	public function setLocalizacao($localizacao){
		$this->localizacao = $localizacao;
	}
	
	
}

?>