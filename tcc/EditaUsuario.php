<html lang="en">
	<body>
		<form class="well">
			<div class="control-group">
				<div class="controls">	
					<center><h3>Editar Usuário</h3></center>
					<label>Nome</label>
					<input type="text" class="span4 mcg" id="nomeUsuario" value="Carlos Eduardo"/>
					<label>Função</label>
					<input type="text" class="span3 mcg" id="funcUsuario" value="Administrador"/>		
					<label>Matrícula(registro)</label>
					<input type="text" class="span1 mcg" id="regUsuario" value="01"/>	
					<label>Permissão</label>					
					<select name="permUsuario">
						<option value="" >::Selecione::</option>
						<option value="visualisador" checked>Visualização</option>
						<option value="editor">Edição</option>
						<option value="administrador">Administração</option>			
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


