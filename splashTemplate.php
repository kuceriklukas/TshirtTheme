<?php
/*
Template Name: Splash Template 
*/

?>
<?php
	get_header('retailhome');
?>


    <body class="splashBody">
        
        <div class="splashIt">
            <!-- TODO these links, if use hasn't created them, and so on -->
            <!--<a href="http://localhost/TShirtShop/retailhome/"></a>
            <a href="http://localhost/shirtshop/retailhome/"></a>-->
            <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
            
         </div>


	<?php
		get_footer('retailnofooter');
	?>

