<?php
include 'includes/config.php';

$sql = "SELECT 1";
if ($conn->query($sql) === TRUE || $conn->query($sql) !== FALSE)
{
    echo "Query ran successfully!";
}
else
{
    echo "Query error: " . $conn->error;
}

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

if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
    if ($_POST["nome"] == "")
    {
        $nomeError = "Name is missing!";
        $isFormValid = false;
    }
    else
    {
        $nome = test_input($_POST["nome"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $nome))
            {
            $nomeError = "Only letters and spaces!";
            $isFormValid = false;
        }
    }

    if ($_POST["email"] == "")
    {
        $emailError = "Email is missing!";
        $isFormValid = false;
    }
    else
    {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError = "Invalid email format!";
            $isFormValid = false;
        }
    }

    if ($_POST["mensagem"] == "")
    {
        $mensagemError = "Message is missing!";
        $isFormValid = false;
    } 
    else
    {
        $mensagem = test_input($_POST["mensagem"]);
    }

    //DATABASE CONNECTION TO SAVE THE VALUES
    if ($isFormValid)
    {
        $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, message) VALUES (?, ?, ?)");
        if ($stmt === false) {
            die("Prepare failed: " . $conn->error);
        }
        //sss - type of variable (string, etc)
        $stmt->bind_param("sss", $nome, $email, $mensagem);

        if (!$stmt->execute())
        {
            $isFormValid = false;
            $dbError = "Failed to save your message. Please try again later.";
        }

        $stmt->close();

        if ($isFormValid) {
            $nome = $email = $mensagem = "";
        }
    }
}
