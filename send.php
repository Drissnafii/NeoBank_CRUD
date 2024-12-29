<?php

require __DIR__ . '/config/Connection.php';

if (isset($_POST["submit"])) {
    # code...
    $firstname = htmlspecialchars($_POST["firstname"]) ;
    $lastname = htmlspecialchars($_POST["lastname"]) ;
    $email = htmlspecialchars($_POST["email"]) ;
    $pass = htmlspecialchars($_POST["pass"]) ;
    

$sql = "INSERT INTO contact (firstname, lastname, email, pass) 
        VALUES (:firstname, :lastname, :email, :pass)";
$stmt= $pdo->prepare($sql);
$stmt->execute([
    ':firstname'=>$firstname,
    ':lastname'=>$lastname,
    ':email'=>$email,
    ':pass'=>$pass,
]); 
}
header('location: index.php');                          
?>