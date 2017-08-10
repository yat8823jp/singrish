<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" article.wrap and all content after.
 *
 * @package WordPress
 * @subpackage singrish
 * @since 2017
 */
?>
<?php
$gmenu = array (
	'menu'       => '',
	'menu_class' => 'p-gnavi',
	'container'  => false,
	'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
);
?>
	</article><!--/.wrap-->
	<footer class="l-footer">
		<div class="c-grid">
			<?php wp_nav_menu( $gmenu ); ?>
			<address class="p-copyright">
				<p>copyright &copy; <?php bloginfo( 'name' ); ?></p>
			</address>
		</div>
	</footer>

	<?php wp_footer(); ?>
</body>
</html>
