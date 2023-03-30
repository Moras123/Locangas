<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'motos';
    
    try{
        $conn = new PDO("mysql:host=localhost;dbname=motos;",'root' , '');
    }catch (PDOException $e){
        die("Connected failed:".$e->getMessage());
    }

?>
