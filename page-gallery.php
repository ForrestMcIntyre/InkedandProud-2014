<?php
/*
Template Name: Gallery Page
*/
?>
<?php get_header(); ?>



<!-- START CONTENT -->
<div id="content" class="gallery">
<div class="maincontent">
    <div class="breadcrumbs">
      <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
    </div>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div id="post-<?php the_ID(); ?>">
        <h2><?php the_title(); ?></h2>     
		<?php the_content('<p class="serif">More &raquo;</p>'); ?>
        <?php edit_post_link('Edit this entry.', '<p class="clear"><small>', '</small></p>'); ?>
        
		<?php wp_link_pages(); ?>
	</div>
   
	<?php endwhile; endif; ?>  
</div>
<!-- END CONTENT -->
<!-- START SIDEBAR -->
<?php get_sidebar('primary'); ?>
</div>
<!-- END SIDEBAR -->
<?php get_footer(); ?>