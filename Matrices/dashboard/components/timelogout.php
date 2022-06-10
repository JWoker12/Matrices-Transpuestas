<?php
    $inactividad = 600;
    if(isset($_SESSION["timeout"])){
        $sessionTTL = time() - $_SESSION["timeout"];
        if($sessionTTL > $inactividad){
            session_destroy();
            header("Location: components/logout.php");
        }
    }
    $_SESSION["timeout"] = time();
?>