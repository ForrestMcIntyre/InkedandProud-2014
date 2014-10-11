<?php
/*
Template Name: Front Page
*/
?>
<?php  get_header(); ?>
<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div id="post-<?php the_ID(); ?>">   
		<?php the_content('<p class="serif">More &raquo;</p>'); ?>
       
		<?php wp_link_pages(); ?>
	</div>
   
	<?php endwhile; endif; ?>
    <div id="customwidget">
    <a href="<?php home_url(); ?>/my-design/"><img src="<?php bloginfo('template_url'); ?>/images/custom-design.jpg" alt="Custom"/></a>
    </div>
    <div id="gallerywidget">
    <a href="<?php home_url(); ?>/gallery/"><img src="<?php bloginfo('template_url'); ?>/images/premade-prints.jpg" alt="Gallery"/></a>
    </div>
	<div id="home-widgets">
		<?php get_sidebar('home-left'); ?>
		<div id="right-widgets">
			<?php get_sidebar('home-center'); ?>
			<?php get_sidebar('home-right'); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>