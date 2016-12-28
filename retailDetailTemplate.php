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
            </div>
        </div>
    <?php
		get_footer('retailfooter');
	?> 

