<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $rua = $_POST["rua"];
    $numero = $_POST["numero"];
    $complemento = $_POST["complemento"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $cep = $_POST["cep"];

    $destinatario = "pauloamancio79@gmail.com";
    $assunto = "Mensagem do formulário de contato";
    $corpo_email = "Nome: $nome\n";
    $corpo_email .= "E-mail: $email\n";
    $corpo_email .= "Rua: $rua\n";
    $corpo_email .= "Número: $numero\n";
    $corpo_email .= "Complemento: $complemento\n";
    $corpo_email .= "Cidade: $cidade\n";
    $corpo_email .= "Estado: $estado\n";
    $corpo_email .= "CEP: $cep\n";

    if (mail($destinatario, $assunto, $corpo_email)) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Ocorreu um erro ao enviar o email.";
    }
}
?>
