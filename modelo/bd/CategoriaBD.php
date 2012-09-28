<?php

include_once("conexao.php");
include_once 'modelo/negocio/Categoria.php';



class CategoriaBD{
	
	
	public function getOne($id){
		$mysql = new conexao;
		
		$sql = $mysql->sql_query("select * from categoria where idcategoria = $id");
		
		while($cat = mysql_fetch_array($sql)){
          $categoria = new Categoria();
		  $categoria->setDescricao($cat['descricao']);	
		  $categoria->setIdCategoria($cat['idcategoria']);		
			
		}
		
		return $categoria;	
				
	}
	
	public function getAll(){
		$mysql = new conexao;
	
		$sql = $mysql->sql_query("select * from categoria");
		
		$array = array();
		$i = 0;
		
	
		while($cat = mysql_fetch_array($sql)){
			$categoria = new Categoria();
			$categoria->setDescricao($cat['descricao']);
			$categoria->setIdCategoria($cat['idcategoria']);
			$array[$i]= $categoria;
			$i = $i + 1;
				
		}
	
		return $array;
	
	}

}

?>