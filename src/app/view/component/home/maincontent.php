<div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Latest Products</h2>
                        <div class="product-carousel">
                            <?php foreach ($_SESSION['list_product'] as $value) : ?>
                            <div class="single-product">
                                <div class="product-f-image" style="height:270px; text-align:center;">
                                    <img src="public/img/products/<?php echo $value['img']; ?>" alt="" style="height:240px; width: auto;">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="#" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href="single-product.html"><?php echo $value['name']; ?></a></h2>
                                
                                <div class="product-carousel-price">
                                    <ins><?php echo number_format($value['price_sale'], 0, ',', '.')."VNĐ"; ?></ins> 
                                    <del><?php echo number_format($value['price'], 0, ',', '.')."VNĐ"; ?></del>
                                </div> 
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->