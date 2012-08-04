<html lang="en">
	<body>
		<form class="well" >
			<div class="control-group">
				<div class="controls">	
					<center><h3>Editar Reclamação</h3></center>
					<label>Autor</label>
					<select name="" class="span3">
						<option value="">::Selecione Lista::</option>
						<option value="" selected >Joao da Silva</option>
						<option value="">Paulo Henrique</option>
					</select>
					<label>Título</label>
					<input type="text" class="span4 mcg" id="destMsg" value="Cerveja quente"/>	
					<label>Categoria</label>
					<select name="carregaListaMsg" class="span3">
						<option value="">::Selecione Lista::</option>
						<option value="" selected>Bebida</option>
						<option value="">Alimento</option>
						<option value="">Atendimento</option>
					</select>					
					<label>Descrição</label>
					<textarea class="input-xlarge mcg" id="" rows="3">O cliente reclamou que a bebida não estava gelada</textarea></br>		
					<button type="submit" class="btn" style="margin-right:10px">Salvar</button>				
					<button type="submit" class="btn">Cancelar</button>
				</div>
			</div>	
		</form>	
	</body>
</html>