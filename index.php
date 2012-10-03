<?php 
	ini_set('default_charset','UTF-8');
?>  
<!DOCTYPE html>
<html>
<head>
<title>SEMCOMP 2012</title>
<!-- Bootstrap -->

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
</head>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>

<body>

	
	<?php
	$has_back=false;
	$isIndex=true;
	
	include_once 'header.php'; 
	?>
	

	<div class="well well-small marge_15" align="center" style="color: white;">
		O que esta acontecendo?
	</div>

	<div class="well well-small marge_15" align="center">

		<div class="row-fluid">
			<div class="span6">
				<a href="show_eventos.php?action=dia&dia=1"><img width="100px" height="100px" src="img/dia_1.png" class="img-rounded"></a>
			</div>
			<div class="span6">
				<a href="show_eventos.php?action=dia&dia=2"><img width="100px" height="100px" src="img/dia_2.png" class="img-rounded"></a>
			</div>
		</div>
		<div class="row-fluid" style="margin-top: 20px">
			<div class="span6">
				<a href="show_eventos.php?action=dia&dia=3"><img width="100px" height="100px" src="img/dia_3.png" class="img-rounded"></a>
			</div>
			<div class="span6">
				<a href="show_eventos.php?action=dia&dia=4"><img width="100px" height="100px" src="img/dia_4.png" class="img-rounded"></a>
			</div>
		</div>
	</div>
	
	<div class="well well-small marge_15" align="center" style="color: white;">
		Em cada espa&ccedil;o
	</div>

	<div class="well well-small marge_15">

		<div class="row-fluid">
			<div class="span6">
				<a href="show_eventos.php?action=categoria&idcategoria=2"><img src="img/tb_principal.png" class="img-rounded"></a>
			</div>
			<div class="span6">
				<a href="show_eventos.php?action=categoria&idcategoria=3"><img src="img/tb_globo.png" class="img-rounded"></a>
			</div>
		</div>
		<div class="row-fluid" style="margin-top: 20px">
			<div class="span6">
				<a href="show_eventos.php?action=categoria&idcategoria=4"><img src="img/tb_empreendedor.png" class="img-rounded"></a>
			</div>
			<div class="span6">
				<a href="show_eventos.php?action=categoria&idcategoria=5"><img src="img/tb_inovacao.png" class="img-rounded"></a>
			</div>
		</div>
		<div class="row-fluid" style="margin-top: 20px">
			<div class="span6">
				<a href="show_eventos.php?action=categoria&idcategoria=6"><img src="img/tb_ciencia.png" class="img-rounded"></a>
			</div>
			<div class="span6">
				<a href="show_eventos.php?action=categoria&idcategoria=7"><img src="img/tb_tecnologia.png" class="img-rounded"></a>
			</div>
		</div>
	</div>

</body>
</html>