<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>classe_simplon</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>

<table style = border:1px solide black; width="450px">
			<tr style="background-color:teal;color:white;">
				<th>PRENOM NOM</th>
				<th>AGE</th>                  
			</tr>
  
  <?php
	//recupération donné xml
    $fichier = 'classe-simploniens.xml';
    $xml = simplexml_load_file($fichier);
  
    
    function age($date) // fontion pour convertir l'age
{
  return (int) ((time() - strtotime($date)) / 365 / 24 / 3600 ) ;
}

    foreach($xml-> simplonien as $simplonien){
	$pre = $simplonien->prenom ;
	$nom = $simplonien->nom ;
	$age = age($simplonien->date_naissance);

	  echo "<tr><td>$pre $nom</td>
		 <td>$age ans</td></tr>" ;
	$age2 = [];
	$age2[$age] = $pre2 ;
	    $age_tri = array("$pre2"=>"$nom");
	    asort($age_tri);
	    foreach ($age_tri as $key => $val) {
	      echo "$key ";
}
}
 ?>
<?php
 


?>

</table>
 
</body>
</html>