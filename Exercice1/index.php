<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExerciceXPGOLD - Day4</title>
</head>
<body>
    <h1>Exercise 1 : Display Average Temperature</h1>
    <?php
        $month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
        68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";

        // convertir la chaine de caracteres $month_temp en tableau
        $tab_month_temp = explode(",", $month_temp);
        $somme = 0;
        $length = count($tab_month_temp);

        for($i = 0; $i < $length; $i++)
        {
            $somme += $tab_month_temp[$i];
        }
        $moyenne = $somme / $length;
        echo 'Average Temperature is ' . $moyenne .'<br>';

        //Trier le tableau par ordre croissant
        sort($tab_month_temp);
        
        echo " List of five lowest temperatures :";
        for($j = 0; $j < 5; $j++)
        {
            echo $tab_month_temp[$j] . ' '; 
        }

        //Trier le tableau par ordre decroissant

        echo "<br> List of five highest temperatures :";
        for($j = ($length - 5); $j < $length; $j++)
        {
            echo $tab_month_temp[$j] . ' ';
        }

       

    ?>
</body>
</html>