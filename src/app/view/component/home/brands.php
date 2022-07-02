<div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <div class="brand-list">
                            <?php foreach ($_SESSION['list_brands'] as $value) : ?>
                                <div class="brand_img" style="width: 300px; height: 70px; text-align:center">
                                    <img src="public/img/brands/<?php echo $value['link'] ?>" alt="" style="height: 35px; width:auto;">     
                                </div>
                            <?php endforeach; ?>                   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->