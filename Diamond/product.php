<?php require 'header.php';?>
<?php
$dbloc = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'diamant';
$ref=$_GET['param'];
$dbc = mysqli_connect($dbloc, $user, $pass, $dbname)
   or die ('Error connecting to MySQL Server!');
   $resultat = mysqli_query($dbc, 'SELECT designation,prix,stock,photo,disponibilite,description FROM produit WHERE reference="'.$ref.'"'); 
   if ($resultat == FALSE) { 
      echo "Echec de l exécution de la requête.<br />"; 
   } 
   else { 
      while ($ligne = mysqli_fetch_array($resultat)) { 
        $prix = $ligne['prix'];
        $photo = $ligne['photo'];
        $designation = $ligne['designation'];
        $quantite = $ligne['stock'];
        $disp = $ligne['disponibilite'];
        $description = $ligne['description'];
        
      } }?>


<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4><?php echo $designation ?></h4>
			<div class="site-pagination">
				<a href="index.html">Home</a> /
				<a href="">Shop</a>
			</div>
		</div>
	</div>
	<!-- Page info end -->

<div class="row"  style="margin:100px;">
				<div class="col-lg-6">
					<div class="h-50" class="w-50" >
						<div class="product-pic-zoom">
						<img  class="product-big-img" src="./<?php echo $photo ?>" alt="">
						</div>
					</div>
					<!-- <div class="product-thumbs" tabindex="1" style="overflow: hidden; outline: none;">
						<div  class="product-thumbs-track">
							<div  class="pt active" data-imgbigurl="./<?php //echo $photo ?>"><img class="h-50" class="w-50"  src="./<?php 
							//echo $photo ?>" alt="" ></div>
							
						</div>
					</div> -->
				</div>
				<div class="col-lg-6 product-details">
					<h2 class="p-title"><?php echo $designation ?></h2>
					<h3 class="p-price"><?php echo $prix ?></h3>
					<h4 class="p-stock">Available: <span><?php if ($disp==1) echo "In Stock";else echo "Not in Stock";?></span></h4>
					
					<div class="p-rating">
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o fa-fade"></i>
					</div>
					<div class="p-review">
						<a href="">3 reviews</a>|<a href="">Add your review</a>
					</div>


						
                      <!-- <div class="pro-qty"><input type="text" value="1" onblur="verifquantite()" id="qt"></div>
                   </div>-->
                   	<?php if ($isLoggedIn){ ?>
					<a href="addToCart.php?param=<?php echo $ref;?>" class="site-btn">ADD TO CART </a>
					<?php }else{ ?>
					<a href="login" class="site-btn">ADD TO CART</a>
					<?php }?>
					<div id="accordion" class="accordion-area">
						<div class="panel">
							<div class="panel-header" id="headingOne">
								<button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">information</button>
							</div>
							<div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="panel-body">
									<p><?php echo $description ?></p>
								</div>
							</div>
						</div>
					
						
						<div class="panel">
							<div class="panel-header" id="headingTwo">
								<button class="panel-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">care details </button>
							</div>
							<div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
								<div class="panel-body">
									<img src="./img/cards.png" alt="">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integer bibendum sodales arcu id te mpus. Ut consectetur lacus leo, non scelerisque nulla euismod nec.</p>
								</div>
							</div>
						</div>
						<div class="panel">
							<div class="panel-header" id="headingThree">
								<button class="panel-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">shipping & Returns</button>
							</div>
							<div id="collapse3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
								<div class="panel-body">
									<h4>7 Days Returns</h4>
									<p>Cash on Delivery Available<br>Home Delivery <span>3 - 4 days</span></p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integer bibendum sodales arcu id te mpus. Ut consectetur lacus leo, non scelerisque nulla euismod nec.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="social-sharing" class="w-100">
						<a href=""><i class="fa fa-google-plus" style="font-size:36px; margin-right:40px;"></i></a>
						<a href=""><i class="fa fa-pinterest" style="font-size:36px; margin-right:40px;" ></i></a>
						<a href=""><i class="fa fa-facebook" style="font-size:36px; margin-right:40px;"></i></a>
						<a href=""><i class="fa fa-twitter" style="font-size:36px; margin-right:40px;"></i></a>
						<a href=""><i class="fa fa-youtube" style="font-size:36px; margin-right:40px;"></i></a>
					</div>
			</div>
</div>
<?php require 'footer.php';?>