<?php
    session_start();
    if(!isset($_SESSION["koszyk"]))
        {
            $_SESSION["koszyk"] = '';
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="zakupy.php?id=chleb">chleb</a> <br>
    <a href="zakupy.php?id=maslo">maslo</a> <br>
    <a href="zakupy.php?id=smietana">smietana</a> <br>

    <?php
        if(isset($_GET["id"]))
            {
                $proddukt = $_GET["id"];
                $_SESSION["koszyk"] .= $proddukt." ";
                echo $_SESSION['koszyk'];
            }
    ?>
</body>
</html>