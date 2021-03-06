<?php require 'header.php';?>
	<!-- Header section end -->
	<?php if(!isset($GET_['search']) and empty($_GET['search'])){?>

	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="img/product/40.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span>New Arrivals</span>
							<h2>Gift Collection</h2>
							<p> Having trouble finding a piece of jewelry for him or her? We know guys can be tough to shop for. Not every guy wants a tool box or a bigger TV… Sometimes the perfect gift is a piece of jewelry from Diamond Jewelry! </p>

						</div>
					</div>
					<div class="offer-card text-white">
						<span></span>
						<h2>-50%</h2>
						<p>SHOP NOW</p>
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="img/product/41.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span>New Arrivals</span>
							<h2>Gift Collection</h2>
							<p>From watches to cufflinks,bracelets to necklaces, rings to chains, we have a wide selection of jewelry for him and her to choose from! Our staff will narrow down the selection by asking you some key questions to find that perfect gift for him or her!. </p>
						</div>
					</div>
					<div class="offer-card text-white">
						<span></span>
						<h2>-30%</h2>
						<p>SHOP NOW</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="slide-num-holder" id="snh-1"></div>
		</div>
	</section>
	<!-- Hero section end -->


	<!-- Category section -->
	<section class="category-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-2 order-lg-1">
					<div class="filter-widget">
						<h2 class="fw-title">Categories</h2>
						<ul class="category-menu">
							<li><a href="#">Jewelry</a></li>
								
							<li><a  href="cat.php#rings">Rings<span>(2)</span></a></li>
							<li><a href="cat.php#bracelets">Bracelets<span>(56)</span></a></li>
							<li><a href="#">Prom Dresses<span>(36)</span></a></li>
							<li><a href="cat.php#necklaces">Necklaces<span>(27)</span></a></li>
							<li><a href="cat.php#earrings">Earrings<span>(19)</span></a></li>
								
							
							<li><a href="#">Accessory</a></li>
								
							<li><a href="catA.php#watches">Watches<span>(2)</span></a></li>
							<li><a href="catA.php#bags">Bags and purses<span>(56)</span></a></li>
							<li><a href="catA.php#tiaras">tiaras<span>(36)</span></a></li>
							<li><a href="catA.php#eyewears">Eyewears<span>(36)</span></a></li>
						</ul>
					</div>
					<div class="filter-widget mb-0">
						<h2 class="fw-title">refine by</h2>
						<div class="price-range-wrap">
							<h4>Price</h4>
                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="10" data-max="270">
								<div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 100%;"></div>
								<span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;">
								</span>
								<span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 100%;">
								</span>
							</div>
							<div class="range-slider">
                                <div class="price-input">
                                    <input type="text" id="minamount">
                                    <input type="text" id="maxamount">
                                </div>
                            </div>
                        </div>
					</div>
					<div class="filter-widget mb-0">
						<h2 class="fw-title">color by</h2>
						<div class="fw-color-choose">
							<div class="cs-item">
								<input type="radio" name="cs" id="gray-color">
								<label class="cs-gray" for="gray-color">
									<span>(3)</span>
								</label>
							</div>
							<div class="cs-item">
								<input type="radio" name="cs" id="orange-color">
								<label class="cs-orange" for="orange-color">
									<span>(25)</span>
								</label>
							</div>
							<div class="cs-item">
								<input type="radio" name="cs" id="yollow-color">
								<label class="cs-yollow" for="yollow-color">
									<span>(112)</span>
								</label>
							</div>
							<div class="cs-item">
								<input type="radio" name="cs" id="green-color">
								<label class="cs-green" for="green-color">
									<span>(75)</span>
								</label>
							</div>
							<div class="cs-item">
								<input type="radio" name="cs" id="purple-color">
								<label class="cs-purple" for="purple-color">
									<span>(9)</span>
								</label>
							</div>
							<div class="cs-item">
								<input type="radio" name="cs" id="blue-color" checked="">
								<label class="cs-blue" for="blue-color">
									<span>(29)</span>
								</label>
							</div>
						</div>
					</div>
					<div class="filter-widget mb-0">
						<h2 class="fw-title">Size</h2>
						<div class="fw-size-choose">
							<div class="sc-item">
								<input type="radio" name="sc" id="xs-size">
								<label for="xs-size">XS</label>
							</div>
							<div class="sc-item">
								<input type="radio" name="sc" id="s-size">
								<label for="s-size">S</label>
							</div>
							<div class="sc-item">
								<input type="radio" name="sc" id="m-size"  checked="">
								<label for="m-size">M</label>
							</div>
							<div class="sc-item">
								<input type="radio" name="sc" id="l-size">
								<label for="l-size">L</label>
							</div>
							<div class="sc-item">
								<input type="radio" name="sc" id="xl-size">
								<label for="xl-size">XL</label>
							</div>
							<div class="sc-item">
								<input type="radio" name="sc" id="xxl-size">
								<label for="xxl-size">XXL</label>
							</div>
						</div>
					</div>
					<div class="filter-widget">
						<h2 class="fw-title">Brand</h2>
						<ul class="category-menu">
							<li><a href="#">Abercrombie & Fitch <span>(2)</span></a></li>
							<li><a href="#">Asos<span>(56)</span></a></li>
							<li><a href="#">Bershka<span>(36)</span></a></li>
							<li><a href="#">Missguided<span>(27)</span></a></li>
							<li><a href="#">Zara<span>(19)</span></a></li>
						</ul>
					</div>
				</div>



				<div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
					<div class="row">
<?php
$dbloc = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'diamant';

$dbc = mysqli_connect($dbloc, $user, $pass, $dbname)
   or die ('Error connecting to MySQL Server!');
   $resultat = mysqli_query($dbc, 'SELECT prix,photo,designation FROM produit WHERE reference=31'); 
   if ($resultat == FALSE) { 
      echo "Echec de l exécution de la requête.<br />"; 
   } 
   else { 
      while ($ligne = mysqli_fetch_array($resultat)) { 
         $prix=$ligne['prix'];
         $photo=$ligne['photo'];
         $designation=$ligne['designation'];
        
      } }?>





						<div id="watches" class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
									<div class="tag-sale">ON SALE</div>
					
									
									<a href="product.php?param=31" >
									<img src="./<?php echo $photo ?>" alt=""></a>

									<div class="pi-links">
										<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6><?php echo $prix ?>DT</h6>
									<p><?php echo $designation ?></p>
								</div>
							</div>
						</div>
						
<?php
$dbloc = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'diamant';

$dbc = mysqli_connect($dbloc, $user, $pass, $dbname)
   or die ('Error connecting to MySQL Server!');
   $resultat = mysqli_query($dbc, 'SELECT prix,photo,designation FROM produit WHERE reference=32'); 
   if ($resultat == FALSE) { 
      echo "Echec de l exécution de la requête.<br />"; 
   } 
   else { 
      while ($ligne = mysqli_fetch_array($resultat)) { 
         $prix=$ligne['prix'];
         $photo=$ligne['photo'];
         $designation=$ligne['designation'];
        
      } }?>

						<div class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
									<a href="product.php?param=32" >
									<img src="./<?php echo $photo ?>" alt=""></a>
									<div class="pi-links">
										<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6><?php echo $prix ?>DT</h6>
									<p><?php echo $designation ?></p>
								</div>
							</div>
						</div>
<?php
$dbloc = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'diamant';

$dbc = mysqli_connect($dbloc, $user, $pass, $dbname)
   or die ('Error connecting to MySQL Server!');
   $resultat = mysqli_query($dbc, 'SELECT prix,photo,designation FROM produit WHERE reference=34'); 
   if ($resultat == FALSE) { 
      echo "Echec de l exécution de la requête.<br />"; 
   } 
   else { 
      while ($ligne = mysqli_fetch_array($resultat)) { 
         $prix=$ligne['prix'];
         $photo=$ligne['photo'];
         $designation=$ligne['designation'];
        
      } }?>

						<div class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
									<a href="product.php?param=34" >
									<img src="./<?php echo $photo ?>" alt=""></a>
									<div class="pi-links">
										<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6><?php echo $prix ?>DT</h6>
									<p><?php echo $designation ?> </p>
								</div>
							</div>
						</div>
<?php
$dbloc = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'diamant';

$dbc = mysqli_connect($dbloc, $user, $pass, $dbname)
   or die ('Error connecting to MySQL Server!');
   $resultat = mysqli_query($dbc, 'SELECT prix,photo,designation FROM produit WHERE reference=33'); 
   if ($resultat == FALSE) { 
      echo "Echec de l exécution de la requête.<br />"; 
   } 
   else { 
      while ($ligne = mysqli_fetch_array($resultat)) { 
         $prix=$ligne['prix'];
         $photo=$ligne['photo'];
         $designation=$ligne['designation'];
        
      } }?>
						<div id="bags" class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
									<a href="product.php?param=33" >
									<img src="./<?php echo $photo ?>" alt=""></a>
									<div class="pi-links">
										<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6><?php echo $prix ?>DT</h6>
									<p><?php echo $designation ?></p>
								</div>
							</div>
						</div>
<?php
$dbloc = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'diamant';

$dbc = mysqli_connect($dbloc, $user, $pass, $dbname)
   or die ('Error connecting to MySQL Server!');
   $resultat = mysqli_query($dbc, 'SELECT prix,photo,designation FROM produit WHERE reference=35'); 
   if ($resultat == FALSE) { 
      echo "Echec de l exécution de la requête.<br />"; 
   } 
   else { 
      while ($ligne = mysqli_fetch_array($resultat)) { 
         $prix=$ligne['prix'];
         $photo=$ligne['photo'];
         $designation=$ligne['designation'];
        
      } }?>

						<div class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
									<a href="product.php?param=35" >
									<img src="./<?php echo $photo ?>" alt=""></a>
									<div class="pi-links">
										<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6><?php echo $prix ?>DT</h6>
									<p><?php echo $designation ?></p>
								</div>
							</div>
						</div>
<?php
$dbloc = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'diamant';

$dbc = mysqli_connect($dbloc, $user, $pass, $dbname)
   or die ('Error connecting to MySQL Server!');
   $resultat = mysqli_query($dbc, 'SELECT prix,photo,designation FROM produit WHERE reference=36'); 
   if ($resultat == FALSE) { 
      echo "Echec de l exécution de la requête.<br />"; 
   } 
   else { 
      while ($ligne = mysqli_fetch_array($resultat)) { 
         $prix=$ligne['prix'];
         $photo=$ligne['photo'];
         $designation=$ligne['designation'];
        
      } }?>

						<div class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
									<a href="product.php?param=36" >
									<img src="./<?php echo $photo ?>" alt=""></a>
									<div class="pi-links">
										<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6><?php echo $prix ?>DT</h6>
									<p><?php echo $designation ?></p>
								</div>
							</div>
						</div>
<?php
$dbloc = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'diamant';

$dbc = mysqli_connect($dbloc, $user, $pass, $dbname)
   or die ('Error connecting to MySQL Server!');
   $resultat = mysqli_query($dbc, 'SELECT prix,photo,designation FROM produit WHERE reference=37'); 
   if ($resultat == FALSE) { 
      echo "Echec de l exécution de la requête.<br />"; 
   } 
   else { 
      while ($ligne = mysqli_fetch_array($resultat)) { 
         $prix=$ligne['prix'];
         $photo=$ligne['photo'];
         $designation=$ligne['designation'];
        
      } }?>

						<div id="tiaras" class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
									<a href="product.php?param=37" >
									<img src="./<?php echo $photo ?>" alt=""></a>
									<div class="pi-links">
										<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6><?php echo $prix ?>DT</h6>
									<p><?php echo $designation ?></p>
								</div>
							</div>
						</div>
<?php
$dbloc = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'diamant';

$dbc = mysqli_connect($dbloc, $user, $pass, $dbname)
   or die ('Error connecting to MySQL Server!');
   $resultat = mysqli_query($dbc, 'SELECT prix,photo,designation FROM produit WHERE reference=38'); 
   if ($resultat == FALSE) { 
      echo "Echec de l exécution de la requête.<br />"; 
   } 
   else { 
      while ($ligne = mysqli_fetch_array($resultat)) { 
         $prix=$ligne['prix'];
         $photo=$ligne['photo'];
         $designation=$ligne['designation'];
        
      } }?>
						<div class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
									<a href="product.php?param=38" >
									<img src="./<?php echo $photo ?>" alt=""></a>
									<div class="pi-links">
										<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6><?php echo $prix ?>DT</h6>
									<p><?php echo $designation ?></p>
								</div>
							</div>
						</div>
<?php
$dbloc = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'diamant';

$dbc = mysqli_connect($dbloc, $user, $pass, $dbname)
   or die ('Error connecting to MySQL Server!');
   $resultat = mysqli_query($dbc, 'SELECT prix,photo,designation FROM produit WHERE reference=39'); 
   if ($resultat == FALSE) { 
      echo "Echec de l exécution de la requête.<br />"; 
   } 
   else { 
      while ($ligne = mysqli_fetch_array($resultat)) { 
         $prix=$ligne['prix'];
         $photo=$ligne['photo'];
         $designation=$ligne['designation'];
        
      } }?>
						<div class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
									<a href="product.php?param=39" >
									<img src="./<?php echo $photo ?>" alt=""></a>
									<div class="pi-links">
										<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6><?php echo $prix ?>DT</h6>
									<p><?php echo $designation ?></p>
								</div>
							</div>
						</div>
<?php
$dbloc = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'diamant';

$dbc = mysqli_connect($dbloc, $user, $pass, $dbname)
   or die ('Error connecting to MySQL Server!');
   $resultat = mysqli_query($dbc, 'SELECT prix,photo,designation FROM produit WHERE reference=22'); 
   if ($resultat == FALSE) { 
      echo "Echec de l exécution de la requête.<br />"; 
   } 
   else { 
      while ($ligne = mysqli_fetch_array($resultat)) { 
         $prix=$ligne['prix'];
         $photo=$ligne['photo'];
         $designation=$ligne['designation'];
        
      } }?>
						<div id="eyewears" class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
									<div class="tag-new">new</div>
									<a href="product.php?param=22" >
									<img src="./<?php echo $photo ?>" alt=""></a>
									<div class="pi-links">
										<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6><?php echo $prix ?>DT</h6>
									<p><?php echo $designation ?></p>
								</div>
							</div>
						</div>
<?php
$dbloc = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'diamant';

$dbc = mysqli_connect($dbloc, $user, $pass, $dbname)
   or die ('Error connecting to MySQL Server!');
   $resultat = mysqli_query($dbc, 'SELECT prix,photo,designation FROM produit WHERE reference=16'); 
   if ($resultat == FALSE) { 
      echo "Echec de l exécution de la requête.<br />"; 
   } 
   else { 
      while ($ligne = mysqli_fetch_array($resultat)) { 
         $prix=$ligne['prix'];
         $photo=$ligne['photo'];
         $designation=$ligne['designation'];
        
      } }?>
						<div class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
									<a href="product.php?param=16" >
									<img src="./<?php echo $photo ?>" alt=""></a>
									<div class="pi-links">
										<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6><?php echo $prix ?>DT</h6>
									<p><?php echo $designation ?></p>
								</div>
							</div>
						</div>
<?php
$dbloc = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'diamant';

$dbc = mysqli_connect($dbloc, $user, $pass, $dbname)
   or die ('Error connecting to MySQL Server!');
   $resultat = mysqli_query($dbc, 'SELECT prix,photo,designation FROM produit WHERE reference=18'); 
   if ($resultat == FALSE) { 
      echo "Echec de l exécution de la requête.<br />"; 
   } 
   else { 
      while ($ligne = mysqli_fetch_array($resultat)) { 
         $prix=$ligne['prix'];
         $photo=$ligne['photo'];
         $designation=$ligne['designation'];
        
      } }?>
						<div class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
									<a href="product.php?param=18" >
									<img src="./<?php echo $photo ?>" alt=""></a>
									<div class="pi-links">
										<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6><?php echo $prix ?>DT</h6>
									<p><?php echo $designation ?></p>
								</div>
							</div>
						</div>
						<div class="text-center w-100 pt-3">
							<button class="site-btn sb-line sb-dark">LOAD MORE</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Category section end -->
<?php } else{
		$search = htmlspecialchars($_GET['search']);
		$resultat = mysqli_query($conn, 'SELECT reference,designation,prix,stock,photo,disponibilite,description FROM produit WHERE designation like "%'.$search.'%"'); 
   if ($resultat == FALSE) { 
      echo "Echec de l exécution de la requête.<br />"; 
   } 
   while ($ligne = mysqli_fetch_array($resultat)) { 
      	$ref=$ligne['reference'];
         $prix=$ligne['prix'];
         $photo=$ligne['photo'];
         $designation=$ligne['designation'];
          $quantite=$ligne['stock'];
           $disp=$ligne['disponibilite'];
           $description=$ligne['description'];
     
				echo "<a href='produit.php?param=$ref' > "; ?>
					 <div id="rech">
				<img class="p" class="rech" src="./<?php echo $photo ?>" alt="" ></a>
				<div class="col-lg-6 product-details">
					<h2 class="p-title"><?php echo $designation ?></h2>
					<h3 class="p-price"><?php echo $prix ." DT" ?></h3>
					<h4 class="p-stock">Available: <span>In Stock</span></h4>
					<?php if ($disp==1) echo "yes";
					else
						echo "no";?>
				
			</div>
		</div>
				<?php 
				
				
					 
				}}?>

	<!-- Footer section -->
	<?php require 'footer.php';?>