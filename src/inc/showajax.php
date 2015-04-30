<?php 

function shows_callback() {
  global $wpdb;

  $field = $_POST["field"];
 
  while ( have_posts() ) : the_post();

  $thefield = get_field($field, false, true);

  echo $thefield;

  endwhile;
  wp_rest_query();

  die(1);
  wp_reset_postdata();
}
    

?>