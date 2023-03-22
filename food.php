<?php
/* Template Name: food */
  get_header();
?>
    <div class="tfc-sectionfood page">
      <div class="container">
      <?php custom_blog();?>
      </div>
    </div>
    <div class="tfc-foodblock">
      <div class="container">
    <?php custom_type();?>
    </div>
   </div>
   <div class="tfc-form">
     <div class="container">
      <?php search_form();?>
      </div>
  </div> 
  <div class="tfc-form1">
    <div class="container">
     <?php search_ajax();?>
    </div>
  </div>
  <div class="tfc-form2">
    <div class="container">
     <?php custom_code();?>
    </div>
    <?php
    $args = array(
      'post_type' => 'post',
      'category_name' => 'meals',
      'posts_per_page' => -1
    );

   $query = new WP_Query( $args );
   if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
        $query->the_post();?>
        <?php the_title();?>
        <?php the_content();?>
        <?php the_post_thumbnail();
    }
    } else {

    // No posts found
   }

   wp_reset_postdata();

   $categories = get_categories();
   if ( $categories ) {
    echo "<pre>";
    print_r($categories);
      echo '<ul>';
      foreach ( $categories as $category ) {
         echo '<li><a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a></li>';

      }
      echo '</ul>';
   }

  

   