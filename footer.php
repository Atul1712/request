<?php
/*
 * Contains footer
 */
?>  <div class="footer">
      <div class="footer-menu">
        <div class="footer-logo">
           <?php dynamic_sidebar( 'content-widget-footer' ); ?> 
        </div>
        <div class="tfc_footer_menu">
             <?php wp_nav_menu( array( 'theme_location' => 'extra-menu' ) );?>
        </div>
        <div class="tfc_socialicon">
           <?php dynamic_sidebar('content-widget-social-icon');?>
        </div>
      </div>  
    </div>
</div>
</div>
</body>
</html>
