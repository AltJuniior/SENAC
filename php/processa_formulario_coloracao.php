<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupere os dados do formulário
    $nome = $_POST["name"];
    $email = $_POST["email"];
    $whatsapp = $_POST["whatsapp"];
    $idade = $_POST["age"];
    $gestante = $_POST["pregnant"];
    $cabeloColorido = $_POST["colorful"];
    $porcentagemBranco = $_POST["grizzled"];
    $usaQuimica = $_POST["chemistry"];
    $apresentouAlergia = $_POST["allergy"];
    $procedimento = $_POST["procedure"];

    // Montar o corpo do e-mail
    $mensagem = "Nome: $nome\n";
    $mensagem .= "Email: $email\n";
    $mensagem .= "WhatsApp: $whatsapp\n";
    $mensagem .= "Idade: $idade\n";
    $mensagem .= "Gestante: $gestante\n";
    $mensagem .= "Cabelo Colorido: $cabeloColorido\n";
    $mensagem .= "Porcentagem de Cabelo Branco: $porcentagemBranco\n";
    $mensagem .= "Usa Química: $usaQuimica\n";
    $mensagem .= "Apresentou Alergia: $apresentouAlergia\n";
    $mensagem .= "Procedimento: $procedimento\n";

    // Configurar o cabeçalho do e-mail
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Endereço de destino (coloque o seu próprio endereço de e-mail aqui)
    $destinatario = "cabeleireirosenac2023@gmail.com";

    // Assunto do e-mail
    $assunto = "Novo(a) modelo(a) de coloração cadastrado(a)";

    // Enviar o e-mail
    if (mail($destinatario, $assunto, $mensagem, $headers)) {
        // Redirecionar para a página HTML do corte após o envio do e-mail
        echo "<script>alert('Email enviado, aguarde o contato de um de nossos profissionais.');
            location.href=\"../Coloracao.html\";
            </script>";
            exit; // Certifique-se de sair do script após o redirecionamento
    } else {
        echo "Ocorreu um erro ao enviar o e-mail.";
    }
} else {
    echo "O formulário não foi submetido.";
}
