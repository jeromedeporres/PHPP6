<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <title>PHPP6EXO03</title>
</head>
    <body>
    <a href='Index.php?startDate=2/05/2016&amp;endDate=27/11/2016'>Click-here</a>
        <?php
            if (isset($_GET['startDate']) AND isset ($_GET['endDate']))
            {
                echo 'Start Date:' . $_GET['startDate'] . ' ' . 'End Date:' . $_GET['endDate'];
            }
            else 
            {
                echo 'Il faut renseigner les dates';
            }
        ?>  
    </body>
</html>