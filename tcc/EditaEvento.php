<html lang="en">
	<body>
		<form class="well">
			<div class="control-group">
				<div class="controls">					
					<center><h3>Editar Evento</h3></center>
					<label>T�tulo</label>
					<input type="text" class="span4 mcg" id="nomeEvento" value="Festa Junina"/>					
					<label>Tema</label>
					<input type="text" class="span3 mcg" id="temaEvento" value="S�o Jo�o"/>					
					<label>Data Evento</label>
					<input type="text" class="span2 mcg" id="dtEvento" value="17/06/2012"/>										
					<label>Hor�rio</label>					
					<input type="text" class="span1 mcg" id="horaEvento" value="20:00"/>
					<label>P�blico alvo</label>
					<label class="checkbox">
						<input type="checkbox" name="cbInfantil" value="infantil"/>Infantil</br>
						<input type="checkbox" name="cbJovem" value="jovem"/>Jovem</br>
						<input type="checkbox" name="cbAdulto" value="adulto" checked />Adulto</br>
						<input type="checkbox" name="cbIdoso" value="idoso" checked />3� Idade	
					</label>	
					<label>Observa��o</label>
					<textarea class="input-xlarge" id="obsEvento" rows="3">Festa junina com comidas e bebidas t�picas</textarea></br>		
					<button type="submit" class="btn" style="margin-right:10px">Salvar</button>				
					<button type="submit" class="btn">Cancelar</button>
				</div>
			</div>		
		</form>	
	</body>
</html>


