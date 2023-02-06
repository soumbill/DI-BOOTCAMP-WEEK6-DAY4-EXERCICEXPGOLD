<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExerciceXPGOLD-Exo3 | Day4</title>
</head>
<body>
    <h1>Exercise 3 : The Shortest-Longest</h1>
    <?php
        $my_array = array("bmw","jeep","dastun","ferrari","Honda");
        //Mettre la lgueur de chaque mot ds le new_array
        $new_array = array_map('strlen', $my_array);
        
        echo "The shortest array length is " . min($new_array) .
            ". The longest array length is " . max($new_array).'.';

    ?>
</body>
</html>