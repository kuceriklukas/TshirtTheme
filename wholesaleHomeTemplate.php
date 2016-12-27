<?php
/*
Template Name: Wholesale Home Template 
*/
?>

<?php 
    get_header("wholesaleheader");
?>

                <div class="body">
                    <div class="infoimg">
                        <?php
                            $imagesUrl = get_template_directory_uri() . "/images/"; 
                            $imageWholesaleHome = "";

                            if (@getimagesize($imagesUrl . "wholesale-home.jpg")) {
                                $imageWholesaleHome = $imagesUrl . "wholesale-home.jpg";
                            }  
                            else if (@getimagesize($imagesUrl . "wholesale-home.png")) {
                                $imageWholesaleHome = $imagesUrl . "wholesale-home.png";
                            }
                            else {
                                $imageWholesaleHome = $imagesUrl . "wholesale-home-default.jpg";
                            }

                        ?>
                        <img src="<?php echo $imageWholesaleHome; ?>">
                    </div>
                    <div class="items" id="ts">
                        <div class="itemsPhoto">
                             <img src="http://localhost/TShirtShop/wp-content/uploads/2016/12/list.jpg">
                        </div>
                        <div class="itemsDescription">
                            <h1>Tshirts</h1>
                            <p>Many in all sizes and all colours</p>
                        </div>
                    </div>
                    <div class="items" id="hats">
                        <div class="itemsPhoto">
                             <img src="http://localhost/TShirtShop/wp-content/uploads/2016/12/list.jpg">
                        </div>
                        <div class="itemsDescription">
                            <h1>Tshirts</h1>
                            <p>Many in all sizes and all colours</p>
                        </div>
                    </div>
                    <div class="items" id="sweats">
                        <div class="itemsPhoto">
                             <img src="http://localhost/TShirtShop/wp-content/uploads/2016/12/list.jpg">
                        </div>
                        <div class="itemsDescription">
                            <h1>Tshirts</h1>
                            <p>Many in all sizes and all colours</p>
                        </div>
                    </div>
                    <div class="items" id="others">
                        <div class="itemsPhoto">
                             <img src="http://localhost/TShirtShop/wp-content/uploads/2016/12/list.jpg">
                        </div>
                        <div class="itemsDescription">
                            <h1>Tshirts</h1>
                            <p>Many in all sizes and all colours</p>
                        </div>
                    </div>
                </div>
                
            </div>
<?php 
    get_footer("wholesalefooter");
?>