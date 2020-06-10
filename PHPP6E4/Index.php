<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <title>PHPP6EXO04</title>
</head>
    <body>
    <a href='index.php?language=PHP&amp;server=LAMP'>Click-here</a>
        <?php
            if (isset($_GET['language']) AND isset ($_GET['server']))
            {
                echo 'Language:' . $_GET['language'] . ' ' . 'Server:' . $_GET['server'];
            }
            else 
            {
                echo 'Il faut renseigner les informations';
            }
        ?>  
    </body>
</html>