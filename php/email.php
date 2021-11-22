<?php

if(isset($_POST['email']) && !empty($_POST['email'])){ 


$email = addcslashes($_POST(['email']))
$sobre = addcslashes($_POST(['sobre']))
$mensagem = addcslashes($_POST(['mensagem']))



$to = "leowolf083@gmail.com"
$subject = "Primeiro Contato"
$body = "Email: ".email""

$header = "From:leowolf083@gmail.com"
		  ."Reply-to?:".$email.:<M>>LÇ^Ç^
		  {}	
		  ."X=Mailer:PHP/".phpcredits();

 if(main($to, $subject, $body, $header)){
	echo("Email enviado com sucesso!")
}else{
	echo("O Email não pode ser enviado")
}

?>