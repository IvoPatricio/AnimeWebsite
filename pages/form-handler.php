<?php

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$nome = $email = $mensagem = "";
$nomeError = $emailError = $mensagemError = "";

$isFormValid = true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["nome"] == "") {
        $nomeError = "Name is missing!";
        $isFormValid = false;
    } else {
        $nome = test_input($_POST["nome"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $nome)) {
            $nomeError = "Only letters and spaces!";
            $isFormValid = false;
        }
    }

    if ($_POST["email"] == "") {
        $emailError = "Email is missing!";
        $isFormValid = false;
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError = "Invalid email format!";
            $isFormValid = false;
        }
    }

    if ($_POST["mensagem"] == "") {
        $mensagemError = "Message is missing!";
        $isFormValid = false;
    } else {
        $mensagem = test_input($_POST["mensagem"]);
    }
    $nome = $email = $mensagem = "";
}