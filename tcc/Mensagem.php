<html lang="en">
	<body>
		<form class="well" method="POST" action="Redirecionador.php">
			<div class="control-group">
				<div class="controls">	
					<center><h3>Mensagens</h3></center>
					<label>Titulo</label>
					<input type="text" class="span4 mcg" name="nomeMsg"/>	
					<label>Destinatário</label>
					<input type="text" class="span4 mcg" name="destMsg"/>	
					<label>Selecione uma lista cadastrada</label>
					<select name="carregaListaMsg" class="span3">
						<option value="">::Selecione Lista::</option>
						<option value="">João da Silva</option>
						<option value="">Paulo Henrique</option>
					</select>
					<input type="button" class="btn-primary" value="Carregar"/>
					<label>Mensagem</label>
					<textarea class="input-xlarge mcg" name="descMsg" rows="3"></textarea></br>		
					<button type="submit" name="enviarEmail" class="btn" style="margin-right:10px">Enviar</button>
					<button type="reset" name="" class="btn" style="margin-right:10px">Cadastrar</button>				
					<button type="submit" name="consultarMensagem" class="btn">Consultar</button>
				</div>
			</div>	
		</form>	
	</body>
</html>