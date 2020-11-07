<?php require 'headerAdmin.php';?>
	<!-- Header section end -->
<?php 
echo "<script language=\"javascript\">";
echo "alert('Welcome Admin') ";
echo "</script>";
?>

	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>Admin Profil</h4>
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





				<div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
					<div class="row">
<!-- asma-->
						
<?php
$dbloc = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'diamant';

$dbc = mysqli_connect($dbloc, $user, $pass, $dbname)
   or die ('Error connecting to MySQL Server!');
   $resultat = mysqli_query($dbc, 'SELECT photo,nom,prenom,location FROM admin WHERE idadmin=2'); 
   if ($resultat == FALSE) { 
      echo "Echec de l exécution de la requête.<br />"; 
   } 
   else { 
      while ($ligne = mysqli_fetch_array($resultat)) { 
         $nom=$ligne['nom'];
         $prenom=$ligne['prenom'];
         $photo=$ligne['photo'];
         $location=$ligne['location'];
        
      } }?>

						<div class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
									<img src="./<?php echo $photo ?>" alt="">
								</div>
								<div class="pi-text" >
									
									<p><Strong>ADMIN <?php echo $nom ?> <?php echo  $prenom ?></Strong></p>
									<p>Engineering student</p>
								</div>
								<div >
							</div>
						</div>
					<div class="description">
						<div class="box-header with-border">
                                    <h3 class="box-title">About me</h3>
                                </div>
                         <div class="box-body">
                                    <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

                                    <p class="text-muted">
                                        Second year computer engineering student at the national engineering school of Sfax .
                                    </p>

                                    <hr>

                                    <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

                                    <p class="text-muted"><?php echo  $location ?></p>

                                    <hr>

                                    <strong><i class="fa fa-pencil margin-r-5"></i> Compétences</strong>

                                    <p>
                                        <span class="label label-danger">HTML5</span>
                                        <span class="label label-success">CSS3</span>
                                        <span class="label label-info">Java</span>
                                        <span class="label label-warning">PHP</span>
                                        <span class="label label-info">JavaScript</span>
                                        <span class="label label-danger">Ajax</span>

                                    </p>

                                    <hr>



                                </div>
                                <!-- /.box-body -->
                            </div>
                      </div>    
                        <!-- /.box -->
 <!-- khaoula -->
<?php
$dbloc = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'diamant';

$dbc = mysqli_connect($dbloc, $user, $pass, $dbname)
   or die ('Error connecting to MySQL Server!');
   $resultat = mysqli_query($dbc, 'SELECT photo,nom,prenom,location FROM admin WHERE idadmin=3'); 
   if ($resultat == FALSE) { 
      echo "Echec de l exécution de la requête.<br />"; 
   } 
   else { 
      while ($ligne = mysqli_fetch_array($resultat)) { 
         $nom=$ligne['nom'];
         $prenom=$ligne['prenom'];
         $photo=$ligne['photo'];
         $location=$ligne['location'];
        
      } }?>

						<div class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
									<img src="./<?php echo $photo ?>" alt="">
								</div>
								<div class="pi-text" >
									
									<p><Strong>ADMIN <?php echo $nom ?> <?php echo  $prenom ?></Strong></p>
									<p>Engineering student</p>
								</div>
								<div >
							</div>
						</div>
					<div class="description">
						<div class="box-header with-border">
                                    <h3 class="box-title">About me</h3>
                                </div>
                         <div class="box-body">
                                    <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

                                    <p class="text-muted">
                                        Second year computer engineering student at the national engineering school of Sfax .
                                    </p>

                                    <hr>

                                    <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

                                    <p class="text-muted"><?php echo  $location ?></p>

                                    <hr>

                                    <strong><i class="fa fa-pencil margin-r-5"></i> Compétences</strong>

                                    <p>
                                        <span class="label label-danger">HTML5</span>
                                        <span class="label label-success">CSS3</span>
                                        <span class="label label-info">Java</span>
                                        <span class="label label-warning">PHP</span>
                                        <span class="label label-info">JavaScript</span>
                                        <span class="label label-danger">Ajax</span>

                                    </p>

                                    <hr>


                                </div>
                                <!-- /.box-body -->
                            </div>
                      </div>      <!-- /.box -->
<!-- ichrak -->
<?php
$dbloc = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'diamant';

$dbc = mysqli_connect($dbloc, $user, $pass, $dbname)
   or die ('Error connecting to MySQL Server!');
   $resultat = mysqli_query($dbc, 'SELECT photo,nom,prenom,location FROM admin WHERE idadmin=1'); 
   if ($resultat == FALSE) { 
      echo "Echec de l exécution de la requête.<br />"; 
   } 
   else { 
      while ($ligne = mysqli_fetch_array($resultat)) { 
         $nom=$ligne['nom'];
         $prenom=$ligne['prenom'];
         $photo=$ligne['photo'];
         $location=$ligne['location'];
        
      } }?>

						<div class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
									<img src="./<?php echo $photo ?>" alt="">
								</div>
								<div class="pi-text" >
									
									<p><Strong>ADMIN <?php echo $nom ?> <?php echo  $prenom ?></Strong></p>
									<p>Engineering student</p>
								</div>
								<div >
							</div>
						</div>
					<div class="description">
						<div class="box-header with-border">
                                    <h3 class="box-title">About me</h3>
                                </div>
                         <div class="box-body">
                                    <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

                                    <p class="text-muted">
                                        Second year computer engineering student at the national engineering school of Sfax .
                                    </p>

                                    <hr>

                                    <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

                                    <p class="text-muted"><?php echo  $location ?></p>

                                    <hr>

                                    <strong><i class="fa fa-pencil margin-r-5"></i> Compétences</strong>

                                    <p>
                                        <span class="label label-danger">HTML5</span>
                                        <span class="label label-success">CSS3</span>
                                        <span class="label label-info">Java</span>
                                        <span class="label label-warning">PHP</span>
                                        <span class="label label-info">JavaScript</span>
                                        <span class="label label-danger">Ajax</span>

                                    </p>

                                    <hr>


                                </div>
                                <!-- /.box-body -->
                            </div>
                      </div>      <!-- /.box -->
		</div>

	</section>
	
 
	<!-- Category section end -->

	<!-- Footer section -->
	<?php require 'footer.php';?>