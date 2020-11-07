<?php require 'header.php';?>

	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>Your cart</h4>
			<div class="site-pagination">
				<a href="">Home</a> /
				<a href="">Your cart</a>
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- cart section end -->
	<section class="cart-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="cart-table">
						<h3>Your Cart</h3>
						<div class="cart-table-warp">
							<table>
							<thead>
								<tr>
									<th class="product-th">Product Name</th>
									<th class="quy-th">Quantity</th>
									<th class="total-th">Price</th>
									<th class="total-th"></th>
								</tr>
							</thead>
							<tbody>
								<?php   
										
										require_once "Auth.php";
										require_once "Util.php";

										$db_handle = new DBController();
										$auth = new Auth();

										require_once "authCookieSessionValidate.php";

										if($isLoggedIn){
											$total = 0;
											$data = array();
											$cart = $auth->getCartIdByMemberId($_SESSION["member_id"]);
											$cartId = $cart[0]["id_panier"];
											$items = $auth->getItemsByCartId($cartId);
											if(isset($items)){
											for($i=0;$i<count($items);$i++) {
												$item = $auth->getDesByItemId($items[$i]["reference"]);
												$index = $item[0]["reference"];
												$data[$index] = $item;
											}

											foreach ($data as $key => $value) {
													$total += $auth->getQuantity($cartId, $value[0]['reference'])*$value[0]['prix'];
												
											
											?>

								 
								<tr>
									<td class="product-col">
										<img src="<?php echo $value[0]['photo']; ?>" alt="">
										<div class="pc-title">
											<h4><?php echo $value[0]['designation']; ?></h4>
											<p><?php echo $value[0]['stock']; ?></p>
										</div>
									</td>
									<td class="quy-col">
										<div class="quantity">
					                        
												<p><?php echo $auth->getQuantity($cartId, $value[0]['reference']);?></p>
											
                    					</div>
									</td>
									
									<td class="total-col"><h4><?php echo $value[0]['prix']; ?>DT</h4></td>
									<td>
										<a href="deleteItem?ref=<?php echo $value[0]['reference'];?>&cart=<?php echo $cartId;?>">
											<button type="button" class="close" aria-label="Close">
  												<span aria-hidden="true">&times;</span>
											</button>
										</a>
									</td>
								</tr>


							<?php }} else{ ?>
								<?php }}?>


							</tbody>
						</table>
						</div>
						<div class="total-cost">
							<h6>Total <span><?php if($isLoggedIn){echo $total." DT";} ?></span></h6>
						</div>
					</div>
				</div>
				<div class="col-lg-4 card-right">
					<form class="promo-code-form">
						<input type="text" placeholder="Enter promo code">
						<button>Submit</button>
					</form>
					<a href="checkout" class="site-btn">Proceed to checkout</a>
					<a href="index" class="site-btn sb-dark">Continue shopping</a>
				</div>
			</div>
		</div>
	</section>
	<!-- cart section end -->

	<!-- Related product section -->
	<section class="related-product-section">
		<div class="container">
			<div class="section-title text-uppercase">
				<h2>Continue Shopping</h2>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<div class="tag-new">New</div>
							<img src="./img/product/2.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Black and White Stripes Dress</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="./img/product/5.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="./img/product/9.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="./img/product/1.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Related product section end -->



<?php require 'footer.php';?>