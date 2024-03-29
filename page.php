<?php 
/**
 * The template for displaying Single Page.
 *
 * @package Simon WP Framework
 * @since Simon WP Framework 1.0
 */
 get_header(); ?>

<div class="flex_100">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="post" id="post-<?php the_ID(); ?>">
    <h1>
      <a href="<?php get_permalink(the_ID()); ?>"><?php the_title(); ?></a>
    </h1>
    <div class="entry">
      <?php the_content(); ?>
      <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
    </div>
    <div class="postmetadata">
        <?php get_template_part( '/inc/meta' );?>

    </div>
  </div>
  <div id="comment-block">
<?php comments_template(); ?>
</div>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
