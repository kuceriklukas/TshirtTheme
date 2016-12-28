
<?php
/*
    Template Name: Retail Product Template 
*/

?>
<?php
	get_header('retail');

    $pageArgs = array(
        'post_type' => 'page',
        'posts_per_page' => 1,
        'meta_query' => array(
            array(
                'key' => '_wp_page_template',
                'value' => 'retailDetailTemplate.php'
            )
        )
    );
    $detailsPage = new WP_Query($pageArgs);
    $urlString = "";
    if (count($detailsPage->posts) == 1) {
        $detailsPageName = $detailsPage->posts[0]->post_name;
        $urlArray = explode('/', get_page_link());
        //$urlArray = array_filter($urlArray); 
        array_pop($urlArray);
        $urlString = implode('/',$urlArray).'/';
        $urlString = $urlString . $detailsPageName;
    }

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
        <div class="over1B">
            <div class="itemsWrap">
                <?php 
                    the_content();
                    endwhile;
                    endif;

                    $args = array( 'post_type' => 'tshirtdesign', 'posts_per_page' => 10 );
                    $query = new WP_Query( $args );
                    foreach ($query->posts as $post) :

                    $image = get_field( "image_url", $post->ID);
                ?>
                <div class="item-wrapper">
                    <?php 
                        $detailsPageLink = "";
                        if ($urlString != "") {
                            $detailsPageLink = $urlString . '?product_id=' . $post->ID;
                        } 
                    ?>
                    <a href="<?php echo $detailsPageLink; ?>">
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
