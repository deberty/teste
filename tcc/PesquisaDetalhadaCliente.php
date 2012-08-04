<html lang="en">
	<body>
		<form class="well" method="POST" action="index.php?pagina=Redirecionador">
			<div class="control-group">
				<div class="controls">	
					<center><h3>Pesquisa Detalhada de Clientes</h3></center>
					<label>Nome</label>
					<input type="text" class="span4 mcg" id="nomeCliente"/>					
					<label>Referência</label>
					<input type="text" class="span3 mcg" id="refCliente" placeholder="Como lembrar do cliente..."/>					
					<label>Data de Nascimento</label>
					<input type="text" class="span2 mcg" id="dtNascCliente"/>										
					<label>Telefone</label>					
					<input type="text" class="span2 mcg" id="telCliente"/>
					<label>Endereço</label>
					<input type="text" class="span4 mcg" id="endCliente"/>		
					<label>E-mail</label>
					<input type="text" class="span4 mcg" id="emailCliente"/>		
					<button type="submit" name="consultarPesquisaDetalhada" class="btn" style="margin-right:10px">Consultar</button>
					<button type="submit" name="cancelarPesquisaDetalhada" class="btn">Cancelar</button>
				</div>
			</div>	
		</form>	
	</body>
</html>


