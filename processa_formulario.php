<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupere os dados do formulário
    $nome = $_POST["name"];
    $email = $_POST["email"];
    $whatsapp = $_POST["whatsapp"];
    $idade = $_POST["age"];
    $gestante = $_POST["pregnant"];
    $tamanhoCabelo = $_POST["hair_length"];
    $curvaturaCabelo = $_POST["hair_curvature"];
    $cortePretendido = $_POST["corte_pretendido"];
    $estiloCorte = $_POST["estilodoCorte"];

    // Montar o corpo do e-mail
    $mensagem = "Nome: $nome\n";
    $mensagem .= "Email: $email\n";
    $mensagem .= "WhatsApp: $whatsapp\n";
    $mensagem .= "Idade: $idade\n";
    $mensagem .= "Gestante: $gestante\n";
    $mensagem .= "Tamanho do Cabelo: $tamanhoCabelo\n";
    $mensagem .= "Curvatura do Cabelo: $curvaturaCabelo\n";
    $mensagem .= "Corte Pretendido: $cortePretendido\n";
    if (!empty($estiloCorte)) {
        $mensagem .= "Estilo de Corte: $estiloCorte\n";
    } else {
        $mensagem .= "Estilo de Corte não especificado\n";
    }

    // Configurar o cabeçalho do e-mail
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Endereço de destino (coloque o seu próprio endereço de e-mail aqui)
    $destinatario = "code.fumaca@gmail.com";

    // Assunto do e-mail
    $assunto = "Novo formulário submetido";

    // Enviar o e-mail
    if (mail($destinatario, $assunto, $mensagem, $headers)) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Ocorreu um erro ao enviar o e-mail.";
    }
} else {
    echo "O formulário não foi submetido.";
}
?>