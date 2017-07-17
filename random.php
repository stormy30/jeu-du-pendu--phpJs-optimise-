<?php
//explication
//file() => Chaque ligne du fichier est mise dans un array().
//array_rand() => Tire un index au hasard parmi un array que je peux  ensuite utiliser pour faire $array[$index] et donc j' aurais ma ligne au hasard.

$lines = file('dico.txt', /*FILE_IGNORE_NEW_LINES|*/FILE_SKIP_EMPTY_LINES);
$index = array_rand($lines);
//echo $lines[$index];
?>
<!--mettre dans le php ce code pour preparer la recuperation de la variable enjs-->
<input type="hidden" id="$lines[$index]" name="$lines[$index]"  value= <?php echo $lines[$index]?>/>
