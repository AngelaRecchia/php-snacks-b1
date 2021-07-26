<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
$teams = [
    [
        'casa' => 'Gialli',
        'ospite' => 'Verdi',
        'pCasa' => 20,
        'pOspite' => 30,
    ],
    [
        'casa' => 'Rossi',
        'ospite' => 'Blu',
        'pCasa' => 10,
        'pOspite' => 50
    ],
    [
        'casa' => 'Viola',
        'ospite' => 'Arancio',
        'pCasa' => 60,
        'pOspite' => 30
    ],
    [
        'casa' => 'Neri',
        'ospite' => 'Bianchi',
        'pCasa' => 70,
        'pOspite' => 40
    ],
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snacks</title>
</head>
<body>
    
    <h3>Snack 1</h3>

    <ul>

        <?php
            for ($i = 0; $i < count($teams); $i++) {
                $team = $teams[$i];
        ?>

        
        <li><?php echo $team['casa'] . ' - ' . $team['ospite'] . ' | ' . $team['pCasa'] . ' - ' . $team['pOspite']?></li>
        
        <?php
            }
        ?>    
    </ul>

    <h3>Snack 2</h3>
    <form>
        <label for="name">Nome</label>
        <input type="text" id="name" name="name">
        <br>
        <label for="email">Email</label>
        <input type="text" id="email" name="email">
        <br>
        <label for="age">Età</label>
        <input type="text" id="age" name="age">
        <br>
        <button type="submit">Accedi</button>
    </form>
    
    <div>
        <?php

            if(isset($_GET['name']) && isset($_GET['email']) && isset($_GET['age'])) {
            
                if(strlen($_GET['name']) <= 3 || !strpos($_GET['email'], '.') || !strpos($_GET['email'], '@') || !is_numeric($_GET['age'])) $res = "Accesso Negato";
                else $res = "Accesso Riuscito";
            }
        
            echo $res;

        ?>

    </div>
    
</body>
</html>


