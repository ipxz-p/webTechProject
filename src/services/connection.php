<?php
    $host = "localhost";
    $dbname = "webtech_project";
    $user = "root";
    try {
        $con = new PDO("mysql:host=$host;dbname=$dbname", $user, '');
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
?>
