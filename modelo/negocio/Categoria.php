<?php

class Categoria{
	
	 private $idcategoria;
	 private $descricao;
	 
	 public function getDescricao(){
	 	return $this->descricao;
	 }
	 
	 public function setDescricao($descricao){
	 	$this->descricao = $descricao;
	 }
	 
	 public function getIdCategoria(){
	 	return $this->idcategoria;
	 }
	 
	 public function setIdCategoria($idcategoria){
	 	$this->idcategoria = $idcategoria;
	 }
	 
	 
	
	
}

?>
