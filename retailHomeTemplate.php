<?php
/*
Template Name: RetailHomeTemplate 
*/
?>

<?php
	get_header('retailhome');
?>
    <body class="bdy">
        <div class="bigImg1">
            <div class="logo">
                <span><img src="http://localhost/TShirtShop/wp-content/uploads/2016/12/Penguins.jpg"></span>
                    
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
        
        <div class="bigImg2">
            <div class="caption">
                <span> Keep on Scrolling </span>
                    
            </div>
        </div>
        <div class="over2">
            <div class="products">
                <a href="http://localhost/TShirtShop/retailproducts/">
                   <img src="http://localhost/TShirtShop/wp-content/uploads/2016/12/Penguins.jpg"> 
                </a>
                <h3>TITLE</h3>
                    
            </div>
            <div class="products">
                <img src="http://localhost/TShirtShop/wp-content/uploads/2016/12/Penguins.jpg">
                <h3>TITLE</h3>
            </div>
            <div class="products">
                <img src="http://localhost/TShirtShop/wp-content/uploads/2016/12/Penguins.jpg">
                <h3>TITLE</h3>
            </div>
            
        </div>
        <div class="bigImg3">
            <div class="caption">
                <span> Keep on Scrolling </span>
                    
            </div>
        </div>
        <?php
		get_footer('retailfooter');
	?>
