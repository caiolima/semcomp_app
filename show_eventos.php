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


if(empty($_GET['dia'])){
	$dia = "0";
}else{
	$dia = $_GET['dia'];

}
$lista_my_activities="";
if(!empty($_COOKIE['atividades']))
	$lista_my_activities=$_COOKIE['atividades'];

$atividades=split("_", $lista_my_activities);

if($action=="m_agenda"){
	$isMyAgenda=true;

	if($lista_my_activities!=null){
		
		
		if(!empty($atividades)){
			$sala_atividade = new SalaAtividadesBD();
			$lista_quarta = $sala_atividade->getMyList($atividades,'2013-10-16');
			$lista_quinta = $sala_atividade->getMyList($atividades,'2013-10-17');
			$lista_sexta = $sala_atividade->getMyList($atividades,'2013-10-18');
			$lista_sabado = $sala_atividade->getMyList($atividades,'2013-10-19');
		}

	}

}else if($action=="categoria"){
	$idcategoria = $_GET['idcategoria'];
	$sala_atividade = new SalaAtividadesBD();
	$lista_quarta = $sala_atividade->getAllFromDateCategoria('2013-10-16', $idcategoria);
	$lista_quinta = $sala_atividade->getAllFromDateCategoria('2013-10-17', $idcategoria);
	$lista_sexta = $sala_atividade->getAllFromDateCategoria('2013-10-18', $idcategoria);
	$lista_sabado = $sala_atividade->getAllFromDateCategoria('2013-10-19', $idcategoria);

}else if($action=="search"){

	$search=$_POST['s_value'];
	
	$m_bd=new SalaAtividadesBD();
	$lista_quarta = $m_bd->searchByDate($search, "2013-10-16");
	$lista_quinta = $m_bd->searchByDate($search, "2013-10-17");
	$lista_sexta = $m_bd->searchByDate($search, "2013-10-18");
	$lista_sabado = $m_bd->searchByDate($search, "2013-10-19");

}else if($action=="dia"){

	$dia=$_GET['dia'];
	
	$sala_atividade = new SalaAtividadesBD();
	if($dia == "1")
	  $lista_quarta = $sala_atividade->getAllFromDate('2013-10-16');
	else if($dia == "2")
	       $lista_quinta = $sala_atividade->getAllFromDate('2013-10-17');
	     else if($dia == "3")
	            $lista_sexta = $sala_atividade->getAllFromDate('2013-10-18');
	          else if($dia == "4")
	                 $lista_sabado = $sala_atividade->getAllFromDate('2013-10-19');

}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
    xml:lang="pt-BR"
    lang="pt-BR"
    dir="ltr">
<head>
<title>SEMCOMP 2013</title>
<!-- Bootstrap -->


