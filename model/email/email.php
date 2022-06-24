<?php
    function sendEmail ($email, $nome, $subject, $message){
        require_once("class.phpmailer.php");
        require_once("class.smtp.php");
        $mail = new PHPMailer();
        $mail->ClearAddresses();
        $mail->ClearAllRecipients();
        $mail->ClearAttachments();
        $mail->ClearBCCs();
        $mail->ClearCCs();
        $mail->ClearCustomHeaders();
        $mail->ClearReplyTos();
        $mail->IsSMTP();
        $mail->SMTPDebug = 0; 
        $mail->SMTPAuth = true;
        $mail->Host = 'smtp.voleibol-competencias.com';
        $mail->Username = 'noreply@voleibol-competencias.com';//Configurar pelo link https://support.google.com/accounts/answer/6010255?hl=pt-BR 
        $mail->Password = 'uB2Kq@ALnQ6fNAY';
        $mail->SetFrom('noreply@voleibol-competencias.com','Voleibol Competencias'); 
        $mail->AddReplyTo('martinakielingsebold@ub.edu', 'Martina Kieling');
        $mail->AddAddress("$email","$nome");
    //  $mail->AddEmbeddedImage("endereço da imagem no seu diretório", "nome da imagem, "nome do arquivo caso a pessoa tente baixar a imagem");
        $mail->IsHTML(true); 
        $mail->CharSet = 'utf-8'; 
        $mail->Subject  = $subject; // Assunto da mensagem
        $mail->Body = $message;
        $enviado = $mail->Send();
        $mail->ClearAllRecipients();
        $mail->ClearAttachments();
    
        if (!$enviado) 
        {
            throw new Exception("¡Hubo un error al enviar el e-mail!");
            exit;
        } 
    }
?>