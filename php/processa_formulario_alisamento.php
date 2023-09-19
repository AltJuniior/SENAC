<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupere os dados do formulário
    $nome = $_POST["name"];
    $email = $_POST["email"];
    $whatsapp = $_POST["whatsapp"];
    $idade = $_POST["age"];
    $gestante = $_POST["pregnant"];
    $quimica = $_POST["chemistry"];
    $tipoquimica = $_POST["chemistrytype"];
    $alergia = $_POST["allergy"];

    if($quimica == "Não"){
        $tipoquimica = "Nenhuma";
    } 

    if ($alergia == "Não") {
        // Montar o corpo do e-mail
        $mensagem = "Nome: $nome\n";
        $mensagem .= "Email: $email\n";
        $mensagem .= "WhatsApp: $whatsapp\n";
        $mensagem .= "Idade: $idade\n";
        $mensagem .= "Gestante: $gestante\n";
        $mensagem .= "Apresenta alergias: $alergia\n";
        $mensagem .= "Já utilizou química: $quimica\n";
        if (!empty($tipoquimica)) {
            $mensagem .= "Química: $tipoquimica\n";
        }

        // Configurar o cabeçalho do e-mail
        $headers = "From: $email" . "\r\n" .
            "Reply-To: $email" . "\r\n" .
            "X-Mailer: PHP/" . phpversion();

        // Endereço de destino (coloque o seu próprio endereço de e-mail aqui)
        $destinatario = "cabeleireirosenac2023@gmail.com";

        // Assunto do e-mail
        $assunto = "Novo modelo(a) de alisamento cadastrado(a)";

        // Enviar o e-mail
        if (mail($destinatario, $assunto, $mensagem, $headers)) {
            // Redirecionar para a página HTML do corte após o envio do e-mail
            echo "<script>alert('Email enviado, aguarde o contato de um de nossos profissionais.');
            location.href=\"../Alisamento.html\";
            </script>";
            exit; // Certifique-se de sair do script após o redirecionamento
        } else {
            echo "<script>alert('Ocorreu um erro ao enviar o e-mail.');
            location.href=\"../Alisamento.html\";
            </script>";
        }
    } else {
        echo "<script>alert('Email enviado, aguarde o contato de um de nossos profissionais.');
            location.href=\"../Alisamento.html\";
            </script>";
    }
} else {
    echo "O formulário não foi submetido.";
}
?>