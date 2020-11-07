<?php include 'header.php'?>


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


	<!-- checkout section  -->
	<section class="checkout-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 order-2 order-lg-1">
					<form class="checkout-form">
						<div class="cf-title">Billing Address</div>
						<div class="row">
							<div class="col-md-7">
								<p>*Billing Information</p>
							</div>
							<div class="col-md-5">
								<div class="cf-radio-btns address-rb">
									<div class="cfr-item">
										<input type="radio" name="pm" id="one">
										<label for="one">Use my regular address</label>
									</div>
									<div class="cfr-item">
										<input type="radio" name="pm" id="two">
										<label for="two">Use a different address</label>
									</div>
								</div>
							</div>
						</div>
						<div class="row address-inputs">
							<div class="col-md-12">
								<input type="text" placeholder="Address">
								<input type="text" placeholder="Address line 2">
								<input type="text" placeholder="Country">
							</div>
							<div class="col-md-6">
								<input type="text" placeholder="Zip code">
							</div>
							<div class="col-md-6">
								<input type="text" placeholder="Phone no.">
							</div>
						</div>
						<div class="cf-title">Delievery Info</div>
						<div class="row shipping-btns">
							<div class="col-6">
								<h4>Standard</h4>
							</div>
							<div class="col-6">
								<div class="cf-radio-btns">
									<div class="cfr-item">
										<input type="radio" name="shipping" id="ship-1">
										<label for="ship-1">Free</label>
									</div>
								</div>
							</div>
							<div class="col-6">
								<h4>Next day delievery  </h4>
							</div>
							<div class="col-6">
								<div class="cf-radio-btns">
									<div class="cfr-item">
										<input type="radio" name="shipping" id="ship-2">
										<label for="ship-2">$3.45</label>
									</div>
								</div>
							</div>
						</div>
						<div class="cf-title">Payment</div>
						<ul class="payment-list">
							<li>Paypal<a href="#"><img src="img/paypal.png" alt=""></a></li>
							<li>Credit / Debit card<a href="#"><img src="img/mastercart.png" alt=""></a></li>
							<li>Pay when you get the package</li>
						</ul>
						<button class="site-btn submit-order-btn">Place Order</button>
					</form>
				</div>
				<div class="col-lg-4 order-1 order-lg-2">
						
		
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
			</div>
		</div>
	</section>
	<!-- checkout section end -->
<?php include 'footer.php'?>