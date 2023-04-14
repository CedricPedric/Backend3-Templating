<?php 

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
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            if(array_key_exists("page",$_GET)){ 
                if($_GET["page"] == "EldenRing"){
                    include('./pages/EldenRing.php');
                }
                elseif($_GET["page"] == "DungeonsAndDragons"){
                    include('./pages/DungeonsAndDragons.php');
                }
                elseif($_GET["page"] == "StardewValley"){
                    include('./pages/StardewValley.php');
                }
                elseif($_GET["page"] == "Terraria"){
                    include('./pages/Terraria.php');
                }      
            }
            else{
                echo "<br> <h1>Klik on the navbar!</h1>";
            }
            }
            ;
    
        ?>
        <?php 
        include("./include/footer.php");
        ?>
    </main>
</body>
</html>