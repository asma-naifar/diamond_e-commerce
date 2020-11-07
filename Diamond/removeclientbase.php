 <?php
$dbloc = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'diamant';

$dbc = mysqli_connect($dbloc, $user, $pass, $dbname)
   or die ('Error connecting to MySQL Server!');
$id_client = $_GET['id_client'];

   $resultat = mysqli_query($dbc, "DELETE FROM client WHERE id_client ='$id_client' ");
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
<meta http-equiv="refresh" content="0; URL=http://localhost/Diamond/removecat.php" />
