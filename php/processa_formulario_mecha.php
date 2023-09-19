<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupere os dados do formulário
    $nome = $_POST["name"];
    $email = $_POST["email"];
    $whatsapp = $_POST["whatsapp"];
    $idade = $_POST["age"];
    $gestante = $_POST["pregnant"];
    $quimica = $_POST["chemistry"];
    $tipoalergia = $_POST["allergytype"];
    $colorido = $_POST["coloredhair"];
    $mechapretendida = $_POST["mechapretendida"];

    // Montar o corpo do e-mail
    $mensagem = "Nome: $nome\n";
    $mensagem .= "Email: $email\n";
    $mensagem .= "WhatsApp: $whatsapp\n";
    $mensagem .= "Idade: $idade\n";
    $mensagem .= "Gestante: $gestante\n";
    $mensagem .= "Utiliza Química: $quimica\n";
    $mensagem .= "Já apresentou algum tipo de alergia: $tipoalergia\n";
    $mensagem .= "Cabelo colorido: $colorido\n";
    $mensagem .= "Deseja realizar: $mechapretendida\n";
    // Configurar o cabeçalho do e-mail
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Endereço de destino (coloque o seu próprio endereço de e-mail aqui)
    $destinatario = "cabeleireirosenac2023@gmail.com";

    // Assunto do e-mail
    $assunto = "Novo(a) modelo(a) de mechas cadastrado";

    // Enviar o e-mail
    if (mail($destinatario, $assunto, $mensagem, $headers)) {
        // Redirecionar para a página HTML do corte após o envio do e-mail
        echo "<script>alert('Email enviado, aguarde o contato de um de nossos profissionais.');
        location.href=\"../Mechas.html\";
        </script>";
        exit; // Certifique-se de sair do script após o redirecionamento
    } else {
        echo "Ocorreu um erro ao enviar o e-mail.";
    }
} else {
    echo "O formulário não foi submetido.";
}
?>