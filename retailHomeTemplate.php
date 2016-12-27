<?php
/*
    Template Name: Retail Home Template 
*/
?>

<?php
	get_header('retailhome');
    
    $imagesUrl = get_template_directory_uri() . "/images/"; 
    $imageRetailLogo = "";
    $imageRetailParallax1 = "";
    $imageRetailParallax2 = "";
    $imageRetailParallax3 = "";

    if (@getimagesize($imagesUrl . "retail-home-logo.jpg")) {
        $imageRetailLogo = $imagesUrl . "retail-home-logo.jpg";
    }  
    else if (@getimagesize($imagesUrl . "retail-home-logo.png")) {
        $imageRetailLogo = $imagesUrl . "retail-home-logo.png";
    }
    else {
        $imageRetailLogo = $imagesUrl . "retail-home-logo-default.jpg";
    }

    if (@getimagesize($imagesUrl . "retail-parallax-1.jpg")) {
        $imageRetailParallax1 = $imagesUrl . "retail-parallax-1.jpg";
    }  
    else if (@getimagesize($imagesUrl . "retail-parallax-1.png")) {
        $imageRetailParallax1 = $imagesUrl . "retail-parallax-1.png";
    }
    else {
        $imageRetailParallax1 = $imagesUrl . "retail-parallax-1-default.jpg";
    }

    if (@getimagesize($imagesUrl . "retail-parallax-2.jpg")) {
        $imageRetailParallax2 = $imagesUrl . "retail-parallax-2.jpg";
    }  
    else if (@getimagesize($imagesUrl . "retail-parallax-2.png")) {
        $imageRetailParallax2 = $imagesUrl . "retail-parallax-2.png";
    }
    else {
        $imageRetailParallax2 = $imagesUrl . "retail-parallax-2-default.jpg";
    }

    if (@getimagesize($imagesUrl . "retail-parallax-3.jpg")) {
        $imageRetailParallax3 = $imagesUrl . "retail-parallax-3.jpg";
    }  
    else if (@getimagesize($imagesUrl . "retail-parallax-3.png")) {
        $imageRetailParallax3 = $imagesUrl . "retail-parallax-3.png";
    }
    else {
        $imageRetailParallax3 = $imagesUrl . "retail-parallax-3-default.jpg";
    }
?>
    <body class="bdy">
        <div class="bigImg1" style="background-image: url('<?php echo $imageRetailParallax1; ?>');">
            <div class="logo">
                <span><img src="<?php echo $imageRetailLogo; ?>"></span>
                    
            </div>
        </div>
        
        <div class="over1">
            <?php if (have_posts()): 
                while (have_posts()): the_post(); ?>

                <div class="over1Left">
                    <h1><?php the_title(); ?></h1>
                </div>
                <div class="over1Right">
                    <p> 
                        <?php the_content(); ?>
                    </p>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        
        <div class="bigImg2" style="background-image: url('<?php echo $imageRetailParallax2; ?>');">
            <div class="caption">
                <span> Keep on Scrolling </span>
                    
            </div>
        </div>
        <div class="over2">
            <div class="products">
                <a href="http://localhost/TShirtShop/retailproducts/">
                   <img src="http://localhost/TShirtShop/wp-content/uploads/2016/12/Penguins.jpg"> 
                </a>
                <h3>T-shirts</h3>
                    
            </div>
            <div class="products">
                <img src="http://localhost/TShirtShop/wp-content/uploads/2016/12/Penguins.jpg">
                <h3>Bags</h3>
            </div>
            <div class="products">
                <img src="http://localhost/TShirtShop/wp-content/uploads/2016/12/Penguins.jpg">
                <h3>Sweat shirts</h3>
            </div>
        </div>
        <div class="bigImg3" style="background-image: url('<?php echo $imageRetailParallax3; ?>');">
            <div class="caption">
                <span> Keep on Scrolling </span>
                    
            </div>
        </div>
        <?php
		get_footer('retailfooter');
	?>
