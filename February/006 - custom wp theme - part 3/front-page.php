<?php get_header(); ?>

<img src = "<?php echo get_template_directory_uri(); ?>/header-top.jpg" width = "1500" height = "460" alt = "" class = "largeheader">

<div class = "container"
<?php if(have_posts()): while(have_posts()): the_post(); ?>	

	<article <?php post_class(); ?>>

	<h1><?php the_title(); ?></h1>


		<?php the_content(); ?>


	</article>

	<?php endwhile; endif; ?>


<?php get_footer(); ?>