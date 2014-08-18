<?php
/*
Template Name: Gallery Page
*/

/*
This is an example page that calls the secondary sidebar. 
It's based on sample.php.

Change the template name to whatever you want, by re-naming the file and editing line 3, above.

You can call a unique header, sidebar, footer, etc. 
as shown in the get_sidebar example, below.
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