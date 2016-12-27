<?php
/*
    Template Name: Contact Wholesale Template 
*/
?>
<?php
    get_header("wholesaleheader");
?>
    <div class="details">
        <?php if (have_posts()): 
            while (have_posts()): the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <p> 
                    <?php the_content(); ?>
                </p>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
<?php 
    get_footer("wholesalefooter")
?>