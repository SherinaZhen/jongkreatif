<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bonsai_blog
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
		    <section>
		        <h2><?php esc_html_e( 'MENU', 'bonsai-blog' ); ?></h2>
		        <?php wp_nav_menu(); ?>
		    </section>
			<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
        		<?php dynamic_sidebar( 'sidebar-2' ); ?>
    		<?php endif; ?>
		</div><!-- .site-info -->
					
		<div class="copyright">
            <div>
				<p><?php
				/* translators: 1: Theme name, 2: Theme author. */				
				printf( esc_html__( 'Theme courtesy of: %1$s.', 'bonsai-blog' ), sprintf('<a title="%s" href="https://palmatum.pl" target="_blank">%s</a>', __('bonsai pots and bonsai trees','bonsai-blog'), __('Palmatum','bonsai-blog')) );
				?></p>
			   
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
