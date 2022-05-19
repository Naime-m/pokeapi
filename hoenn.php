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

    <div class="containertitle">
        <a href="kanto.php" class="title">My Pokédex</a>
        <a href="kanto.php" class="region">KANTO</a>
        <a href="johto.php" class="region">JOHTO</a>
        <a href="hoenn.php" class="region">HOENN</a>
    </div>

    <div class="container">

        <?php
for ($i = 252; $i <387; ++$i) {
    $data = file_get_contents($base.$i.'/');

    $pokemon = json_decode($data);
    $name = $pokemon->name;
    $sprite = $pokemon->sprites->front_default;
    $id = $pokemon->id;
    $types = $pokemon->types; ?>


        <div class=" item">
            <p class="pkmn-name">
                <?php echo $name; ?>
            </p>
            <a href="pkmn.php?id=<?php echo $pokemon->id; ?>" ><img src=" <?php echo $sprite; ?>" class="img" alt="sprite-pokemon"></a>
            <p class="id">#<?php echo $id; ?></p>
            <?php foreach ($types as $typelist) { ?>

            <p class="type"><?php echo $typelist->type->name; ?>
            </p>
            <?php } ?>

        </div>

        <?php
}

?>

    </div>
</body>

</html6