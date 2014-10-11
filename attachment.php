<?php get_header(); ?>

<!-- START CONTENT -->

<div id="content" class="attachment">
  <div class="singlecontent"> 
    <div class="breadcrumb><?php if (function_exists('bcn_display')) { bcn_display(); } ?></div>
    
    <div id="gallery-box" class="entrytext">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php $attachment_link = get_the_attachment_link($post->ID, true, array(523, 1000)); // This also populates the iconsize for the next line ?>
      <?php $_post = &get_post($post->ID); $classname = ($_post->iconsize[0] <= 50 ? 'small' : '') . 'attachment'; // This lets us style narrow icons specially ?>
      <div class="post" id="post-<?php the_ID(); ?>">
        <p class="<?php echo $classname; ?>"><?php echo $attachment_link; ?>
          <?php /*echo basename($post->guid);*/ ?>
        </p>
        <?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
        </div>
        <?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
        <p class="postmetadata alt clear"><small>
          <?php edit_post_link('Edit this entry.','',''); ?>
          </small></p>
      
    </div>
    <?php comments_template(); ?>
    <?php endwhile; else: ?>
    <p>Sorry, no attachments matched your criteria.</p>
    <?php endif; ?>
  </div>
  <!-- START SIDEBAR -->
  <?php get_sidebar('primary'); ?>
  <!-- END SIDEBAR --> 
</div>
<!-- END CONTENT -->

<?php get_footer(); ?>
