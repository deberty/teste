<html lang="en">
	<body>
		<form class="well" method="POST" action="index.php?pagina=ConsultaReclamacoes">
			<div class="control-group">
				<div class="controls">
					<center><h3>Reclama��es</h3></center>	
					<label>Autor</label>
					<select name="" class="span3">
						<option value="">::Selecione Lista::</option>
						<option value="">Joao da Silva</option>
						<option value="">Paulo Henrique</option>
					</select>
					<label>T�tulo</label>
					<input type="text" class="span4 mcg" id="destMsg"/>	
					<label>Categoria</label>
					<select name="carregaListaMsg" class="span3">
						<option value="">::Selecione Lista::</option>
						<option value="">Bebida</option>
						<option value="">Alimento</option>
						<option value="">Atendimento</option>
					</select>					
					<label>Descri��o</label>
					<textarea class="input-xlarge mcg" id="descMsg" rows="3"></textarea></br>		
					<button type="submit" class="btn" style="margin-right:10px">Cadastrar</button>				
					<button type="submit" class="btn">Consultar</button>
				</div>
			</div>	
		</form>	
	</body>
</html>