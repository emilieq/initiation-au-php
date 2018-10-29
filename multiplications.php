
  <?php
  echo "<center><h1><b><u> Table de Multiplication</h1></b></u>";
  echo "<hr size=10 color=#9370D8";
  echo "<hr size=10 color=#9370D8";


  if (($_POST['txtTime']))

  {
  echo "<h1>";
  $t=$_POST['txtTime'];

  for ($q = 1; $q < 13; $q++)

  {
  echo $q." x " .$t. " = ".$q*$t. "<br>";
  }
  }
  echo "<hr size=10 color=#9370D8";
  ?>

  <html>
  <head><title>Afficher le tableau multiplication</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <form method = "post" action = "multiplications.php">
  Entrer le nombre:
  <input type="text" name="txtTime"/>
  <input type ="submit" value ="Valider"/>
  </form>
  </html>

<!-- <?php 



  // // Variable qui ajoutera l'attribut selected de la liste déroulante
  // $selected = '';
 
  // // Parcours du tableau
  // echo '<select name="multiplications">',"\n";
  // for($i=1; $i<=10; $i++)
  // {
  //   $selected = '';


  //   // Affichage de la ligne
  //   echo "\t",'<option value="', $i ,'"', $selected ,'>', $i ,'</option>',"\n";
  //   // Remise à zéro de $selected
  //   $selected='';
  // }
  // echo '</select>',"\n";


 
  // 		if  (($_GET["signe"])=="plus"){
  // 		 	for ($i=1; $i<=10;$i++)
  // 		 		echo $_GET["nombre"]. "+" .$i. "=" .$_GET["nombre"] + $i ."<br>";
  // 		}
  // 		if  (($_GET["signe"])=="fois"){
  // 		 	for ($i=1; $i<=10;$i++)
  // 		 		echo $_GET["nombre"]. "*" .$i. "=" .$i * $_GET["nombre"] ."<br>";
  // 		}
 ?> -->
 








