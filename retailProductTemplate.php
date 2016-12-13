
<?php
/*
Template Name: RetailProductTemplate 
*/

?>
<?php
	get_header('retail');
?>
        <div class="bigImgProducts">
           
            
            <div class="captionProducts">
                <span> Welcome to our Cool T-shirt Collection</span>
                    
            </div>
           
        </div>
          
        <div class="over1B">
            <div class="itemsWrap">
		<?php 
    			$args = array( 'post_type' => 'tshirtdesign', 'posts_per_page' => 10 );
    			$query = new WP_Query( $args );
    			//var_dump($query);
    			foreach ($query->posts as $post) :

    			// $size = get_field( "product_size", $post->ID);
    			// $colours = get_field( "product_colour", $post->ID );
			$image = get_field( "image_url", $post->ID);
		?>
                <a href=" http://localhost/TShirtShop/retaildetail/?product_id=<?php echo $post->ID ?>"><div class="items">
                    <img src="<?php echo $image; ?>" style="max-width: 100%; max-height: 100%;">
		
                    </div></a>
		<h3><?php echo $post->post_title; ?></h3>
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
