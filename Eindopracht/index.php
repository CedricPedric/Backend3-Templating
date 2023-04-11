<?php 
    $pathToRoot =  './';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
</head>
<body>
    <main class="maincontainer">
        <?php
        include('./include/header.php');
        ?>

        <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $errors = [];
            foreach($_POST as $key => $value){
                if (empty($value)){
                    $errors[$key] = "Can't be empty";
                } 
            }
            if (!$errors){
                $showForm = false;
            }
        }
        include('./pages/EldenRing.php');
        ?>
        <?php 
        include("./include/footer.php");
        ?>
    </main>
</body>
</html>

<!-- <style>
    body{
        font-family: Arial, Helvetica, sans-serif;
    }
    .navlinks{
        padding:5px;
        display:flex;
        align-items: center;
        background-color: blueviolet;
        border-radius: 15px;
        width: 65px;
        height: 35px;
    }
    #random-image{
        margin-top: 5px;
        border-radius: 150px;
        height:60px;
        width: 70px;
        margin-left: auto;
        right: 0px;
    }
    .links{
        color:white;
        margin-left: 10px;
        /* text-decoration:none; */
        
    }
    .maincontainer{
        margin-left: 30%;
        margin-right: 30%;
    }
    .navcontainer{
    color: white;
    display: flex;
    align-items: center;
    gap: 10px;
    border-radius: 25px;
    background: #4621ad;
    padding: 20px;
    width: 750px;
    height: 30px;
    }
    .footercontainer{
        background-color: gray;
        position: absolute;
        margin-top: auto;
        border-radius: 25px;
        bottom:0px;
        width: 750px;
        padding:5px;
        margin-bottom:1%;
    }
    #name-date-text{
        margin-left: 15px;
    }
</style> -->