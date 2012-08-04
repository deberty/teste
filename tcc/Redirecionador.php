<?php
	//Consulta de Bandas
	if(isset($_POST['enviarEmail'])){	
		$titulo = $_POST['nomeMsg'];
		$mensagem = $_POST['descMsg'];
		$destinatario = $_POST['destMsg'];
		//composição do email
		//para o envio em formato HTML
		//$headers = "MIME-Version: 1.0";
		//$headers .= "Content-type: text/html;charset=iso-8859-1";
		 
		//endereço do remitente
		$headers = "From: Vitor <vitoramaral.ti@gmail.com>";		 		
		 
		//endereços que receberão uma copia $headers .= "Cc: manel@desarrolloweb.com
		
		//endereços que receberão uma copia oculta
		//$headers .= "Bcc: vinnie@criarweb.com,joao@criarweb.com";
		//ini_set(sendmail_from, "vitoramaral.ti@gmail.com");
		if(mail("amaral.vitor@hotmail.com","teste email","testando porta 25","From: vitoramaral.ti@gmail.com")){	
			header("Location: index.php?pagina=Mensagem");
		}else{
			echo ('erro ao enviar email');
		}
	}
	else if(isset($_POST['consultarMensagem'])){			
		header("Location: index.php?pagina=ConsultaMensagem");
	}
	
	//GerenciaCliente
	else if(isset($_POST['pesquisaDetalhada'])){
		header("Location: index.php?pagina=PesquisaDetalhadaCliente");
	}
	else if(isset($_POST['novoCliente'])){
		header("Location: index.php?pagina=CadastroCliente");
	}
	
	//PesquisaDetalhadaCliente
	else if(isset($_POST['consultarPesquisaDetalhada'])){
		header("Location: index.php?pagina=GerenciaCliente");
	}
	else if(isset($_POST['cancelarPesquisaDetalhada'])){
		header("Location: index.php?pagina=GerenciaCliente");
	}
	
	//CadastroCliente
	else if(isset($_POST['salvarCadastroCliente'])){
		header("Location: index.php?pagina=GerenciaCliente");
	}
	else if(isset($_POST['cancelarCadastroCliente'])){
		header("Location: index.php?pagina=GerenciaCliente");
	}
?>	