<?php

include_once("conexao.php");
include_once 'modelo/negocio/SalaAtividades.php';



class SalaAtividadesBD{


	public function getOne($idatividades){
		$mysql = new conexao;

		$sql = $mysql->sql_query("select * from sala_atividades where atividades_idatividades = $idatividades");

		$sala_atividade = new SalaAtividades();

		while($salaatividade = mysql_fetch_array($sql)){
			$sala_atividade->setData($salaatividade['data']);
			$sala_atividade->setHoraInicio($salaatividade['hora_inicio']);
			$sala_atividade->setHoraFim($salaatividade['hora_fim']);
			$sala_atividade->setSalaId($salaatividade['sala_idsala']);
			$sala_atividade->setAtividadesId($salaatividade['atividades_idatividades']);
			$sala_atividade->setCategoriaId($salaatividade['atividades_categoria_idcategoria']);
		}

		return $sala_atividade;

	}

	public function getAll(){
		$mysql = new conexao;

		$sql = $mysql->sql_query("select * from sala_atividades");

		$array = array();
		$i = 0;


		while($salaatividade = mysql_fetch_array($sql)){
			$sala_atividade = new SalaAtividades();
			$sala_atividade->setData($salaatividade['data']);
			$sala_atividade->setHoraInicio($salaatividade['hora_inicio']);
			$sala_atividade->setHoraFim($salaatividade['hora_fim']);
			$sala_atividade->setSalaId($salaatividade['sala_idsala']);
			$sala_atividade->setAtividadesId($salaatividade['atividades_idatividades']);
			$sala_atividade->setCategoriaId($salaatividade['atividades_categoria_idcategoria']);
			$array[$i]= $sala_atividade;
			$i = $i + 1;

		}

		return $array;

	}

	public function getAllFromDate($date){
		$mysql = new conexao;

		$sql = $mysql->sql_query("select * from sala_atividades where data='"+$date+"' order by hora_inicio");

		$array = array();
		$i = 0;


		while($salaatividade = mysql_fetch_array($sql)){
			$sala_atividade = new SalaAtividades();
			$sala_atividade->setData($salaatividade['data']);
			$sala_atividade->setHoraInicio($salaatividade['hora_inicio']);
			$sala_atividade->setHoraFim($salaatividade['hora_fim']);
			$sala_atividade->setSalaId($salaatividade['sala_idsala']);
			$sala_atividade->setAtividadesId($salaatividade['atividades_idatividades']);
			$sala_atividade->setCategoriaId($salaatividade['atividades_categoria_idcategoria']);
			$array[$i]= $sala_atividade;
			$i = $i + 1;

		}

		return $array;

	}

	public function getAllFromDateCategoria($date,$idcategoria){
		$mysql = new conexao;

		$sql = $mysql->sql_query("select * from sala_atividades inner join atividades on atividades_idatividades = atividades.idatividades inner join categoria on atividades.categoria_idcategoria = categoria.idcategoria where categoria.idcategoria = $idcategoria and data = '$date' order by hora_inicio;");


		$array = array();
		$i = 0;


		while($salaatividade = mysql_fetch_array($sql)){
			$sala_atividade = new SalaAtividades();
			$sala_atividade->setData($salaatividade['data']);
			$sala_atividade->setHoraInicio($salaatividade['hora_inicio']);
			$sala_atividade->setHoraFim($salaatividade['hora_fim']);
			$sala_atividade->setSalaId($salaatividade['sala_idsala']);
			$sala_atividade->setAtividadesId($salaatividade['atividades_idatividades']);
			$sala_atividade->setCategoriaId($salaatividade['atividades_categoria_idcategoria']);
			$array[$i]= $sala_atividade;
			$i = $i + 1;

		}

		return $array;

	}

	public function searchByDate($search, $date){
		$mysql = new conexao;

		$sql = $mysql->sql_query("select * from sala_atividades inner join atividades on atividades_idatividades = atividades.idatividades where atividades.titulo like '%"+$search+"d%' or atividades.descricao like %"+$search+"d%' and data = '"+$date+"' order by hora_inicio;");


		$array = array();
		$i = 0;


		while($salaatividade = mysql_fetch_array($sql)){
			$sala_atividade = new SalaAtividades();
			$sala_atividade->setData($salaatividade['data']);
			$sala_atividade->setHoraInicio($salaatividade['hora_inicio']);
			$sala_atividade->setHoraFim($salaatividade['hora_fim']);
			$sala_atividade->setSalaId($salaatividade['sala_idsala']);
			$sala_atividade->setAtividadesId($salaatividade['atividades_idatividades']);
			$sala_atividade->setCategoriaId($salaatividade['atividades_categoria_idcategoria']);
			$array[$i]= $sala_atividade;
			$i = $i + 1;

		}


	}

}




?>
