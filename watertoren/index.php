<?php get_header(); ?>

      <br/>
    <div class="container">
      <div class="row">
              <?php
        echo "<div class='col-sm-6 links'  ><div id='rit' class='row'>";
        

                $args=array(
                        'orderby' => 'menu_order',
                        'order' => 'ASC',
                        'posts_per_page' => -1,
                        'post_type' => 'page',
                        'post_parent' => '19'
                );

                $childpages = new WP_Query($args);

                if($childpages->post_count > 0) { /* display the children content  */
                  //  echo "<div class='col-lg-4 '>";
                    while ($childpages->have_posts()) {
                         $childpages->the_post();
                        ?><div class='ding col-lg-6 '><div class='jumbotron' style='background-image: url(<?php the_post_thumbnail_url() ?>)'> <?php echo "<div class='in text-center'><p>".get_the_content()."</p></div></div></div>";
                    }
                  //  echo "</div>";
                }

                wp_reset_postdata();

              //  echo "";
        

      ?>
</div>
</div>


        <?php
        echo "<div class='col-sm-6 rechts'  ><div class='row'>";
       

                $args=array(
                        'orderby' => 'menu_order',
                        'order' => 'ASC',
                        'posts_per_page' => -1,
                        'post_type' => 'page',
                        'post_parent' => '17'
                );






                $childpages = new WP_Query($args);

                if($childpages->post_count > 0) { /* display the children content  */
                  //  echo "<div class='col-lg-4 '>";
                    while ($childpages->have_posts()) {
                         $childpages->the_post();
                        ?><div class='dang col-lg-6 '><div class='jumbotron' style='background-image: url(<?php the_post_thumbnail_url() ?>)'> <?php echo "<div class='in text-center'>".get_the_content()."</div></div></div>";
                    }
                  //  echo "</div>";
                }
                                wp_reset_postdata();

              //  echo "";
        
?>

      </div>
</div>
    </div>
  </div>
<?php get_footer(); ?>
