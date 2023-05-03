<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP RANDOM IF ELSE</title>
</head>
<body>
    <h2 align="center">Display images</h2>
    <?php
    $pic=rand(1,6);
        echo "You've won the image ".$pic."<br><br> <img src=\"pic$pic.jpg\">";

        if ($pic==1){$dollar=1;}
        else if ($pic==2){$dollar=2;}
        else if ($pic==3){$dollar=3;}
        else if ($pic==4){$dollar=4;}
        else if ($pic==5){$dollar=5;}

        else{
            print "<br><br>You haven't won anything...";
        }

        if($dollar!=0){
            print "<h2><font color=\"red\">You've won ".$dollar."$ </font></h2>";
        }
    ?>

    <p><i><font color="green">Refresh the page to start over</font></i></p>
    
</body>
</html>