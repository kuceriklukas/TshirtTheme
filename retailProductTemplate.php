
<?php
/*
Template Name: RetailProductTemplate 
*/

?>
<?php
	get_header('retail');

    if (have_posts()): 
        while (have_posts()): the_post(); ?>
            <div class="bigImgProducts">
            
                
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
    
        
        <div class="bigImgProducts">
           
            
            
           
        </div>
        <div class="over2">
              <div class="caption">
                <span> Hope you like</span>
                    
            </div>  
            </div> 
        <div class="bigImgProducts">
           
            
            
           
        </div>
        
       <?php
		get_footer('retailfooter');
	?>
