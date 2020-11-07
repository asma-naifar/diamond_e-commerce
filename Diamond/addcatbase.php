 <?php
$dbloc = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'diamant';

$dbc = mysqli_connect($dbloc, $user, $pass, $dbname)
   or die ('Error connecting to MySQL Server!');
$code = $_GET['code'];
$nom = $_GET['nom'];
$description = $_GET['description'];

   $resultat = mysqli_query($dbc, "INSERT INTO categorie (code_cat,nom_cat,description_cat)"
                    ." VALUES ($code,'$nom','$description');");
if ($resultat == FALSE) { 
      echo "<script language=\"javascript\">";
echo "alert('Echec Sorry Try again') ";
echo "</script>";

   } 
   else
   {
echo "<script language=\"javascript\">";
echo "alert('Success ') ";
echo "</script>"; 
}
?>
<meta http-equiv="refresh" content="0; URL=http://localhost/Diamond/addcat.php" />
