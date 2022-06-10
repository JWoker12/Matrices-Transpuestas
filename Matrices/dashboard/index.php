<?php
session_start();
include "components/timelogout.php";
if(empty($_SESSION['active'])){
    header('location: ../');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Matriz Transpuesta</title>
</head>
<body>
    <?php include_once "components/nav.php" ?>
    <div class="container">
        <button id="generate">Generate Matriz</button>
    </div>
    <form class="form-dimensions" id="form">
        <input id="row" type="number" placeholder="Rows" class="formRows">
        <p>X</p>
        <input id="column" type="number" placeholder="Columns" class="formColumns">
        <button class="load" id="loadMatrix" type="button">Load</button>
    </form>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>