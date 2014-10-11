<?php get_header(); ?>

<!-- START CONTENT -->

<div id="content" class="search">
  <div class="maincontent">
    <?php if (have_posts()) : ?>
    <h2 class="pagetitle">Search Results</h2>
    <ul>
      <?php while (have_posts()) : the_post(); ?>
      <li id="post-<?php the_ID(); ?>">
        <?php the_time('F jS, Y') ?>
        - <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
        <?php the_title(); ?>
        </a></li>
      <?php endwhile; ?>
    </ul>
    <?php else : ?>
    <h2>No posts were found that match your search.</h2>
    <p>We are extremely sorry we couldn't find what you were looking for! </p><p>Use the search bar below to try a different search or feel free to use the gallery and categories on the sidebar to the right to browse for what you were looking for</p>
    <p>
      <?php get_search_form(); ?>
    </p>
    <?php endif; ?>
  </div>
  <!-- START SIDEBAR -->
  <?php get_sidebar('primary'); ?>
  <!-- END SIDEBAR --> 
</div>
<!-- END CONTENT -->

<?php get_footer(); ?>
