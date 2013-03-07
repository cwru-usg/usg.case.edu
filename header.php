<?php
/**
 * The template for Header.
 *
 * @package Simon WP Framework
 * @since Simon WP Framework 1.0
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<?php if (is_search()) { ?>
<meta name="robots" content="noindex, nofollow" />
<?php } ?>
 <title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
 <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_uri(); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="outer_wrap">
<div class="inner_wrap">
<div id="header" class="flex_100">
  <a href='/'>
    <img id="logo" src='<?php bloginfo('template_directory'); ?>/images/usg-logo.png' />
  </a>
  <h1><a href="<?php echo home_url(); ?>/">
    <?php bloginfo('name'); ?>
    </a></h1>
  <div class="description">
    <?php bloginfo('description'); ?>
  </div>
</div>
<?php echo do_shortcode( '[responsive_slider]' ); ?>
<div id="navigation" class="flex_100">
  <?php wp_nav_menu(); ?>
</div>
