<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>PokeApi PHP</title>
</head>

<body>


    <?php

$base = 'https://pokeapi.co/api/v2/pokemon/'; ?>

    <div class="ctitle">
        <h1 class="title">My Pokédex - POKEPHP</h1>
        <h2 class="subtitle">KANTO EDITION</h2>
    </div>

    <div class="container">

        <?php
for ($i = 1; $i < 152; ++$i) {
    $data = file_get_contents($base.$i.'/');
    $pokemon = json_decode($data);
    $name = $pokemon->name;
    $sprite = $pokemon->sprites->front_default;
    $id = $pokemon->id; ?>


        <div class="item">
            <h1 class="pkmn-name"><?php echo $name; ?>
            </h1>
            <img src="<?php echo $sprite; ?>" class="img" alt="sprite-pokemon">
            <p class="id">#<?php echo $id; ?>
            </p>
        </div>


        <?php
}

?>

    </div>
</body>

</html>