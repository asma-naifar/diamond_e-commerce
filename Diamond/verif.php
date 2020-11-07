 <?php
$dbloc = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'diamant';

$dbc = mysqli_connect($dbloc, $user, $pass, $dbname)
   or die ('Error connecting to MySQL Server!');
$password= $_GET['password'];
$resultat = mysqli_query($dbc, "SELECT nom,prenom FROM admin WHERE password ='$password' ");
if ($resultat == FALSE) { 
      echo "<script language=\"javascript\">";
echo "alert('Echec Sorry Try again') ";
echo "</script>";

   } 
   else { 
      while ($ligne = mysqli_fetch_array($resultat)) { 
         $nom=$ligne['nom'];
         $prenom=$ligne['prenom'];}
        


}
header('location:profil.php')

?>

