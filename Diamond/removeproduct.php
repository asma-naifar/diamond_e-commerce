<?php require 'headerAdmin.php';?>
    <!-- Header section end -->


    <!-- Page info -->
    <div class="page-top-info">
        <div class="container">
            <h4>Remove Product</h4>
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
                    
    <div class="col-md-9">
                                <div class="nav-tabs-custom">
                                    <form action="removeproductbase.php" method="_POST">
                                    <ul class="nav nav-tabs">

                                        <li><a href="#settings" data-toggle="tab">Remove Product</a></li></br>
                                    </ul>


                                    <div class="tab-pane" id="settings">
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <label for="inputName" class="col-sm-2 control-label">reference</label>

                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="reference" placeholder="reference">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <input type="submit" class="btn btn-danger" name="Submit" value="Submit">
                                            
                                                </div>
                                            </div>
                                        </form>
                                        
                                    </div>
                                    <!-- /.tab-pane -->
                                </div>
        </div>

    </section>
 
    <!-- Category section end -->

    <!-- Footer section -->
    <?php require 'footer.php';?>