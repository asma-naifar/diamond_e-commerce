<?php require_once 'header.php';?>
 <?php if(!isset($GET_['search']) and empty($_GET['search'])){?>
	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="img/bg.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span>New Arrivals</span>
							<h2>Jewelry Collection</h2>
							<p> Here you will find  an incredible selection of fine jewelry.  We have a vast collection of rings, necklaces, earrings, brooches and bracelets in 14k or 18k yellow gold, white gold, rose gold and platinum that are sure to satisfy everybody’s needs and desires. </p>

						</div>
					</div>
					<div class="offer-card text-white">
						<span></span>
						<h2>-50%</h2>
						<p>SHOP NOW</p>
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="img/bg-22.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span>New Arrivals</span>
							<h2>Jewelry Collection</h2>
							<p>Our latest designs feature highly coveted natural materials, including lustrous mother-of-pearl, vibrant turquoise, black onyx, tiger’s eye and pink opal. </p>
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



	<!-- Features section -->
	<section class="features-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="img/icons/1.png" alt="#">
						</div>
						<h2>Fast Secure Payments</h2>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="img/icons/2.png" alt="#">
						</div>
						<h2>Premium Products</h2>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="img/icons/3.png" alt="#">
						</div>
						<h2>Free & fast Delivery</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Features section end -->


<!-- latest product section -->
	<section class="top-letest-product-section">
		<div class="container">
			<div class="section-title">
				<h2>LATEST PRODUCTS</h2>
			</div>
			<div class="product-slider owl-carousel">
				<div class="product-item">
					<div class="pi-pic">
						<a href="product?param=1" >
						<img src="./img/product/1.jpg" alt=""></a>
						<div class="pi-links">
						<?php if ($isLoggedIn){ ?>
						<a href="addToCart.php?param=1" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART </span></a>
						<?php }else{ ?>
						<a href="login" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART </span></a>
						<?php }?>
						<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
						</div>
					</div>
					<div class="pi-text">
						<h6>100 DT</h6>
						<p>Silver Long Drop Earrings</p>
					</div>
				</div>
				<div class="product-item">
					<div class="pi-pic">
						<div class="tag-new">New</div>
						<a href="product?param=2" >
						<img src="./img/product/2.jpg" alt=""></a>
						<div class="pi-links">
							<?php if ($isLoggedIn){ ?>
							<a href="addToCart.php?param=2" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART </span></a>
							<?php }else{ ?>
							<a href="login" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART </span></a>
							<?php }?>
							<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
						</div>
					</div>
					<div class="pi-text">
						<h6>250 DT</h6>
						<p> Rose Gold Necklace </p>
					</div>
				</div>
				<div class="product-item">
					<div class="pi-pic">
						<a href="product?param=3" >
						<img src="./img/product/3.jpg" alt=""></a>
						<div class="pi-links">
							<?php if ($isLoggedIn){ ?>
							<a href="addToCart.php?param=3" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART </span></a>
							<?php }else{ ?>
							<a href="login" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART </span></a>
							<?php }?>
							<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
						</div>
					</div>
					<div class="pi-text">
						<h6>350 DT</h6>
						<p>Rose Gold Collection</p>
					</div>
				</div>
				<div class="product-item">
						<div class="pi-pic">
							<a href="product?param=4" >
						<img src="./img/product/24.jpg" alt=""></a>
							<div class="pi-links">
								<?php if ($isLoggedIn){ ?>
								<a href="addToCart.php?param=4" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART </span></a>
								<?php }else{ ?>
								<a href="login" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART </span></a>
								<?php }?>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>400 DT</h6>
							<p>Akilia  Watch</p>
						</div>
					</div>
				<div class="product-item">
						<div class="pi-pic">
							<a href="product?param=6" >
						<img src="./img/product/6.jpg" alt=""></a>
							<div class="pi-links">
								<?php if ($isLoggedIn){ ?>
								<a href="addToCart.php?param=6" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART </span></a>
								<?php }else{ ?>
								<a href="login" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART </span></a>
								<?php }?>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>100 DT</h6>
							<p>Crystal Earrings </p>
						</div>
					</div>
			</div>
		</div>
	</section>
	<!-- latest product section end -->



		<!-- Product filter section -->
	<section class="product-filter-section">
		<div class="container">
			<div class="section-title">
				<h2>BROWSE TOP SELLING PRODUCTS</h2>
			</div>
			<ul class="product-filter-menu">
				<li><a href="cat.php#rings">RINGS</a></li>
				<li><a href="cat.php#necklaces">NECKLACES</a></li>
				<li><a href="cat.php#earrings"> EARRINGS</a></li>
				<li><a href="catA.php#bags">BAGS AND PURSES</a></li>
				<li><a href="cat.php#bracelets">BRACELETS</a></li>
				<li><a href="catA.php#watches">WATCHES</a></li>
				<li><a href="catA.php#tiaras">TIARAS</a></li>
			</ul>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<a href="product?param=5" >
						<img src="./img/product/5.jpg" alt=""></a>
							<div class="pi-links">
								<?php if ($isLoggedIn){ ?>
								<a href="addToCart.php?param=5" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART </span></a>
								<?php }else{ ?>
								<a href="login" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART </span></a>
								<?php }?>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>150 DT</h6>
							<p>Gold Earrings</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<div class="tag-sale">ON SALE</div>
							<a href="product?param=6" >
						<img src="./img/product/6.jpg" alt=""></a>
							<div class="pi-links">
								<?php if ($isLoggedIn){ ?>
								<a href="addToCart.php?param=6" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART </span></a>
								<?php }else{ ?>
								<a href="login" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART </span></a>
								<?php }?>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>100 DT</h6>
							<p>Crystal Earrings </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<a href="product?param=7" >
						<img src="./img/product/7.jpg" alt=""></a>
							<div class="pi-links">
								<?php if ($isLoggedIn){ ?>
								<a href="addToCart.php?param=7" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART </span></a>
								<?php }else{ ?>
								<a href="login" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART </span></a>
								<?php }?>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>500 DT</h6>
							<p>Gold Chain Necklace </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<a href="product?param=8" >
						<img src="./img/product/8.jpg" alt=""></a>
							<div class="pi-links">
								<?php if ($isLoggedIn){ ?>
								<a href="addToCart.php?param=8" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART </span></a>
								<?php }else{ ?>
								<a href="login" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART </span></a>
								<?php }?>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>250 DT</h6>
							<p>Vintage Choker Necklace </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<a href="product?param=9" >
						<img src="./img/product/9.jpg" alt=""></a>
							<div class="pi-links">
								<?php if ($isLoggedIn){ ?>
								<a href="addToCart.php?param=9" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART </span></a>
								<?php }else{ ?>
								<a href="login" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART </span></a>
								<?php }?>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>360 DT</h6>
							<p>Pearl Necklace</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<a href="product?param=10" >
						<img src="./img/product/10.jpg" alt=""></a>
							<div class="pi-links">
								<?php if ($isLoggedIn){ ?>
								<a href="addToCart.php?param=10" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART </span></a>
								<?php }else{ ?>
								<a href="login" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART </span></a>
								<?php }?>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>670 DT</h6>
							<p>Indian Style Necklace </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<a href="product?param=11" >
						<img src="./img/product/11.jpg" alt=""></a>
							<div class="pi-links">
								<?php if ($isLoggedIn){ ?>
								<a href="addToCart.php?param=11" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART </span></a>
								<?php }else{ ?>
								<a href="login" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART </span></a>
								<?php }?>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>400 DT</h6>
							<p>Steel Strap Watch</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<a href="product?param=12" >
						<img src="./img/product/12.jpg" alt=""></a>
							<div class="pi-links">
								<?php if ($isLoggedIn){ ?>
								<a href="addToCart.php?param=2" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART </span></a>
								<?php }else{ ?>
								<a href="login" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART </span></a>
								<?php }?>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>510 DT</h6>
							<p>Samsung Galaxy Watch</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Product filter section end -->


	<!-- Banner section -->
	<section class="banner-section">
		<div class="container">
			<div class="banner set-bg" data-setbg="img/banner-bg.jpg">
				<div class="tag-new">NEW</div>
				<span>New Arrivals</span>
				<h2>Gold Earrings</h2>
				<a href="product?param=5" class="site-btn">SHOP NOW</a>
			</div>
		</div>
	</section>
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
     
				echo "<a href='product.php?param=$ref' > "; ?>
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

	<!-- Banner section end  -->
<?php require 'footer.php';?>