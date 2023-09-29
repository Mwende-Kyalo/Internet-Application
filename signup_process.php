<?php
require_once 'database.php';

if (isset($_POST['f_name'])&& isset($_POST['l_name'])&& isset($_POST['email'])&& isset($_POST['contact'])&& isset($_POST['password'])&& isset($_POST['DOB'])) {
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $DOB = $_POST['DOB'];

    $stmt = $pdo->prepare("INSERT INTO users (f_name, l_name, email, contact, password, DOB) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([$f_name, $l_name, $email, $contact, $password, $DOB]);

    echo "Registration successful!";
}
?>