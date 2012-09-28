<div class="row"
	style="background-color: black; color: white; padding: 8px; font-size: 20px">
	 <?php if($has_back){?>
	 <a class="btn btn-inverse" href="<?php echo $link_back; ?>" style="margin-left: 20px"><i class="icon-arrow-left icon-white"></i></a> <img src="img/marca.png" width="30px" height="30px"
		style="margin-left: 10px" /> SEMCOMP 2012
	<?php }else{?>
	<img src="img/marca.png" width="30px" height="30px"
		style="margin-left: 20px" /> SEMCOMP 2012
	<?php }?>
</div>

<div class="navbar">
	<div class="navbar-inner">
		<ul class="nav">
			<li><a href="index.php">Home</a></li>
			<li><a href="show_eventos.php?action=m_agenda">Minha Agenda</a></li>
			
		</ul>
	</div>
</div>

<div class="row-fuild" style="margin-top: 10px;" align="center">
	<form class="form-search" action="show_eventos.php?action=search" method="get">
		<div class="input-append">
			<input id="s_value" name="s_value" type="text" class="span2 search-query" placeholder="Ache na programa&ccedil;&atilde;o">
			<button type="submit" class="btn">Pesquisar</button>
		</div>
	</form>

</div>
