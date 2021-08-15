<?php

// Colocar os dados do front-end 

$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

// PHPMailer

require './PHPMailer/PHPMailerAutoload.php';

// Configurar o nosso servidor

$mail = new PHPMailer();
$mail -> isSMTP();
$mail -> Host = '';
$mail -> SMTPSecure = '';
$mail -> SMTPAuth = '';
$mail -> Port = '';
$mail -> Username = '' ;
$mail -> Password =  '';

// Configurar a mensagem

$mail -> setFrom($mail -> Username, 'Seu nome');                                                                 //Remetente
$mail -> addAddress('Seu email');                                                            //Destinatario
$mail -> Subject = 'Assunto';                                                                                        //Assunto do email

// Configurar o conteudo do email

$conteudoMensagem = "Voce recebeu uma mensagem de: $nome ($email)
<br> <br>

Mensagem: $mensagem
";
//Mostrar para o php que isso é html
$mail -> isHTML(true);
$mail -> Body = $conteudoMensagem;

if($mail -> send()){
   echo "Mensagem Enviada!";
    

}else {
    echo "Erro ao enviar mensamgem". $mail -> ErrorInfo;
   
}



