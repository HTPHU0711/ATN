<?php
include_once("connection.php");
?>
   <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-left">
                <img src="images/b6.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> ATN Shop</strong></h1>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/b7.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> ATN Shop</strong></h1>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-right">
                <img src="images/b8.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> ATN Shop</strong></h1>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->
    <!-- Start Products  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Products</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">All Products</button>
                        </div>
                    </div>
                </div>
            </div>
          
            <div class="row special-list">
            <?php 
            $sq = pg_query($Connect,"select * from product");
            while($row=pg_fetch_array($sq)){
            ?>
                <?php
            }
            ?> 
            </div>
            
        </div>
    </div>
    <!-- End Products  -->