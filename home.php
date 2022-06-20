<?php get_header(); ?>
<!-- slideshow -->
<section class="hp-slideshow">
  <div class="region-slideshow-container">
    <h2 class="hidden">Slideshow</h2>
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Slideshow") ) : ?>
    <?php endif ?>
  </div>

  <div class="site-bg">
    <canvas class="lazyload" width="1168" height="840"
      data-bgset="<?php echo get_stylesheet_directory_uri(); ?>/images/slideshow-accent.png"></canvas>
  </div>

</section>
<!-- slideshow end -->


<!-- properties -->
<section class="hp-properties">
  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Properties") ) : ?>
  <?php endif ?>
</section>
<!-- properties end -->
<!-- process -->
<section class="hp-process">
  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Process") ) : ?>
  <?php endif ?>

  <div class="site-bg main">
    <canvas class="lazyload" width="1600" height="680"
      data-bgset="<?php echo get_stylesheet_directory_uri(); ?>/images/process-bg.jpg"></canvas>
  </div>
</section>
<!-- process end -->
<!-- welcome -->
<section class="hp-welcome">
  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Welcome") ) : ?>
  <?php endif ?>

</section>
<!-- welcome end -->
<!-- team -->
<section class="hp-team">
  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Team") ) : ?>
  <?php endif ?>
</section>
<!-- team end -->
<!-- communities -->
<section class="hp-communities">
  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Communities") ) : ?>
  <?php endif ?>

</section>
<!-- communities end -->
<!-- social -->
<section class="hp-social">
  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Social") ) : ?>
  <?php endif ?>

</section>
<!-- social end -->
<!-- contact -->
<section class="hp-contact">
  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Contact") ) : ?>
  <?php endif ?>

</section>

<?php get_header(); ?>
<!-- Intro Popup -->
<div class="intro-popup">
  <a href="#introPopupHolder" aria-label="popup" class="aios-content-popup introPopupTrigger"><span
      class="hidden">popup</span></a>
  <div class="aiosp-hide" id="introPopupHolder">
    <span class="aiosp-close ai-font-close-a"></span>
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Popup") ) : ?>
    <?php endif ?>

  </div>
</div> <!-- Intro Popup end -->

<?php get_footer(); ?>
<!-- contact end -->
<?php get_footer(); ?>