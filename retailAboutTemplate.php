<?php
/*
    Template Name: About Retail Template 
*/
?>
<?php
    get_header("retail");

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
    <div class="container detailWrap">
        <div class="detailLeft">
            <img src="<?php echo $imageContactRetail; ?>" />
        </div>
        <div class="detailRight">
             <?php if (have_posts()): 
                while (have_posts()): the_post(); ?>
                    <h1><?php the_title(); ?></h1>
                    <p> 
                        <?php the_content(); ?>
                    </p>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
<?php
    get_footer("retailfooter")
?>