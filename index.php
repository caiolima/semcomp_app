<?php 
	ini_set('default_charset','UTF-8');
?>  
<!DOCTYPE html>
<html>
<head>
<title>SEMCOMP 2013</title>
<!-- Bootstrap -->

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
</head>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>
<style type="text/css">
	.trilha {
	    height: 100px;
	    width: 100px;
	    background: none repeat scroll 0% 0% rgb(51, 51, 51);
	    border: 6px solid rgb(168, 207, 69);
	    box-shadow: -5px 6px 0px rgba(0, 0, 0, 0.05);
	    border-radius: 50% 50% 50% 50%;
	    font-family: "Droid Sans",sans-serif;
	    color: rgb(255, 255, 255);
	    text-align: center;
	}

	.trilha .titulo h4 {
	    font-family: "Droid Sans",sans-serif;
	    text-align: center;
	    position: relative;
	    top: 20px;
	    font-size: 17px;
	}
</style>
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
		Em cada Trilha
	</div>

	<div class="well well-small marge_15" align="center">

		<div class="row-fluid">
			<div class="span6">
				<a href="show_eventos.php?action=categoria&idcategoria=2">
					<div class="trilha">
						<div class="titulo">
							<h4>Trilha<br/>Python</h4>
						</div>
					</div>
				</a>
			</div>
			<div class="span6">
				<a href="show_eventos.php?action=categoria&idcategoria=3">
					<div class="trilha">
						<div class="titulo">
							<h4>Trilha<br/>Front-End</h4>
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="row-fluid" style="margin-top: 20px">
			<div class="span6">
				<a href="show_eventos.php?action=categoria&idcategoria=4">
					<div class="trilha">
						<div class="titulo">
							<h4>Trilha<br/>Mobile</h4>
						</div>
					</div>
				</a>
			</div>
			<div class="span6">
				<a href="show_eventos.php?action=categoria&idcategoria=5">
					<div class="trilha">
						<div class="titulo">
							<h4>Trilha<br/>Empreende-<br/>dorismo</h4>
						</div>
					</div>
				</a>
			</div>
		</div>
		
	</div>

</body>
</html>