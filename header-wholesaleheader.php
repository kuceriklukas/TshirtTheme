<html>
    <head>
        <title><?php echo get_bloginfo("name") . " | " . get_the_title(); ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(); ?>
    </head>
    <body>
        
            
            <div class="bodyWrap">
                
                <div class="header">
                    <?php
                        $pageTemplate = basename(get_page_template());
                        $urlString = "";
                        if ($pageTemplate == "wholesaleHomeTemplate.php") {
                            $urlString = get_page_link();
                        }
                        else {
                            $pageArgs = array(
                                'post_type' => 'page',
                                'posts_per_page' => 1,
                                'meta_query' => array(
                                    array(
                                        'key' => '_wp_page_template',
                                        'value' => 'wholesaleHomeTemplate.php'
                                    )
                                )
                            );
                            $detailsPage = new WP_Query($pageArgs);
                            $urlString = "";
                            if (count($detailsPage->posts) == 1) {
                                $detailsPageName = $detailsPage->posts[0]->post_name;
                                $urlArray = explode('/', get_page_link());
                                //$urlArray = array_filter($urlArray); 
                                if (end($urlArray) == "") {
                                    array_pop($urlArray);
                                }
                                array_pop($urlArray);
                                $urlString = implode('/',$urlArray).'/';
                                $urlString = $urlString . $detailsPageName;
                            }
                        }
                        
                        

                        $imagesUrl = get_template_directory_uri() . "/images/"; 
                        $imageWholesaleLogo = "";

                        if (@getimagesize($imagesUrl . "wholesale-logo.jpg")) {
                            $imageWholesaleLogo = $imagesUrl . "wholesale-logo.jpg";
                        }  
                        else if (@getimagesize($imagesUrl . "wholesale-logo.png")) {
                            $imageWholesaleLogo = $imagesUrl . "wholesale-logo.png";
                        }
                        else {
                            $imageWholesaleLogo = $imagesUrl . "wholesale-logo-default.jpg";
                        }

                    ?>
                    <img src="<?php echo $imageWholesaleLogo; ?>"> 
                    <?php wp_nav_menu(array('theme_location'=>'wholesale')); ?>

                    <p>Filters:</p>
                    <ul>
                    <?php 
                        $categories = get_categories();

                        foreach ($categories as $category) :
                        if ($category->slug == "uncategorised") {
                            continue;
                        }  
                    ?>
                    <li>
                        <a href="<?php echo $urlString . '?category=' . $category->cat_ID; ?>"><?php echo $category->name; ?></a>
                    </li>
                    <?php endforeach; ?>
                    </ul>
                </div>
