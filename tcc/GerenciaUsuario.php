<html lang="en">
	<body>
		<form class="well" method="POST" action="index.php?pagina=ConsultaUsuario">
			<div class="control-group">
				<div class="controls">	
					<center><h3>Gerenciar Usuários</h3></center>
					<label>Nome</label>
					<input type="text" class="span4 mcg" id="nomeUsuario"/>
					<label>Função</label>
					<input type="text" class="span3 mcg" id="funcUsuario"/>		
					<label>Matrícula(registro)</label>
					<input type="text" class="span1 mcg" id="regUsuario"/>	
					<label>Permissão</label>					
					<select name="permUsuario">
						<option value="" checked>::Selecione::</option>
						<option value="visualisador">Visualização</option>
						<option value="editor">Edição</option>
						<option value="administrador">Administração</option>			
					</select>
					<label>Login</label>
					<input type="text" class="span3 mcg" id="loginUsuario" placeholder="Login para acessar o sistema..."/>					
					<label>Senha</label>
					<input type="password" class="span2 mcg" id="senhaUsuario"/>										
					
					<button type="reset" class="btn" style="margin-right:10px">Cadastrar</button>				
					<button type="submit" class="btn">Consultar</button>
				</div>
			</div>	
		</form>	
	</body>
</html>