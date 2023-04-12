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
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if(array_key_exists("EldenRing",$_POST)){             
                    include('./pages/EldenRing.php');
                }
                elseif(array_key_exists("DungeonsAndDragons",$_POST)){             
                    include('./pages/DungeonsAndDragons.php');
                }
                elseif(array_key_exists("StardewValley",$_POST)){             
                    include('./pages/StardewValley.php');
                }
                elseif(array_key_exists("Terraria",$_POST)){             
                    include('./pages/Terraria.php');
                }
                ;
            } 
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            echo "<br> <h1>Klik on the navbar!</h1>";
            }
            ;
    
        ?>
        <?php 
        include("./include/footer.php");
        ?>
    </main>
</body>
</html>