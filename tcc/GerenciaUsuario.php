<html lang="en">
	<body>
		<form class="well" method="POST" action="index.php?pagina=ConsultaUsuario">
			<div class="control-group">
				<div class="controls">	
					<center><h3>Gerenciar Usu�rios</h3></center>
					<label>Nome</label>
					<input type="text" class="span4 mcg" id="nomeUsuario"/>
					<label>Fun��o</label>
					<input type="text" class="span3 mcg" id="funcUsuario"/>		
					<label>Matr�cula(registro)</label>
					<input type="text" class="span1 mcg" id="regUsuario"/>	
					<label>Permiss�o</label>					
					<select name="permUsuario">
						<option value="" checked>::Selecione::</option>
						<option value="visualisador">Visualiza��o</option>
						<option value="editor">Edi��o</option>
						<option value="administrador">Administra��o</option>			
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