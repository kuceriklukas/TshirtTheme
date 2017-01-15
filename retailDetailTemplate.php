<?php
/*
    Template Name: Retail Detail Template 
*/

?>
<?php
	get_header('retail');
?>
<?php
	$queryString = $_SERVER['QUERY_STRING'];
	$array = explode('=', $queryString);
	$id = $array[1];

    $currentUrl = "//".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $currentUrl = esc_url(remove_query_arg('product_id'));
	
	$image = get_field( "image_url", $id );
	$price = get_field( "price", $id );
    $sizes = get_field( "size", $id );
    $colors = get_field( "colour", $id );
	$post = get_post($id);
?>
        <div class="container detailWrap">
            <div class="detailLeft">
                <img src="<?php echo $image; ?>" />
            </div>
            <div class="detailRight">
                <h2><?php echo $post->post_title; ?></h2>
                <div><p><?php echo $post->post_content; ?></p></div>
                <p>Price: <?php echo $price; ?></p>
                <p>
                Size:
                    <select> 
                        <?php foreach ($sizes as $size) : ?>
                            <option value="<?php echo $size; ?>"><?php echo $size; ?></option>
                        <?php endforeach; ?>
                    </select>
                </p>
                <h3>Colours</h3>
                <div class="colours">
                    <?php foreach ($colors as $color) : ?> 
                        <a href="#"><div class="itemColour" id="<?php echo $color; ?>" style="background-color: <?php echo $color; ?>;"></div></a>
                    <?php endforeach; ?>
                </div>
                <button type="button" class="btn btn-default btn-lg" id="buyBtn">BUY</button>
                <h3>You may also like</h3>
                <div class="you-may-like">
                    <?php
                        $myposts = get_posts( 'post_type=tshirtdesign&numberposts=3&orderby=rand' );
                        foreach( $myposts as $post ) : setup_postdata($post); 
                            $image = get_field( "image_url", $post->ID);                                
                    ?>
                            <div class="item-wrapper item-wrapper-details">
                                <a href="<?php echo $currentUrl . "?product_id=" . $post->ID; ?>">
                                    <div class="items">
                                        <img src="<?php echo $image; ?>">
                                    </div>
                                </a>
                                <h3><?php the_title(); ?></h3>
                            </div>

                        <?php endforeach; ?>              
                </div>
            </div>
        </div>
    <?php
		get_footer('retailfooter');
	?> 

