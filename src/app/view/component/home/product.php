    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top Sellers</h2>
                        <a href="" class="wid-view-more">View All</a>
                        <?php foreach ($_SESSION['list_product_1'] as $value) : ?>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="public/img/products/<?php echo $value['img']; ?>" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html"><?php echo $value['name']; ?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins><?php echo number_format($value['price_sale'], 0, ',', '.')."VNĐ"; ?></ins> 
                                <del><?php echo number_format($value['price'], 0, ',', '.')."VNĐ"; ?></del>
                            </div>                            
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top Sellers</h2>
                        <a href="" class="wid-view-more">View All</a>
                        <?php foreach ($_SESSION['list_product_2'] as $value) : ?>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="public/img/products/<?php echo $value['img']; ?>" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html"><?php echo $value['name']; ?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins><?php echo number_format($value['price_sale'], 0, ',', '.')."VNĐ"; ?></ins> 
                                <del><?php echo number_format($value['price'], 0, ',', '.')."VNĐ"; ?></del>
                            </div>                            
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top Sellers</h2>
                        <a href="" class="wid-view-more">View All</a>
                        <?php foreach ($_SESSION['list_product_3'] as $value) : ?>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="public/img/products/<?php echo $value['img']; ?>" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html"><?php echo $value['name']; ?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins><?php echo number_format($value['price_sale'], 0, ',', '.')."VNĐ"; ?></ins> 
                                <del><?php echo number_format($value['price'], 0, ',', '.')."VNĐ"; ?></del>
                            </div>                            
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End product widget area -->