<html lang="en">
	<body>
		<form class="well">
			<div class="control-group">
				<div class="controls">	
					<center><h3>Editar Usu�rio</h3></center>
					<label>Nome</label>
					<input type="text" class="span4 mcg" id="nomeUsuario" value="Carlos Eduardo"/>
					<label>Fun��o</label>
					<input type="text" class="span3 mcg" id="funcUsuario" value="Administrador"/>		
					<label>Matr�cula(registro)</label>
					<input type="text" class="span1 mcg" id="regUsuario" value="01"/>	
					<label>Permiss�o</label>					
					<select name="permUsuario">
						<option value="" >::Selecione::</option>
						<option value="visualisador" checked>Visualiza��o</option>
						<option value="editor">Edi��o</option>
						<option value="administrador">Administra��o</option>			
					</select>
					<label>Login</label>
					<input type="text" class="span3 mcg" id="loginUsuario" value="Carlos.Eduardo"/>					
					<label>Senha</label>
					<input type="password" class="span2 mcg" id="senhaUsuario" value="m@st&r"/>															
					<button type="submit" class="btn" style="margin-right:10px">Salvar</button>				
					<button type="submit" class="btn">Cancelar</button>
				</div>
			</div>	
		</form>	
	</body>
</html>


