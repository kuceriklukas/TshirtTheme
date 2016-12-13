<?php
/*
Template Name: RetailDetail Template 
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
            <div class="detailLeft" style="background-repeat: no-repeat; background-size: contain; background-image: url('<?php echo $image; ?>');">
                <!-- a html commend just for fun, let's get rid of it later -->
            </div>
            <div class="detailRight">
                <div><?php echo $post->post_title; ?></div>
                <div><p><?php echo $post->post_content; ?></p></div>
                <div><?php echo $price; ?></div>
                <!--<div class="btn-group" role="group" aria-label="..." id="navBtns">
                    <a href="index.html" class="btn btn-default btn-lg" role="button">XS</a>
                    <a href="shop2.html" class="btn btn-default btn-lg" role="button">S</a>
                    <a href="shop2.html" class="btn btn-default btn-lg" role="button">M</a>
                    <a href="shop2.html" class="btn btn-default btn-lg" role="button">L</a>
                    <a href="shop2.html" class="btn btn-default btn-lg" role="button">XL</a>
                </div>-->
                <select>
                    <?php foreach ($sizes as $size) : ?>
                        <option value="<?php echo $size; ?>"><?php echo $size; ?></option>
                    <?php endforeach; ?>
                </select>
                <h3>Colours</h3>
                <div class="colours">
                    <!--<a href="#"><div class="itemColour" id="white">1</div></a>
                    <a href="#"><div class="itemColour" id="grey">2</div></a>
                    <a href="#"><div class="itemColour" id="charcoal">3</div></a>
                    <a href="#"><div class="itemColour" id="blue">4</div></a>
                    <a href="#"><div class="itemColour" id="green">5</div></a>
                    <a href="#"><div class="itemColour" id="orange">5</div></a>-->
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

