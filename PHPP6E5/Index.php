<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <title>PHPP6EXO05</title>
</head>
    <body>
    <a href='index.php?week=12'>Click-here</a>
        <?php
            if (isset($_GET['week']))
            {
                echo 'Week:' . $_GET['week'];
            }
            else 
            {
                echo 'Il faut renseigner les informations';
            }
        ?>  
    </body>
</html>