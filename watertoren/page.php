<?php get_header(); ?>



</br>
        <?php
        echo "<div class='container'  ><div class='row'>";
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post();
              //  echo "<li><h1>".get_the_title()."</h1>";

                $args=array(
                        'orderby' => 'menu_order',
                        'order' => 'ASC',
                        'posts_per_page' => -1,
                        'post_type' => get_post_type( $post->ID ),
                        'post_parent' => $post->ID
                );

                $childpages = new WP_Query($args);

                if($childpages->post_count > 0) { /* display the children content  */
                  //  echo "<div class='col-lg-4 '>";
                    while ($childpages->have_posts()) {
                         $childpages->the_post();
                         ?><div class='dof col-md-6 col-lg-3'><div class='jumbotron' style='background-image: url(<?php the_post_thumbnail_url() ?>)'> <?php echo "<div class='in text-center'><p>".get_the_content()."</p></div></div></div>";
                    }
                  //  echo "</div>";
                }
                wp_reset_query();

              //  echo "";
            }
        }

?>

      </div>
</div>
    </div>
<?php get_footer(); ?>
