<?php

//Variáveis
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');

//Compo E-mail
$arquivo = '<h2>Formulário de contato Agrado Móveis Planejados</h2>
      <p><b>Nome:</b> '. $nome .'</p>
      <p><b>Telefone:</b> '. $telefone .'</p>
      <p><b>E-mail:</b> '. $email .'</p>
      <p><b>Mensagem:</b> '. $mensagem .'</p>
      <p><b>Este e-mail foi enviado em</b> '. $data_envio .' <b>às</b> '. $hora_envio .' </p>
  ';

//Emails para quem será enviado o formulário
$destino = "soigormarques@gmail.com";
$assunto = "Contato site Agrado Móveis";

//Este sempre deverá existir para garantir a exibição correta dos caracteres
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$headers .= "From: $nome <$email>";

//Enviar
$result = mail($destino, $assunto, $arquivo, $headers);
?>

<!DOCTYPE html>
<html lang="pt-BR" class="animate__animated animate__fadeIn animate__slow">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" user-scalable="no" >
    <title>Enviando mensagem...</title>
    <script type='text/javascript' src='https://code.jquery.com/jquery-latest.min.js' id='jquery-js'></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<style>
		body {
			width: 100%;
			max-width: 100%;
			height: 100vh;
			display: flex;
			justify-content: center;
			align-items: center;
			background-color: #2c2c2c;
			font-family: 'Sen', sans-serif;
			padding: 0px;
		}
		
		section {
			width: 100%;
			max-width: 100%;
			height: 100%;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			padding: 40px 20px;
		}
		
		h2 {
			font-size: 24px;
			line-height: 30px;
			color: #ac2732;
			font-weight: 700;
			text-align: center;
			margin-bottom: 20px;
			text-transform: uppercase;
		}
		
		h3 {
			font-size: 18px;
			line-height: 24px;
			color: white;
			font-weight: 700;
			text-align: center;
			margin-bottom: 20px;
			text-transform: uppercase;
		}
	</style>
</head>
	
	<body>
		<section>
			<h2>Enviando sua mensagem, aguarde.</h2>

			<?php
				if(!$result) {   
					 echo "<h3>Houve um erro, tente novamente mais tarde. Redirecionando para o site...</h3>";  
					 echo "<meta http-equiv='refresh' content='10;URL=https://agradoplanejados.com.br/contato'>";
				} else if ($email == '') {
					echo "<h3>Houve um erro, tente novamente mais tarde. Redirecionando para o site...</h3>";  
					echo "<meta http-equiv='refresh' content='10;URL=https://institucional.agradoplanejados.com.br/contato'>";
				} else {
					echo "<h3>Mensagem enviada com sucesso, redirecionando para o site...</h3>";
					echo "<meta http-equiv='refresh' content='10;URL=https://institucional.agradoplanejados.com.br/contato'>";
				}
			?>
		</section>
	</body>
</html>	