<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/cookie_atividades.js"></script>
<body>


	<?php

	$has_back=true;
	$link_back="index.php";

	include_once 'header.php'; ?>

    <?php 
   
    if(($action != "dia") || ($dia == "1")){
    ?>
	<div class="well well-small marge_15" align="center"
		style="color: white;">Quarta-Feira</div>

	<div
		style="margin-bottom: 20px; padding-right: 10px; padding-left: 10px;">
		<table class="table table-bordered">
			<?php 
			if(empty($lista_quarta)){
					
				?>
			<tr>
				<td style="text-align: center;" width="100%">Sem palestras ou mini-cursos</td>
			</tr>

			<?php
			}else{
				foreach($lista_quarta as $atividade){

					$bd_atividades=new AtividadesBD();
					$m_atividade=$bd_atividades->getOne($atividade->getAtividaesId());
					$idsala = $atividade->getSalaId();
					$idatividade = $atividade->getAtividaesId();
					$dataa = $atividade->getData();
					$hora_inicio = $atividade->getHoraInicio();
					$hora_fim = $atividade->getHoraFim();

					?>
			<tr>
				<td width="24%"><?php $data=substr($atividade->getHoraInicio(),0,5)."h-".substr($atividade->getHoraFim(),0,5)."h"; echo $data;  ?>
				</td>
				<td width="66%"><a
					href="desc_atividade.php?idsala=<?php echo $idsala?>&idatividade=<?php echo $idatividade?>&data=<?php echo $dataa?>&hora_inicio=<?php echo $hora_inicio?>&hora_fim=<?php echo $hora_fim?>"><?php echo utf8_encode($m_atividade->getTitulo());  ?>
				</a></td>
				<td width="10%"><input type="checkbox" id="inlineCheckbox1"
					value="option1"
					<?php if(in_array($atividade->getAtividaesId(), $atividades)){?>checked="checked"<?php }?>
					onclick="checkClicked(this.checked,<?php echo $atividade->getAtividaesId();?>)">
				</td>

			</tr>
			<?php }
			} ?>

		</table>
	</div>
	
	<?php }?>
	
	 <?php 
		 
    if(($action != "dia") || ($dia == "2")){
    ?>

	<div class="well well-small marge_15" align="center"
		style="color: white;">Quinta-Feira</div>

	<div
		style="margin-bottom: 20px; padding-right: 10px; padding-left: 10px;">
		<table class="table table-bordered">
			<?php 
			if(empty($lista_quinta)){
					
				?>
			<tr>
				<td style="text-align: center;" width="100%">Sem palestras ou mini-cursos</td>
			</tr>

			<?php
			}else{
				foreach($lista_quinta as $atividade){

					$bd_atividades=new AtividadesBD();
					$m_atividade=$bd_atividades->getOne($atividade->getAtividaesId());
					$idsala = $atividade->getSalaId();
					$idatividade = $atividade->getAtividaesId();
					$dataa = $atividade->getData();
					$hora_inicio = $atividade->getHoraInicio();
					$hora_fim = $atividade->getHoraFim();

					?>
			<tr>
				<td width="24%"><?php $data=substr($atividade->getHoraInicio(),0,5)."h-".substr($atividade->getHoraFim(),0,5)."h"; echo $data;  ?>
				</td>
				<td width="66%"><a
					href="desc_atividade.php?idsala=<?php echo $idsala?>&idatividade=<?php echo $idatividade?>&data=<?php echo $dataa?>&hora_inicio=<?php echo $hora_inicio?>&hora_fim=<?php echo $hora_fim?>"><?php echo utf8_encode($m_atividade->getTitulo());  ?>
				</a></td>
				<td width="10%"><input type="checkbox" id="inlineCheckbox1"
					value="option1"
					<?php if(in_array($atividade->getAtividaesId(), $atividades)){?>checked="checked"<?php }?>
					onclick="checkClicked(this.checked,<?php echo $atividade->getAtividaesId()?>)">
				</td>

			</tr>
			<?php }
			} ?>

		</table>
	</div>
	
	<?php }?>
	
	 <?php 
	
    if(($action != "dia") || ($dia == "3")){
    ?>

	<div class="well well-small marge_15" align="center"
		style="color: white;">Sexta-Feira</div>

	<div
		style="margin-bottom: 20px; padding-right: 10px; padding-left: 10px;">
		<table class="table table-bordered">
			<?php 
			if(empty($lista_sexta)){
					
				?>
			<tr>
				<td style="text-align: center;" width="100%">Sem palestras ou mini-cursos</td>
			</tr>

			<?php
			}else{
				foreach($lista_sexta as $atividade){

					$bd_atividades=new AtividadesBD();
					$m_atividade=$bd_atividades->getOne($atividade->getAtividaesId());
					$idsala = $atividade->getSalaId();
					$idatividade = $atividade->getAtividaesId();
					$dataa = $atividade->getData();
					$hora_inicio = $atividade->getHoraInicio();
					$hora_fim = $atividade->getHoraFim();

					?>
			<tr>
				<td width="24%"><?php $data=substr($atividade->getHoraInicio(),0,5)."h-".substr($atividade->getHoraFim(),0,5)."h"; echo $data;  ?>
				</td>
				<td width="66%"><a
					href="desc_atividade.php?idsala=<?php echo $idsala?>&idatividade=<?php echo $idatividade?>&data=<?php echo $dataa?>&hora_inicio=<?php echo $hora_inicio?>&hora_fim=<?php echo $hora_fim?>"><?php echo utf8_encode($m_atividade->getTitulo());  ?>
				</a></td>
				<td width="10%"><input type="checkbox" id="inlineCheckbox1"
					value="option1"
					<?php if(in_array($atividade->getAtividaesId(), $atividades)){?>checked="checked"<?php }?>
					onclick="checkClicked(this.checked,<?php echo $atividade->getAtividaesId()?>)">
				</td>

			</tr>
			<?php }
			} ?>

		</table>
	</div>
	
	<?php }?>
	 <?php 
    if(($action != "dia") || ($dia == "4")){
    ?>

	<div class="well well-small marge_15" align="center"
		style="color: white;">Sabado</div>

	<div
		style="margin-bottom: 20px; padding-right: 10px; padding-left: 10px;">
		<table class="table table-bordered">
			<?php 
			if(empty($lista_sabado)){
					
				?>
			<tr>
				<td style="text-align: center;" width="100%">Sem palestras ou mini-cursos</td>
			</tr>

			<?php
			}else{
				foreach($lista_sabado as $atividade){

					$bd_atividades=new AtividadesBD();
					$m_atividade=$bd_atividades->getOne($atividade->getAtividaesId());
					$idsala = $atividade->getSalaId();
					$idatividade = $atividade->getAtividaesId();
					$dataa = $atividade->getData();
					$hora_inicio = $atividade->getHoraInicio();
					$hora_fim = $atividade->getHoraFim();

					?>
			<tr>
				<td width="24%"><?php $data=substr($atividade->getHoraInicio(),0,5)."h-".substr($atividade->getHoraFim(),0,5)."h"; echo $data;  ?>
				</td>
				<td width="66%"><a
					href="desc_atividade.php?idsala=<?php echo $idsala?>&idatividade=<?php echo $idatividade?>&data=<?php echo $dataa?>&hora_inicio=<?php echo $hora_inicio?>&hora_fim=<?php echo $hora_fim?>"><?php echo utf8_encode($m_atividade->getTitulo());  ?>
				</a></td>
				<td width="10%"><input type="checkbox" id="inlineCheckbox1"
					value="option1"
					<?php if(in_array($atividade->getAtividaesId(), $atividades)){?>checked="checked"<?php }?>
					onclick="checkClicked(this.checked,<?php echo $atividade->getAtividaesId()?>)">
				</td>

			</tr>
			<?php }
			} ?>

		</table>
	</div>
	<?php }?>

	<?php 
		include_once 'bottom.php';
	?>
</body>
</html>
