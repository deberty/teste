<html lang="en">
	<body>
		<form class="well" method="POST" action="index.php?pagina=ConsultaEvento">
			<div class="control-group">
				<div class="controls">
					<center><h3>Gerenciar Eventos</h3></center>
					<label>Título</label>
					<input type="text" class="span4 mcg" id="nomeEvento"/>					
					<label>Tema</label>
					<input type="text" class="span3 mcg" id="temaEvento" placeholder="Como lembrar do cliente..."/>					
					<label>Data do Evento</label>
					<input type="text" class="span2 mcg" id="dtEvento"/>										
					<label>Horário</label>					
					<input type="text" class="span1 mcg" id="horaEvento"/>
					<label>Público alvo</label>
					<label class="checkbox">
						<input type="checkbox" name="cbInfantil" value="infantil"/>Infantil</br>
						<input type="checkbox" name="cbJovem" value="jovem"/>Jovem</br>
						<input type="checkbox" name="cbAdulto" value="adulto"/>Adulto</br>
						<input type="checkbox" name="cbIdoso" value="idoso"/>3° Idade	
					</label>	
					<label>Observação</label>
					<textarea class="input-xlarge" id="obsEvento" rows="3"></textarea></br>		
					<button type="reset" class="btn" style="margin-right:10px">Cadastrar</button>				
					<button type="submit" class="btn">Consultar</button>
				</div>
			</div>	
		</form>	
	</body>
</html>