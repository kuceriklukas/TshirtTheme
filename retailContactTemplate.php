<?php
/*
    Template Name: Contact Retail Template 
*/
?>
<?php
    get_header("retail");
?>
    <div class="container detailWrap">
        <div class="detail-contact">
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