<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <title>PHPP6EXO06</title>
</head>
    <body>
    <a href='index.php?building=12&amp;room=101'>Click-here</a>
        <?php
            if (isset($_GET['building']) AND isset ($_GET['room']))
            {
                echo 'Building:' . $_GET['building'] . ' ' . 'Room:' . $_GET['room'];
            }
            else 
            {
                echo 'Il faut renseigner les informations';
            }
        ?>  
    </body>
</html>