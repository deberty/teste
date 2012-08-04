<html lang="en">
	<head>
		<script src="..\bootstrap\bootstrap\js\jquery-1.7.2.js" type="text/javascript"></script>
		<script src="..\bootstrap\bootstrap\js\jquery-1.7.2.min.js" type="text/javascript"></script>
		<script src="..\bootstrap\bootstrap\js\bootstrap.js" type="text/javascript"></script>
		<script src="..\bootstrap\bootstrap\js\dropdown.js" type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="..\bootstrap\bootstrap\css\bootstrap.css"/>

	</head>
	<body>	
		<div class="container-fluid" style="margin-top:20px">
			<div class="row-fluid">
				<div class="span10" style="background-image: url('banner.png');height:185px">					
					
				
				</div>
			</div>
			<div class="row-fluid" style="margin-top:10px">
				<div class="span2" >				
					<div >
					  <h3 >Menu</h3>
					  <ul class="nav nav-tabs nav-stacked" >
						<li ><a class="mcg" href="?pagina=Home" ><h4>Home</h4></a></li>						
						<li><a class="mcg" href="?pagina=GerenciaCliente"><h4>Gerenciar Clientes</h4></a></li>
						<li><a class="mcg" href="?pagina=GerenciaEstabelecimento"><h4>Gerenciar Estabelecimento</h4></a></li>
						<li><a class="mcg" href="?pagina=GerenciaEvento"><h4>Gerenciar Eventos</h4></a></li>
						<li><a class="mcg" href="?pagina=GerenciaUsuario"><h4>Gerenciar Usuários</h4></a></li>
						<li><a class="mcg" href="?pagina=Mensagem"><h4>Mensagens</h4></a></li>				
						<li><a class="mcg" href="?pagina=Reclamacoes"><h4>Reclamações</h4></a></li>								
					  </ul>
					</div>						
				</div>				
				<div  id="conteudo" class="span8" >
				
					<?php
					
						if(empty($_GET['pagina']))
						include ("home.php");
						
						else{
							if(file_exists($_GET['pagina'].'.php'))
							{
								include($_GET['pagina'].'.php');
							}
						
							else
							{
							include ("suapaginadeerro.php");
							}
						}
					?>
				</div>
			</div>			
		</div>			
	</body>
</html>