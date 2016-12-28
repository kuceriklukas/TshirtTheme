<?php
/*
    Template Name: Wholesale Home Template 
*/
?>

<?php 
    get_header("wholesaleheader");

    $pageArgs = array(
        'post_type' => 'page',
        'posts_per_page' => 1,
        'meta_query' => array(
            array(
                'key' => '_wp_page_template',
                'value' => 'wholesaleDetailTemplate.php'
            )
        )
    );
    $detailsPage = new WP_Query($pageArgs);
    $urlString = "";
    if (count($detailsPage->posts) == 1) {
        $detailsPageName = $detailsPage->posts[0]->post_name;
        $urlArray = explode('/', get_page_link());
        //$urlArray = array_filter($urlArray); 
        array_pop($urlArray);
        $urlString = implode('/',$urlArray).'/';
        $urlString = $urlString . $detailsPageName;
    }
?>

                <div class="body">
                    <div class="infoimg">
                        <?php
                            $imagesUrl = get_template_directory_uri() . "/images/"; 
                            $imageWholesaleHome = "";

                            if (@getimagesize($imagesUrl . "wholesale-home.jpg")) {
                                $imageWholesaleHome = $imagesUrl . "wholesale-home.jpg";
                            }  
                            else if (@getimagesize($imagesUrl . "wholesale-home.png")) {
                                $imageWholesaleHome = $imagesUrl . "wholesale-home.png";
                            }
                            else {
                                $imageWholesaleHome = $imagesUrl . "wholesale-home-default.jpg";
                            }

                        ?>
                        <img src="<?php echo $imageWholesaleHome; ?>">
                    </div>
                    <div class="description">
                        <?php if (have_posts()): 
                            while (have_posts()): the_post(); ?>
                                <h1><?php the_title(); ?></h1>
                                <p><?php the_content(); ?></p>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <?php
                        $args = array( 'post_type' => 'tshirtdesign', 'posts_per_page' => 10 );
                        $query = new WP_Query( $args );
                        foreach ($query->posts as $post) :

                        $image = get_field( "image_url", $post->ID);
                    ?>
                        <div class="items">
                            <?php 
                                $detailsPageLink = "";
                                if ($urlString != "") {
                                    $detailsPageLink = $urlString . '?product_id=' . $post->ID;
                                } 
                            ?>

                            <a href="<?php echo $detailsPageLink; ?>">
                                <div class="itemsPhoto">
                                    <img src="<?php echo $image; ?>">
                                </div>
                                <div class="itemsDescription">
                                    <h2><?php echo $post -> post_title; ?></h2>
                                    <p>
                                        <?php
                                            if (strlen($post -> post_content) > 120) {
                                                echo substr($post -> post_content, 0, 120) . "...";
                                            }
                                            else {
                                                echo $post -> post_content;
                                            }
                                        ?>
                                    </p>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
                
            </div>
<?php 
    get_footer("wholesalefooter");
?>