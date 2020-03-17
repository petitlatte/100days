<?php get_header(); ?>

<div class = "container">
		

<?php if(is_category() ): ?>
	<h1 class = "archive-title">
		<i class = "fa fa-folder-open"></i> 
		<?php single_cat_title(); ?>
</h1>
<?php endif; ?>


<?php if(is_month()): ?>
	<h1 class = "archive-title">
		<i class = "fa fa-clock-o"></i>
		<?php echo get_the_date( 'm,Y' ); ?>
	</h1>

<?php endif; ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>	

	<article <?php post_class(); ?>>

	<h1><?php the_title(); ?></h1>


		<?php the_content(); ?>


	</article>

	<?php endwhile; endif; ?>
					


</div> <!-- container -->	


<?php get_footer(); ?>