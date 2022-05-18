<?php

$base = 'https://pokeapi.co/api/v2/pokemon/';

for ($i = 1; $i < 50; ++$i) {
    $data = file_get_contents($base.$i.'/');
    $pokemon = json_decode($data);
    $name = $pokemon->name;
    $sprite = $pokemon->sprites->front_default; ?>


<p><?php echo $pokemon->name; ?>
</p>
<img src="<?php echo $sprite; ?>">

<?php
}
