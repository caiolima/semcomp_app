<?php

class Atividades{
	
	private $idatividades;
	private $descricao;
	private $titulo;
	private $categoria_idcategoria;
	private $imagem;
	
	public function getDescricao(){
		return $this->descricao;
	}
	
	public function setDescricao($descricao){
		$this->descricao = $descricao;
	}
	
	public function getImagem(){
		return $this->imagem;
	}
	
	public function setImagem($imagem){
		$this->imagem = $imagem;
	}
	
	
	public function getIdAtividades(){
		return $this->idatividades;
	}
	
	public function setIdAtividades($idatividades){
		$this->idatividades = $idatividades;
	}
	
	public function getTitulo(){
		return $this->titulo;
	}
	
	public function setTitulo($titulo){
		$this->titulo = $titulo;
	}
	
	public function getCategoria_IdCategoria(){
		return $this->categoria_idcategoria;
	}
	
	public function setCategoria_IdCategoria($categoria_idcategoria){
		 $this->categoria_idcategoria = $categoria_idcategoria;
	}
	
	
}


?>