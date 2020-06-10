<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <title>PHPP6EXO02</title>
</head>
    <body>
    <a href='Index.php?lastname=Nemare&amp;firstname=Jean'>Click-here</a>
        <?php
            if (isset($_GET['age']))
            {
                echo $_GET['age'];
            }
            else 
            {
                echo 'Il faut renseigner l\'age';
            }
        ?>
    </body>
</html>