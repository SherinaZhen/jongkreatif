<?php
/**
 * The template for main page
 * Template Name: Main page
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bonsai_blog
 */

get_header();
?>
<div class="bonsai">

		<main id="main" class="site-main">
<div class="latest-news">
		
		<?php 
   // the query
   $the_query = new WP_Query( array(
      'posts_per_page' => 3,
   )); 
?>

<?php if ( $the_query->have_posts() ) : ?>
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<?php get_template_part( 'template-parts/content', 'home' ); ?>
  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>

<?php else : ?>
  <p><?php __('There are no articles yet.','bonsai-blog'); ?></p>
<?php endif; ?>
		
		</div>
		<div class="link">
			<a href="<?php echo esc_url(get_permalink( get_option( 'page_for_posts' ) )).'">'; esc_html_e('All articles', 'bonsai-blog'); ?></a>
		</div>

		</main><!-- #main -->
		</div>
		<div class="mainaside">
		<h2><?php esc_html_e('Find something interesing for you in bonsai topic', 'bonsai-blog'); ?></h2>
 <?php the_widget( 'WP_Widget_Search'); ?> 		
 </div>
 <div class="bonsai">

<?php
get_sidebar(); ?>
</div>
<?php get_footer(); ?>
