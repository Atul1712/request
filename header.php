<!DOCTYPE html>
<html lang="en">
<head>
<title>wordpress</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <?php 
    wp_head();
    ?>
</head>
<body>
         <div class="main">
            <div class="container">
              <header>
                    <div class="tfc-logo">
                        <?php dynamic_sidebar( 'after-content-widget-area' ); ?> 
                    </div>
                    <div class="tfc-menu">
                    <?php wp_nav_menu( array( 'theme_location' => 'my-custom-menu' ) );?>
                    </div>
              </header>
              <div class="clear"></div>
            </div>

                 

