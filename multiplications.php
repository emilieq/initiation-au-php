<?php 

  // Variable qui ajoutera l'attribut selected de la liste déroulante
  $selected = '';
 
  // Parcours du tableau
  echo '<select name="multiplications">',"\n";
  for($i=1; $i<=10; $i++)
  {
    $selected = '';

    
    // Affichage de la ligne
    echo "\t",'<option value="', $i ,'"', $selected ,'>', $i ,'</option>',"\n";
    // Remise à zéro de $selected
    $selected='';
  }
  echo '</select>',"\n";





 ?>