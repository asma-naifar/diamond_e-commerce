<?php require 'header.php';?>
    <!-- Header section end -->
<?php if(!isset($GET_['search']) and empty($_GET['search'])){?>


    <!-- Page info -->
    <div class="page-top-info">
        <div class="container">
            <h4></h4>
            <div class="site-pagination">
                <a href="index.html"><Strong>Home</Strong></a> <br><br><br>
            </div>
        </div>
    
    <!-- Page info end -->
  
  
  <!--================Login Box Area =================-->
  <form action="http://localhost/Diamond/profil.php" method="post">
        <fieldset>
    <section class="login_box_area section-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login_box_img">
                        <div class="hover">
                            <h4>Admin Login in</h4>
                            <p></p>
                            <a class="button button-account" href="login.php">Login Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login_form_inner register_form_inner">
                        <h3>ADMIN </h3>
                        <form class="row login_form" action="#/" id="register_form" >
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Admin Name'">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'">
              </div>
              <div class="col-md-12 form-group">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
              </div>
                            <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <input type="checkbox" id="f-option2" name="selector">
                                    <label for="f-option2">Keep me logged in</label>
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" value="submit" class="button button-register w-100">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</fieldset>
</form>
</div>
    <!--================Session area  =================-->
    
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




  <!--================ Start footer Area  =================-->  
    <!-- Footer section -->
    <?php require 'footer.php';?>