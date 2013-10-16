<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
    xml:lang="pt-BR"
    lang="pt-BR"
    dir="ltr">
<head>
<title>SEMCOMP 2013</title>
<!-- Bootstrap -->

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
</head>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>
<body>


	<?php

	$has_back=true;
	$link_back="";
	if(empty($_SERVER['HTTP_REFERER'])){
		$link_back="index.php";
	}else{
		$link_back = $_SERVER['HTTP_REFERER'];
	}
	include_once 'header.php';
	include_once 'modelo/bd/AtividadesBD.php';
	include_once 'modelo/negocio/Atividades.php';
	include_once 'modelo/bd/SalaBD.php';
	include_once 'modelo/negocio/Sala.php';
	
	$atividadeBD = new AtividadesBD();
	$salaBD = new SalaBD();
	
	$idatividade = $_GET['idatividade'];
	$idsala = $_GET['idsala'];
	$data = $_GET['data'];
	$hora_inicio = $_GET['hora_inicio'];
	$hora_fim = $_GET['hora_fim'];
	
	$atividade = $atividadeBD->getOne($idatividade); 
	$sala = $salaBD->getOne($idsala);
	?>

	<div style="margin-left: 15px; margin-right: 15px;">
		<table class="table table-bordered">

			<tr style="color: white; background-color: #000000">
				<td style="text-align: center;"><?php echo utf8_encode($atividade->getTitulo());?></td>
			</tr>
			<tr>
				<td><div align="center"><img src="<?php echo $atividade->getImagem();?>" class="img-circle"  style="float: inherit;"/></div><br /> <?php echo utf8_encode($atividade->getDescricao());?></td>
			</tr>
		</table>
	</div>
	
	<div style="margin-left: 15px; margin-right: 15px;">
		<table class="table table-bordered">

			<tr style="color: white; background-color: #000000">
				<td style="text-align: center;">Onde?</td>
			</tr>
			<tr>
				<td><?php echo utf8_encode($sala->getDescricao());?><br>Data: <?php echo substr($data,8,2)?>/<?php echo substr($data,5,2)?>/<?php echo substr($data,0,4)?> das <?php echo substr($hora_inicio, 0,5)?>Hrs às <?php echo substr($hora_fim, 0,5)?>Hrs<br>Endereço: <?php echo utf8_encode($sala->getLocalizacao());?></td>
			</tr>
		</table>
	</div>
	
	<?php 
		include_once 'bottom.php';
	?>

</body>
</html>
