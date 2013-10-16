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
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
</head>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>
<style type="text/css">
	.trilha {
	    height: 100px;
	    width: 100px;
	    background: none repeat scroll 0% 0% rgb(0, 0, 0);
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

	.circle {
	    width: 100px;
	    height: 100px;
	    background: none repeat scroll 0% 0% rgb(0, 0, 0);
	    border: 6px solid rgb(168, 207, 69);
	    box-shadow: -5px 6px 0px rgba(0, 0, 0, 0.05);
	    border-radius: 50% 50% 50% 50%;
	    font-family: "Droid Sans",sans-serif;
	    color: rgb(255, 255, 255);
	    text-align: center;   
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
				<a href="show_eventos.php?action=dia&dia=1">
					<div class="circle">
						<h4 style="margin-top: 27px; font-size: 20px;">
							16/10<br>	
							<span>(Quarta)</span>
						</h4>
					</div>
				</a>
			</div>
			<div class="span6">
				<a href="show_eventos.php?action=dia&dia=2">
					<div class="circle">
						<h4 style="margin-top: 27px; font-size: 20px;">
							17/10<br>	
							<span>(Quinta)</span>
						</h4>
					</div>
				</a>
			</div>
		</div>
		<div class="row-fluid" style="margin-top: 20px">
			<div class="span6">
				<a href="show_eventos.php?action=dia&dia=3">
					<div class="circle">
						<h4 style="margin-top: 27px; font-size: 20px;">
							18/10<br>	
							<span>(Sexta)</span>
						</h4>
					</div>
				</a>
			</div>
			<div class="span6">
				<a href="show_eventos.php?action=dia&dia=4">
					<div class="circle">
						<h4 style="margin-top: 27px; font-size: 20px;">
							19/10<br>	
							<span>(Sábado)</span>
						</h4>
					</div>
				</a>
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
							<h4>Trilha<br/>Empre...</h4>
						</div>
					</div>
				</a>
			</div>
		</div>
		
	</div>

</body>
</html>