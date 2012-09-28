<?php

include_once 'modelo/bd/SalaAtividadesBD.php';
include_once 'modelo/bd/AtividadesBD.php';
include_once 'modelo/negocio/Atividades.php';
include_once 'modelo/negocio/SalaAtividades.php';


$lista_quarta=array();
$lista_quinta=array();
$lista_sexta=array();
$lista_sabado=array();

$action=$_GET['action'];

if($action=="m_agenda"){
	
	$lista_my_activities=$_COOKIE['atividades'];
	if($lista_my_activities!=null){
		
		$atividades=split("_", $lista_my_activities);
		
		
	}

}else if($action=="categoria"){
	$idcategoria = $_GET['idcategoria'];
	$sala_atividade = new SalaAtividadesBD();
	$lista_quarta = $sala_atividade->getAllFromDateCategoria('2012-10-03', $idcategoria);
	$lista_quinta = $sala_atividade->getAllFromDateCategoria('2012-10-04', $idcategoria);
	$lista_sexta = $sala_atividade->getAllFromDateCategoria('2012-10-05', $idcategoria);
	$lista_sabado = $sala_atividade->getAllFromDateCategoria('2012-10-06', $idcategoria);

}else if($action=="search"){

	$search=$_GET['s_value'];
	$m_bd=new SalaAtividadesBD();
	$lista_quarta = $m_bd->searchByDate($search, "2012-10-03");
	$lista_quinta = $m_bd->searchByDate($search, "2012-10-04");
	$lista_sexta = $m_bd->searchByDate($search, "2012-10-05");
	$lista_sabado = $m_bd->searchByDate($search, "2012-10-06");

}

?>

<!DOCTYPE html>
<html>
<head>
<title>Bootstrap 101 Template</title>
<!-- Bootstrap -->

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
</head>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/cookie_atividades.js"></script>
<body>


	<?php

	$has_back=true;
	$link_back="index.php";

	include_once 'header.php'; ?>


	<div class="well well-small marge_15" align="center"
		style="color: white;">Quarta-Feira</div>

	<div
		style="margin-bottom: 20px; padding-right: 10px; padding-left: 10px;">
		<table class="table table-bordered">
			<?php foreach($lista_quarta as $atividade){
					$bd_atividades=new AtividadesBD();
					$m_atividade=$bd_atividades->getOne($atividade->getAtividaesId());
					$idsala = $atividade->getSalaId();
					$idatividade = $atividade->getAtividaesId();
					$dataa = $atividade->getData();
					$hora_inicio = $atividade->getHoraInicio();
					$hora_fim = $atividade->getHoraFim();
					
			 ?>
			<tr>
				<td width="24%"><?php $data=substr($atividade->getHoraInicio(),0,2)."h-".substr($atividade->getHoraFim(),0,2)."h"; echo $data;  ?></td>
				<td width="66%"><a href="desc_atividade.php?idsala=<?php echo $idsala?>&idatividade=<?php echo $idatividade?>&data=<?php echo $dataa?>&hora_inicio=<?php echo $hora_inicio?>&hora_fim=<?php echo $hora_fim?>"><?php echo $m_atividade->getDescricao();  ?></a></td>
				<td width="10%"><input type="checkbox"
					id="inlineCheckbox1" value="option1"></td>

			</tr>
			<?php } ?>
			
		</table>
	</div>

	<div class="well well-small marge_15" align="center"
		style="color: white;">Quinta-Feira</div>

	<div
		style="margin-bottom: 20px; padding-right: 10px; padding-left: 10px;">
		<table class="table table-bordered">
			<?php foreach($lista_quinta as $atividade){
					$bd_atividades=new AtividadesBD();
					$m_atividade=$bd_atividades->getOne($atividade->getAtividaesId());
					$idsala = $atividade->getSalaId();
					$idatividade = $atividade->getAtividaesId();
					$dataa = $atividade->getData();
					$hora_inicio = $atividade->getHoraInicio();
					$hora_fim = $atividade->getHoraFim();
			 ?>
			<tr>
				<td width="24%"><?php echo substr($atividade->getHoraInicio(),0,2)+"h-"+substr($atividade->getHoraFim(),0,2)+"h";  ?></td>
				<td width="66%"><a href="desc_atividade.php?idsala=<?php echo $idsala?>&idatividade=<?php echo $idatividade?>&data=<?php echo $dataa?>&hora_inicio=<?php echo $hora_inicio?>&hora_fim=<?php echo $hora_fim?>"><?php echo $m_atividade->getDescricao();  ?></a></td>
				<td width="10%"><input type="checkbox"
					id="inlineCheckbox1" value="option1" onclick="checkClicked(this.checked,<?php echo $atividade->getAtividaesId()?>)" ></td>

			</tr>
			<?php } ?>
		</table>
	</div>

	<div class="well well-small marge_15" align="center"
		style="color: white;">Sexta-Feira</div>

	<div
		style="margin-bottom: 20px; padding-right: 10px; padding-left: 10px;">
		<table class="table table-bordered">
			<?php foreach($lista_sexta as $atividade){
					$bd_atividades=new AtividadesBD();
					$m_atividade=$bd_atividades->getOne($atividade->getAtividaesId());
					$idsala = $atividade->getSalaId();
					$idatividade = $atividade->getAtividaesId();
					$dataa = $atividade->getData();
					$hora_inicio = $atividade->getHoraInicio();
					$hora_fim = $atividade->getHoraFim();
			 ?>
			<tr>
				<td width="24%"><?php echo substr($atividade->getHoraInicio(),0,2)+"h-"+substr($atividade->getHoraFim(),0,2)+"h";  ?></td>
				<td width="66%"><a href="desc_atividade.php?idsala=<?php echo $idsala?>&idatividade=<?php echo $idatividade?>&data=<?php echo $dataa?>&hora_inicio=<?php echo $hora_inicio?>&hora_fim=<?php echo $hora_fim?>"><?php echo $m_atividade->getDescricao();  ?></a></td>
				<td width="10%"><input type="checkbox"
					id="inlineCheckbox1" value="option1"></td>

			</tr>
			<?php } ?>
		</table>
	</div>

	<div class="well well-small marge_15" align="center"
		style="color: white;">Sabado</div>

	<div
		style="margin-bottom: 20px; padding-right: 10px; padding-left: 10px;">
		<table class="table table-bordered">
			<?php foreach($lista_sabado as $atividade){
					$bd_atividades=new AtividadesBD();
					$m_atividade=$bd_atividades->getOne($atividade->getAtividaesId());
					$idsala = $atividade->getSalaId();
					$idatividade = $atividade->getAtividaesId();
					$dataa = $atividade->getData();
					$hora_inicio = $atividade->getHoraInicio();
					$hora_fim = $atividade->getHoraFim();
			 ?>
			<tr>
				<td width="24%"><?php echo substr($atividade->getHoraInicio(),0,2)+"h-"+substr($atividade->getHoraFim(),0,2)+"h";  ?></td>
				<td width="66%"><a href="desc_atividade.php?idsala=<?php echo $idsala?>&idatividade=<?php echo $idatividade?>&data=<?php echo $dataa?>&hora_inicio=<?php echo $hora_inicio?>&hora_fim=<?php echo $hora_fim?>"><?php echo $m_atividade->getDescricao();  ?></a></td>
				<td width="10%"><input type="checkbox"
					id="inlineCheckbox1" value="option1"></td>

			</tr>
			<?php } ?>
		</table>
	</div>

</body>
</html>
