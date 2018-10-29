 <html>

  <head><title>Afficher le tableau multiplication</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  </head>


<body>

	<h1>Table de Multiplication</h1>


  <?php

$table = 3 ;
$res = 'table de multiplication de '.$table.'<br />'.'<br />';
$i = 0;

while ($i < 11) {
$res .= $i.' * '.$table.' = '.$i*$table.'<br />';
$i++;
}
echo $res .'<br />';

  ?>

  <form method = "post" action = "multiplications.php">
  Choisir une table de multiplication entre 1 et 10:
  <select type="text" name="txtTime"/>
  	<option> 1
	<option> 2
	<option> 3
	<option> 4
	<option> 5
	<option> 6
	<option> 7
	<option> 8
	<option> 9
	<option> 10
  <input type ="submit" value ="Valider"/>
  </select>
  </form>
  </body>

<?php
// *****************************tables de multiplication  *************************************************************



  if (($_POST['txtTime']))

  {
  echo "<h2>";
  $t=$_POST['txtTime'];

  for ($q = 1; $q < 11; $q++)

  {
  echo $q." x " .$t. " = ".$q*$t. "<br>";
  }
  }
  


 ?>


  </html>





<!-- <?php 


 // // *****************************MENU DEROULANT *************************************************************
 //  // Variable qui ajoutera l'attribut selected de la liste déroulante
 //  $selected = '';
 
 //  // Parcours du tableau
 //  echo '<select name="txtTime">',"\n";
 //  for($i=1; $i<=10; $i++)
 //  {
 //    $selected = '';


 //    // Affichage de la ligne
 //    echo "\t",'<option value="', $i ,'"', $selected ,'>', $i ,'</option>',"\n";
 //    // Remise à zéro de $selected
 //    $selected='';
 //  }
 //  echo '</select>',"\n";


 
 //  		if  (($_GET["signe"])=="plus"){
 //  		 	for ($i=1; $i<=10;$i++)
 //  		 		echo $_GET["nombre"]. "+" .$i. "=" .$_GET["nombre"] + $i ."<br>";
 //  		}
 //  		if  (($_GET["signe"])=="fois"){
 //  		 	for ($i=1; $i<=10;$i++)
 //  		 		echo $_GET["nombre"]. "*" .$i. "=" .$i * $_GET["nombre"] ."<br>";
 //  		}
 ?>  -->








