<?php require 'headerAdmin.php';?>
    <!-- Header section end -->


    <!-- Page info -->
    <div class="page-top-info">
        <div class="container">
            <h4>View Product</h4>
            <div class="site-pagination">
                <a href="index.php">Home</a> 
            </div>
        </div>
    </div>
    <!-- Page info end -->


    <!-- Category section -->
    <section class="category-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-2 order-lg-1">
                    <div class="filter-widget">
                        <h2 class="fw-title">Categories</h2>
                        <ul class="category-menu">
                                
                            

                            <li><a href="viewcat.php"><Strong>View Categories</Strong></i></a></li>
                            <li><a href="addcat.php"><Strong>Add Categories</Strong></a></li>
                            <li><a href="removecat.php"><Strong>Remove Categories</Strong></a></li>
                            
                                
                        </ul>
                    </div>

                    <div class="filter-widget">
                        <h2 class="fw-title">Clients</h2>
                        <ul class="category-menu">
                                
                            

                            <li><a href="viewclient"><Strong>View Clients</Strong></i></a></li>
                           
                            <li><a href="removeclient"><Strong>Remove Clients</Strong></a></li>
                            
                                
                        </ul>
                    </div>
                    
                    <div class="filter-widget">
                        <h2 class="fw-title">Products</h2>
                        <ul class="category-menu">
                            <li><a href="viewproduct"><Strong>View Products</Strong></i></a></li>
                            <li><a href="addproduct"><Strong>Add Products</Strong></a></li>
                            <li><a href="removeproduct"><Strong>Remove Products</Strong></a></li>
                        </ul>
                    </div>
                </div>




<!--partie 2-->


                <div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
        <?php
$dbloc = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'diamant';

$dbc = mysqli_connect($dbloc, $user, $pass, $dbname)
   or die ('Error connecting to MySQL Server!');
   $resultat = mysqli_query($dbc, 'SELECT reference, designation,prix,stock,disponibilite FROM produit'); ?>
   
    <table  width="900">
                <tr>
                    <th>reference</th>
                    <th>designation</th>
                    <th>prix</th>
                    <th>stock</th>
                    <th>disponibilite</th>

                </tr>

   <?php 
   if ($resultat == FALSE) { 
      echo "Echec de l exécution de la requête.<br />"; 
   } 
   else { 
      while ($ligne = mysqli_fetch_array($resultat)) {  ?>
        <tr>
                    <th><?php echo$ligne['reference'];?></th>
                    <th><?php echo $ligne['designation'];?></th>
                    <th><?php echo $ligne['prix'];?></th>
                    <th><?php echo $ligne['stock'];?></th>
                    <th><?php echo $ligne['disponibilite'];?></th>
        </tr>

<?php }

  }?>
    
                               
</table>   
        </div>

    </section>
 
    <!-- Category section end -->



    <!-- Footer section -->
    <?php require 'footer.php';?>