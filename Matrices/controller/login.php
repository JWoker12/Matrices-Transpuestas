<?php
    session_start();
    if(!empty($_SESSION['active'])){
        header('location: /Matrices/dashboard/');
    }
    else{
        if(!empty($_POST)) {
            if(empty($_POST['username'] || $_POST['password'])){
                session_destroy();
                $_GET[$alert = "Enter your username and password"];
                header('location: ../');
                
            }
            else{
                require_once "conection.php";
                $user = mysqli_real_escape_string($db, $_POST['username']);
                $pass = md5(mysqli_real_escape_string($db, $_POST['password']));
                $query = mysqli_query($db, "SELECT * FROM users WHERE username = '$user' AND pass = '$pass'");
                $result = mysqli_num_rows($query);

                if($result > 0){
                    $data = mysqli_fetch_array($query);
                    $_SESSION['active'] = true;
                    $_SESSION['idUser'] = $data['id'];
                    $_SESSION['Username'] = $data['name'];
                    header('location: /Matrices/dashboard/');
                }
                else{
                    $_POST[$alert = "The username or password is incorrect"];
                    session_destroy();
                    header('location: ../');
                }
            }
        }
    }
?>