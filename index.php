<?php get_header(); ?>
</div>
<!-- START CONTENT -->
<?php if (have_posts()) : ?>
<div id="content" class="index"> <div class="maincontent">
    <?php while (have_posts()) : the_post(); ?>
    	<div class="designposting">
    	<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
        <p class="postmetadata">
            <span class="date">Posted on <?php the_time('F jS, Y') ?></span> in 
            <span class="cat"><?php the_category(', ') ?></span>
            <span class="author"><?php _e('By');?> <?php the_author_posts_link(); ?></span>
         	<span class="comments">with <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></span>
        </p>
		<?php the_excerpt('More &raquo;'); ?>
     	<?php edit_post_link('Edit this entry.', '<p><small>', '</small></p>'); ?>
        </div>
    <?php endwhile; ?>

		<nav class="post-nav">
            <p class="alignleft"><?php next_posts_link('&laquo; Older Posts') ?></p>
            <p class="alignright"><?php previous_posts_link('Newer Posts &raquo;') ?></p>
		</nav>

</div>
<?php endif; ?>
<!-- END CONTENT -->
<!--<div id="content">	<div class="maincontent">
    <p class="breadcrumb"><a href="index.html">Home</a> > <a href="javascript:;">Gallery</a></p>
    	<div class="designposting">
			<h2>Tattoos</h2>
            <img src="images/realism-thmb.jpg" alt="Tattoos"/>
			<p>Here you can find all of our premade, ready to purchase tattoo designs. In our gallery we have many different styles and designs available for purchase.</p>
 			<p class="more"><a href="javascript:;">See More »</a></p>
        </div>
        <div class="designposting">
        	<h2>Prints</h2>
        	<img src="images/abstract-thmb.jpg" alt="Prints"/>
			<p>We are trying to broaden our horizons and work with multiple mediums. Lately we have been trying acrylics and watercolors on canvas. Feel free to browse our wild creations.</p>
 			<p class="more"><a href="javascript:;">See More »</a></p>
        </div>
        <div class="designposting">
        	<h2>Custom Designs</h2>
        	<img src="images/fashion-thmb.jpg" alt="Custom Designs"/>
			<p>Here is where we display all of the custom designs we have already completed for people. If you want to get your own custom design, submit your specifications <a href="design.php">here</a></p>
 			<p class="more"><a href="javascript:;">See Custom Designs »</a></p>
        </div>
    </div>-->
<?php get_sidebar('primary');?></div>
<?php get_footer(); ?>