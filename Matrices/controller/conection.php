<?php
    if(empty($_POST['username'] && $_POST['password'])){
        session_destroy();
        header('location: ../');
        
    }
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', 'arrays');
    $db = @mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
?>