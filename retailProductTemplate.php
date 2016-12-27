
<?php
/*
Template Name: RetailProductTemplate 
*/

?>
<?php
	get_header('retail');

    $imagesUrl = get_template_directory_uri() . "/images/"; 
    $imageRetailParallax1 = "";
    $imageRetailParallax2 = "";
    $imageRetailParallax3 = "";

    if (@getimagesize($imagesUrl . "retail-parallax-1.jpg")) {
        $imageRetailParallax1 = $imagesUrl . "retail-parallax-1.jpg";
    }  
    else if (@getimagesize($imagesUrl . "retail-parallax-1.png")) {
        $imageRetailParallax1 = $imagesUrl . "retail-parallax-1.png";
    }
    else {
        $imageRetailParallax1 = $imagesUrl . "retail-parallax-1-default.jpg";
    }

    if (@getimagesize($imagesUrl . "retail-parallax-2.jpg")) {
        $imageRetailParallax2 = $imagesUrl . "retail-parallax-2.jpg";
    }  
    else if (@getimagesize($imagesUrl . "retail-parallax-2.png")) {
        $imageRetailParallax2 = $imagesUrl . "retail-parallax-2.png";
    }
    else {
        $imageRetailParallax2 = $imagesUrl . "retail-parallax-2-default.jpg";
    }

    if (@getimagesize($imagesUrl . "retail-parallax-3.jpg")) {
        $imageRetailParallax3 = $imagesUrl . "retail-parallax-3.jpg";
    }  
    else if (@getimagesize($imagesUrl . "retail-parallax-3.png")) {
        $imageRetailParallax3 = $imagesUrl . "retail-parallax-3.png";
    }
    else {
        $imageRetailParallax3 = $imagesUrl . "retail-parallax-3-default.jpg";
    }


    if (have_posts()): 
        while (have_posts()): the_post(); ?>
            <div class="bigImgProducts" style="background-image: url('<?php echo $imageRetailParallax1; ?>');">
            
                
                <div class="captionProducts">
                    <span><?php the_title(); ?></span>                
                </div>
            
            </div>
        <?php endwhile; ?>
    <?php endif; ?>      

        <div class="over1B">
            <div class="itemsWrap">
                <?php 
                    $args = array( 'post_type' => 'tshirtdesign', 'posts_per_page' => 10 );
                    $query = new WP_Query( $args );
                    //var_dump($query);
                    foreach ($query->posts as $post) :

                    $image = get_field( "image_url", $post->ID);
                ?>
                <div class="item-wrapper">
                    <a href=" http://localhost/TShirtShop/retaildetail/?product_id=<?php echo $post->ID ?>">
                        <div class="items">
                            <img src="<?php echo $image; ?>">
                        </div>
                    </a>
            
                    <h3><?php echo $post->post_title; ?></h3>   
                </div>
                <?php endforeach; ?>
            </div>   
        </div>
    
        
        <div class="bigImgProducts" style="background-image: url('<?php echo $imageRetailParallax2; ?>');">
           
            
            
           
        </div>
        <div class="over2">
              <div class="caption">
                <span> Hope you like</span>
                    
            </div>  
            </div> 
        <div class="bigImgProducts" style="background-image: url('<?php echo $imageRetailParallax3; ?>');">
           
            
            
           
        </div>
        
       <?php
		get_footer('retailfooter');
	?>
