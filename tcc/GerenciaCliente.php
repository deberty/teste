<html lang="en">
	<head>
		<?php
			//Estabelecendo conexão com a porta 3306 do MySql
			$link = mysql_connect("localhost:3306","root","") or die ("Erro na conexão: " . mysql_error());	
			//seleciona banco
			mysql_select_db("testes", $link) or die ("Erro ao abrir banco de dados: " . mysql_error());				
		?>
	</head>
	<body>
		<form class="well" method="POST" action="index.php?pagina=Redirecionador">
			<div class="control-group">
				
				<center><h3>Gerenciar Clientes</h3></center>
				
				<div class="row" style="margin-top:10px; margin-left:1px">
					<div class="controls span4">	
						<label>Nome</label>
						<input type="text" class="span12 mcg" id="nomeCliente"/>					
					</div>
					<div class="controls span4">	
						<label>Referência</label>
						<input type="text" class="span12 mcg" id="refCliente" placeholder="Como lembrar do cliente..."/>					
					</div>					
				</div>
				<div class="btn-group" style="margin-left:1px">
					<div class="span10" >	
						<button type="reset" name="consultarCliente" class="btn">Consultar</button>
						<button type="button" action="<?php carregaLista();?>" name="consultaCliente" name="pesquisaDetalhada" class="btn" style="margin-right:10px">Pesquisa Detalhada</button>
					</div>
					<div class="span2">	
						<button type="submit" name="novoCliente" class="btn" style="margin-right:10px">Novo Cliente</button>
					</div>
				</div>	
				<div class="controls" style="margin-top:10px">
					<table class="table table-striped" style="font-size:13px;width:100%;display:
						<?php
							function carregaLista(){
								$busca = mysql_query("SELECT * FROM ensaio")or die ("Erro na busca: " . mysql_error());
								header('Location: index.php');
							}
							if(empty($busca)){
								//retorna lista vazia
								echo 'none';
							}else{
								//retorna lista com dado
								echo 'block';
							}
						?>
					">
						<thead>
							<tr>
								<th style="width:120px">Nome</th>	
							</tr>
						</thead>
						<tbody>
							<?php
								while($reg = mysql_fetch_assoc($busca)){
							?>
							<tr>
								<td style="width:120px"><?php echo $reg['nome'] ?></td><td><a href="index.php?pagina=EditaCliente" action=""><i class="icon-pencil"/></a></td><td><a href="javascript:confirm('Deseja excluir este cliente?')" action=""><i class="icon-remove"/></a></td>
							</tr>
							<?php
								}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</form>	
	</body>
</html>


