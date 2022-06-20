<?php if ( !is_home() && !is_page_template( 'template-fullwidth.php' ) && !is_page_template( 'template-homepage.php' ) ) : ?>
<div class="clearfix"></div>
</div><!-- end of #inner-page-wrapper .inner -->
</div><!-- end of #inner-page-wrapper -->
<?php endif ?>
</main>

<footer class="footer">
	<div class="region-footer-cotainer">

		<div class="footer-top">
			<div class="footer-logo">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Footer Logo") ) : ?>
				<?php endif ?>

			</div>
			<div class="footer-nav">
				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_class' => 'footernav', 'theme_location' => 'secondary-menu','depth'=>1 ) ); ?>
				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_class' => 'mobilenav', 'theme_location' => 'primary-menu','depth'=>1 ) ); ?>
			</div>
			<div class="footer-group">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Footer Group") ) : ?>
				<?php endif ?>

			</div>
		</div>
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Footer Text") ) : ?>
		<?php endif ?>

		<p class="copyright">Copyright ©
			<?php echo do_shortcode('[currentYear]')?> <span class="sitename">Adi Livyatan Group. </span> All rights
			reserved. <a class="sitemap" href="<?php echo do_shortcode('[blogurl]')?>/sitemap">Sitemap</a>.
			<?php echo do_shortcode('[agentimage_credits credits="Real Estate Website Design by <a target="_blank" href="https://www.agentimage.com" style="text-decoration:underline;font-weight:bold">Agent Image</a>"]'); ?>
		</p>
		<div class="mls">
			<em class="ai-font-eho" title="MLS"></em>
			<em class="ai-font-realtor-mls" title="MLS"></em>
		</div>
	</div>
	<div class="site-bg">
		<img alt="background" class="img-responsive site-grayscale"
			src="<?php echo get_stylesheet_directory_uri() ?>/images/footer-accent.png" width="986" height="726" />
	</div>
</footer>

<?php do_action('aios_neighborhoods_footer')?>
<?php do_action('aios_landing_page_footer')?>

</div><!-- end of #main-wrapper -->


<?php wp_footer(); ?>
</body>

</html>