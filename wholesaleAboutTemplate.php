<?php
/*
    Template Name: About Wholesale Template 
*/
?>
<?php
    get_header("wholesaleheader");

    $imagesUrl = get_template_directory_uri() . "/images/"; 
    $imageContactRetail = "";

    if (@getimagesize($imagesUrl . "contact-retail.jpg")) {
        $imageContactRetail = $imagesUrl . "contact-retail.jpg";
    }  
    else if (@getimagesize($imagesUrl . "contact-retail.png")) {
        $imageContactRetail = $imagesUrl . "contact-retail.png";
    }
    else {
        $imageContactRetail = $imagesUrl . "contact-retail-default.jpg";
    }
?>
    <div class="details">
        <?php if (have_posts()): 
            while (have_posts()): the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <p> 
                    <?php the_content(); ?>
                </p>
                <img src="<?php echo $imageContactRetail; ?>" />
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
<?php 
    get_footer("wholesalefooter")
?>