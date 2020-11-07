 <?php
$dbloc = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'diamant';

$dbc = mysqli_connect($dbloc, $user, $pass, $dbname)
   or die ('Error connecting to MySQL Server!');
$reference= $_GET['reference'];

   $resultat = mysqli_query($dbc, "DELETE FROM produit WHERE reference ='$reference' ");
if ($resultat == FALSE ){ 
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
<meta http-equiv="refresh" content="0; URL=http://localhost/Diamond/removecat.php" />
