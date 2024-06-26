<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $remetenteEmail = $_POST['remetente-email'];
    $mensagem = $_POST['mensagem'];
    $destinatarioEmail = 'renane.p@outlook.com'; // Substitua pelo seu endereço de email do destinatário

    $assunto = 'Novo Email do Formulário';
    $headers = "From: $remetenteEmail\r\n";
    $headers .= "Reply-To: $remetenteEmail\r\n";
    $headers .= "Content-type: text/html\r\n";

    $envio = mail($destinatarioEmail, $assunto, $mensagem, $headers);

    if ($envio) {
        echo 'Email enviado com sucesso!';
    } else {
        echo 'Falha ao enviar o email. Por favor, tente novamente mais tarde.';
    }
}
?>
