<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="onepkmn.css" />
    <title>PokeApi PHP</title>
</head>

<body>


    <?php

$base = 'https://pokeapi.co/api/v2/pokemon/'; ?>

    <div class="ctitle">
        <a href="kanto.php" class="title">My Pokédex</a>
        <a href="kanto.php" class="region">KANTO</a>
        <a href="johto.php" class="region">JOHTO</a>
        <a href="hoenn.php" class="region">HOENN</a>
    </div>

    <div class="container">

        <?php
    $id = $_GET['id'];
    $data = file_get_contents($base.$id.'/');
    $pokemon = json_decode($data);
    $name = $pokemon->name;
    $sprites = $pokemon->sprites;
    $sprite = $pokemon->sprites->front_default;
    $types = $pokemon->types; 
    $weight = $pokemon->weight;
    $height = $pokemon->height;
    $home = $pokemon->sprites->other->home;
    $officialartwork = 'official-artwork';
    $artwork = $pokemon->sprites->other->$officialartwork;

    ?>


        <div class="item">
            <h1 class="pkmn-name"><a href=""></a><?php echo $name; ?>
            </h1>
    <p class="spec">Official Artwork</p>
    <img src="<?php echo $artwork->front_default; ?>" class="img" alt="sprite-pokemon">

    <p class="spec">Sprites</p>

        <img src="<?php echo $sprite; ?>" class="img" alt="sprite-pokemon">

        <p class="spec">Shiny</p>
        <img src="<?php echo $sprites->front_shiny; ?>" class="img" alt="sprite-pokemon">

        <p class = "spec"> In Pokemon Home </p>
        <img src="<?php echo $home->front_default; ?>" class="img" alt="sprite-pokemon">
        <p class="spec">Shiny</p>
        <img src="<?php echo $home->front_shiny; ?>" class="img" alt="sprite-pokemon">

        

            <p class="id">#<?php echo $id; ?>
            </p>
            


            <?php foreach ($types as $typelist) { ?>

            <p class="spec">Type : <?php echo $typelist->type->name; ?>
            </p>

        
            <?php } ?>
<p class= spec> Weight : <?= $weight ?></p>
<p class= spec> Height : <?= $height ?></p>


        </div>
    </div>
</body>

</html>