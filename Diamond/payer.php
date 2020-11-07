<?php
$dbloc = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'diamant';

$dbc = mysqli_connect($dbloc, $user, $pass, $dbname)
   or die ('Error connecting to MySQL Server!');

		$nom=$_GET['nom'];
		$prenom=$_GET['prenom'];
		$adresse=$_GET['adresse'];
		$tel=$_GET['tel'];
		$pay=$_GET['pay'];
		$code=$_GET['code'];
		$livraison=$_GET['livraison'];
		$carte=$_GET['carte'];
 $resultat = mysqli_query($dbc, "INSERT INTO paiement (num_compte)"." VALUES ($code);");
/*if ($resultat == FALSE) { 
      echo "<script language=\"javascript\">";
echo "alert('Echec Sorry Try again') ";
echo "</script>";

   } 
   */
header("Location: thanks.php");

   
  
?>


