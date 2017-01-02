<!DOCTYPE html>
<html>
    <head>
        <title><?php echo get_bloginfo("name") . " | " . get_the_title(); ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="navigate">
            <?php wp_nav_menu(array('theme_location'=>'retail')); ?>
        </div>
 