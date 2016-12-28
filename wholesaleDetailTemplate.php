<?php
/*
    Template Name: Wholesale Detail Template 
*/
?>
<?php
    get_header("wholesaleheader");
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
            <div class="details1">
                <div>
                    <img src="<?php echo $image; ?>">
                </div>
                <h1>Available Colours</h1>
                <div class="availableColours">   
                    <?php foreach ($colors as $color) : ?>           
                        <div class="cols" style="background-color: <?php echo $color; ?>"></div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="details2">
                <h1><?php echo $post -> post_title; ?></h1>
                <p><?php echo $post -> post_content; ?></p>
               
                
                <h1>Available sizes</h1>
                <ul>
                    <?php foreach ($sizes as $size) : ?>
                        <li><?php echo $size; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
<?php 
    get_footer("wholesalefooter")
?>