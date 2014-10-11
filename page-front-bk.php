<?php
/*
Template Name: Front Page
*/

/*
This is an example page that calls the secondary sidebar. 
It's based on sample.php.

Change the template name to whatever you want, by re-naming the file and editing line 3, above.

You can call a unique header, sidebar, footer, etc. 
as shown in the get_sidebar example, below.
*/
?>
<?php  get_header(); ?>
<div id="content">
	<div class="flexslider">
      <ul class="slides">
        <li>
          <img src="<?php bloginfo('template_url'); ?>/images/slide1.jpg" alt="Slide 1"/>
        </li>
        <li>
          <img src="<?php bloginfo('template_url'); ?>/images/slide2.jpg" alt="Slide 2"/>
        </li>
        <li>
          <img src="<?php bloginfo('template_url'); ?>/images/slide3.jpg" alt="Slide 3"/>
        </li>
      </ul>
    </div>
    <div id="customwidget">
    <a href="javascript:;"><img src="<?php bloginfo('template_url'); ?>/images/custom-design.jpg" alt="Custom"/></a>
    </div>
    <div id="gallerywidget">
    <a href="javascript:;"><img src="<?php bloginfo('template_url'); ?>/images/premade-prints.jpg" alt="Gallery"/></a>
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