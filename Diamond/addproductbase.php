 <?php
$dbloc = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'diamant';

$dbc = mysqli_connect($dbloc, $user, $pass, $dbname)
   or die ('Error connecting to MySQL Server!');
$reference = $_GET['reference'];
$designation = $_GET['designation'];
$prix = $_GET['prix'];
$stock = $_GET['stock'];
$photo = $_GET['photo'];
$disponibilite = $_GET['disponibilite'];
$description = $_GET['description'];

   $resultat = mysqli_query($dbc, "INSERT INTO produit (reference, designation,prix,stock,photo,disponibilite,description)"
                    ." VALUES ($reference,'$designation',$prix,$stock,'$photo',$disponibilite,'$description');");
if ($resultat == FALSE) { 
      echo "<script language=\"javascript\">";
echo "alert('Echec Sorry Try again') ";
echo "</script>";

   } 
   else
   {
echo "<script language=\"javascript\">";
echo "alert('Success ') ";
echo "</script>"; }

?>
<meta http-equiv="refresh" content="0; URL=http://localhost/Diamond/addproduct.php" />
