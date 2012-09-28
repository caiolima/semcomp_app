<?php

include_once("conexao.php");
include_once 'modelo/negocio/Sala.php';



class SalaBD{


	public function getOne($id){
		$mysql = new conexao;

		$sql = $mysql->sql_query("select * from sala where idsala = $id");
		
		$sala = new Sala();
		
		while($sal = mysql_fetch_array($sql)){			
			$sala->setDescricao($sal['descricao']);
			$sala->setIdSala($sal['idsala']);
			$sala->setLocalizacao($sal['localizacao']);				
		}

		return $sala;

	}

	public function getAll(){
		$mysql = new conexao;

		$sql = $mysql->sql_query("select * from sala");

		$array = array();
		$i = 0;


		while($sal = mysql_fetch_array($sql)){
			$sala = new Sala();
			$sala->setDescricao($sal['descricao']);
			$sala->setIdSala($sal['idsala']);
			$sala->setLocalizacao($sal['localizacao']);		
			$array[$i]= $sala;
			$i = $i + 1;

		}

		return $array;

	}

}


?>