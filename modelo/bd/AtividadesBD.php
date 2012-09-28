<?php

include_once("conexao.php");
include_once 'modelo/negocio/Atividades.php';



class AtividadesBD{


	public function getOne($id){
		$mysql = new conexao;

		$sql = $mysql->sql_query("select * from atividades where idatividades = $id");

		$atividades = new Atividades();

		while($ativi = mysql_fetch_array($sql)){
			$atividades->setDescricao($ativi['descricao']);
			$atividades->setIdAtividades($ativi['idatividades']);
			$atividades->setTitulo($ativi['titulo']);
			$atividades->setCategoria_IdCategoria($ativi['categoria_idcategoria']);
			$atividades->setImagem($ativi['imagem']);
		}

		return $atividades;

	}

	public function getAll(){
		$mysql = new conexao;

		$sql = $mysql->sql_query("select * from atividades");

		$array = array();
		$i = 0;


		while($ativi = mysql_fetch_array($sql)){
			$atividades = new Atividades();
			$atividades->setDescricao($ativi['descricao']);
			$atividades->setIdAtividades($ativi['idatividades']);
			$atividades->setTitulo($ativi['titulo']);
			$atividades->setCategoria_IdCategoria($ativi['categoria_idcategoria']);
			$atividades->setImagem($ativi['imagem']);
			$array[$i]= $atividades;
			$i = $i + 1;

		}

		return $array;

	}

}



?>