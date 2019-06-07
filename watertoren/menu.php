<?php /* Template Name: nieuws */ ?>
<?php get_header(); ?>



</br>
<div class="menukaart container">
<?php
if (have_posts()) :
   while (have_posts()) :
      the_post();
         the_content();
   endwhile;
endif;
?>
</div>

      </div>
</div>
    </div>
<br/>
<br/>
<?php get_footer(); ?>
