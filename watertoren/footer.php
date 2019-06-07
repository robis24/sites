<?php wp_footer(); ?>



<footer class="footer">
      <div class="container">
<br/>
<div class='row'>
  <div class='col-sm-6'>
<div class="jumbotron oste">
<div class="in text-center">
<div class="row">
<div class="col-2" style="        transform: rotate(180deg);
    line-height: 1;
    writing-mode: vertical-lr;
    font-family: 'sifonn_basic', Arial, sans-serif;
    font-size: 4vw;
    border-left: 5px double black;

">
De Watertoren
</div>

<div class="col-10">
<?php
$post_7 = get_post(130); 
$excerpt = $post_7->post_content;
echo $excerpt;
?>
</div>
</div>


</div>
</div>
</div>
<?php
echo "<div class='col-sm-6'><div class='row'>";


        $args=array(
                'orderby' => 'menu_order',
                'order' => 'ASC',
                'posts_per_page' => -1,
                'post_type' => 'page',
                'post_parent' => '46'
        );

        $childpages = new WP_Query($args);

        if($childpages->post_count > 0) { /* display the children content  */
          //  echo "<div class='col-lg-4 '>";
            while ($childpages->have_posts()) {
                 $childpages->the_post();
                ?><div class='dos col-lg-6'><div class='jumbotron' style='background-image: url(<?php the_post_thumbnail_url() ?>)'> <?php echo "<div class='in text-center'>".get_the_content()."</div></div></div>";
            }
          //  echo "</div>";
        }
                      

      //  echo "";

  wp_reset_postdata();

?>
</div>
</div>

        </div>
        <span class="text-muted">de Watertoren 2018</span>
      </div>
    </footer>
</body>
<script type='text/javascript' src='<?php echo get_bloginfo('template_directory'); ?>/script.js'></script>

</html>
