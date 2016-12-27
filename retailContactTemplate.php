<?php
/*
    Template Name: Contact Retail Template 
*/
?>
<?php
    get_header("retail");
?>
    <div class="container detailWrap">
        <div class="detailLeft">
            <h1>The map</h1>
            <p>Ueeeeej the map will be hereee</p>
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