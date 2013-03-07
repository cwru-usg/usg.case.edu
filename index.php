<?php
/**
 * The template for displaying Index.
 *
 * @package Simon WP Framework
 * @since Simon WP Framework 1.0
 */

get_header();
?>

<div class="alpha flex_66">
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
<?php endwhile; endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
