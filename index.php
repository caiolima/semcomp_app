
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
<script type="text/javascript">


function readFromCookie(name){
	var regExp = new RegExp(name+"=([^;]+)");
    var matches = regExp.exec(document.cookie);
    return matches ? matches[1] : null;
}

cookie=readFromCookie("teste");
if(cookie==null){
	var date = new Date();
	date.setTime(date.getTime() + (5 * 24 * 60 * 60 * 1000));
	document.cookie="teste=cookie_criado;expires="+date.toGMTString()+";";
}else
	alert(cookie);

</script>
<body>


	<?php
	$has_back=false;
	
	include_once 'header.php'; ?>


	<div class="well well-small marge_15" align="center"
		style="color: white;">O que esta acontecendo?</div>

	<div class="well well-small marge_15">

		<div class="row-fluid">
			<div class="span6">
				<a href="show_eventos.php"><img src="img/tb_principal.png"
					class="img-rounded"> </a>
			</div>
			<div class="span6">
				<a href="show_eventos.php"><img src="img/tb_globo.png"
					class="img-rounded"> </a>
			</div>
		</div>
		<div class="row-fluid" style="margin-top: 20px">
			<div class="span6">
				<a href="show_eventos.php"><img src="img/tb_empreendedor.png"
					class="img-rounded"> </a>
			</div>
			<div class="span6">
				<a href="show_eventos.php"><img src="img/tb_inovacao.png"
					class="img-rounded"> </a>
			</div>
		</div>
		<div class="row-fluid" style="margin-top: 20px">
			<div class="span6">
				<a href="show_eventos.php"><img src="img/tb_ciencia.png"
					class="img-rounded"> </a>
			</div>
			<div class="span6">
				<a href="show_eventos.php"><img src="img/tb_tecnologia.png"
					class="img-rounded"> </a>
			</div>
		</div>
	</div>

</body>
</html>
