<?php

include_once 'modelo/bd/SalaAtividadesBD.php';
include_once 'modelo/negocio/SalaAtividades.php';

$lista_quarta=array();
$lista_quinta=array();
$lista_sexta=array();
$lista_sabado=array();

$action=$_GET['action'];

if($action=="m_agenda"){
	
}else if($action=="categoria"){
	$idcategoria = $_GET['idcategoria'];
	$sala_atividade = new SalaAtividadesBD();
	$lista_quarta = $sala_atividade->getAllFromDateCategoria('2012-10-03', $idcategoria);
	$lista_quinta = $sala_atividade->getAllFromDateCategoria('2012-10-04', $idcategoria);
	$lista_sexta = $sala_atividade->getAllFromDateCategoria('2012-10-05', $idcategoria);
	$lista_sabado = $sala_atividade->getAllFromDateCategoria('2012-10-06', $idcategoria);
	
}else if($action=="search"){
	
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
			<tr>
				<td width="24%">10h-11h</td>
				<td width="66%"><a href="desc_atividade.php">Desc da atividade</a></td>
				<td width="10%"><input type="checkbox" id="inlineCheckbox1"
					value="option1"></td>

			</tr>
			<tr>
				<td width="24%">10h-11h</td>
				<td width="66%"><a href="#">Desc da atividade</a></td>
				<td width="10%"><input type="checkbox" id="inlineCheckbox1"
					value="option1"></td>

			</tr>
			<tr>
				<td width="24%">10h-11h</td>
				<td width="66%"><a href="#">Desc da atividade</a></td>
				<td width="10%"><input type="checkbox" id="inlineCheckbox1"
					value="option1"></td>

			</tr>
			<tr>
				<td width="24%">10h-11h</td>
				<td width="66%"><a href="desc_atividade.php">Desc da atividade</a></td>
				<td width="10%"><input type="checkbox" id="inlineCheckbox1"
					value="option1"></td>

			</tr>
		</table>
	</div>

	<div class="well well-small marge_15" align="center"
		style="color: white;">Quinta-Feira</div>

	<div
		style="margin-bottom: 20px; padding-right: 10px; padding-left: 10px;">
		<table class="table table-bordered">
			<tr>
				<td width="24%">10h-11h</td>
				<td width="66%"><a href="desc_atividade.php">Desc da atividade</a></td>
				<td width="10%"><input type="checkbox" id="inlineCheckbox1"
					value="option1"></td>

			</tr>
			<tr>
				<td width="24%">10h-11h</td>
				<td width="66%"><a href="desc_atividade.php">Desc da atividade</a></td>
				<td width="10%"><input type="checkbox" id="inlineCheckbox1"
					value="option1"></td>

			</tr>
			<tr>
				<td width="24%">10h-11h</td>
				<td width="66%"><a href="desc_atividade.php">Desc da atividade</a></td>
				<td width="10%"><input type="checkbox" id="inlineCheckbox1"
					value="option1"></td>

			</tr>
			<tr>
				<td width="24%">10h-11h</td>
				<td width="66%"><a href="desc_atividade.php">Desc da atividade</a></td>
				<td width="10%"><input type="checkbox" id="inlineCheckbox1"
					value="option1"></td>

			</tr>
		</table>
	</div>

	<div class="well well-small marge_15" align="center"
		style="color: white;">Sexta-Feira</div>

	<div
		style="margin-bottom: 20px; padding-right: 10px; padding-left: 10px;">
		<table class="table table-bordered">
			<tr>
				<td width="24%">10h-11h</td>
				<td width="66%"><a href="desc_atividade.php">Desc da atividade</a></td>
				<td width="10%"><input type="checkbox" id="inlineCheckbox1"
					value="option1"></td>

			</tr>
			<tr>
				<td width="24%">10h-11h</td>
				<td width="66%"><a href="desc_atividade.php">Desc da atividade</a></td>
				<td width="10%"><input type="checkbox" id="inlineCheckbox1"
					value="option1"></td>

			</tr>
			<tr>
				<td width="24%">10h-11h</td>
				<td width="66%"><a href="desc_atividade.php">Desc da atividade</a></td>
				<td width="10%"><input type="checkbox" id="inlineCheckbox1"
					value="option1"></td>

			</tr>
			<tr>
				<td width="24%">10h-11h</td>
				<td width="66%"><a href="desc_atividade.php">Desc da atividade</a></td>
				<td width="10%"><input type="checkbox" id="inlineCheckbox1"
					value="option1"></td>

			</tr>
		</table>
	</div>

	<div class="well well-small marge_15" align="center"
		style="color: white;">Sabado</div>

	<div
		style="margin-bottom: 20px; padding-right: 10px; padding-left: 10px;">
		<table class="table table-bordered">
			<tr>
				<td width="24%">10h-11h</td>
				<td width="66%"><a href="desc_atividade.php">Desc da atividade</a></td>
				<td width="10%"><input type="checkbox" id="inlineCheckbox1"
					value="option1"></td>

			</tr>
			<tr>
				<td width="24%">10h-11h</td>
				<td width="66%"><a href="desc_atividade.php">Desc da atividade</a></td>
				<td width="10%"><input type="checkbox" id="inlineCheckbox1"
					value="option1"></td>

			</tr>
			<tr>
				<td width="24%">10h-11h</td>
				<td width="66%"><a href="desc_atividade.php">Desc da atividade</a></td>
				<td width="10%"><input type="checkbox" id="inlineCheckbox1"
					value="option1"></td>

			</tr>
			<tr>
				<td width="24%">10h-11h</td>
				<td width="66%"><a href="desc_atividade.php">Desc da atividade</a></td>
				<td width="10%"><input type="checkbox" id="inlineCheckbox1"
					value="option1"></td>

			</tr>
		</table>
	</div>

</body>
</html>
