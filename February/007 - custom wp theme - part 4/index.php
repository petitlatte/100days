<?php get_header(); ?>

<div class = "container">
		
<div class = "contents">
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

	<!--Single Post-->
	<?php if ( is_single() ): ?>
	<h1><?php the_title(); ?></h1>
	<?php else: ?>
			<h1><a href = "<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	<?php endif; ?>



		<div class = "postinfo">
			<time datetime = "<?php echo get_the_date( 'd-m-Y' )?> ">
				<i class = "fa fa-clock-o"></i>
				<?php echo get_the_date(); ?>
			</time>

		<span class = "postcat">
			<i class = "fa fa-folder-open"></i>
			<?php the_category(','); ?>
		</span>

		<span class = "postcom">
			<i class = "fa fa-comment"></i>
			<a href = "<?php comments_link(); ?>">
			<?php comments_number('No comments','1 Comment','% Comments'); ?>
		</a>
		</span>

	</div>


<?php if(is_single() ): ?>

		<?php the_content(); ?>

<?php else: ?>

<div class = "excerpt">
	
		<?php if( has_post_thumbnail() ): ?>
		<p><?php the_post_thumbnail( 'medium' ); ?></p>
		<?php endif; ?>

<?php the_excerpt(); ?>
<p class = "more"><a href = "<?php the_permalink(); ?>">Read more >></a></p>
</div>

<?php endif; ?>

			<?php if( is_single() ): ?>
				<div class = "pagenav">
					<span class = "old">
						<?php previous_post_link( '%link', '<i class = "fa fa-chevron-circle-left"></i> %title' ); ?>
					</span>
					<span class = "new">
						<?php next_post_link( '%link',  '%title <i class = "fa fa-chevron-circle-right"></i>' ); ?>				
					</span>
				</div>
			<?php endif; ?>

	<?php comments_template(); ?>

	</article>

	<?php endwhile; endif; ?>
					

				<?php if ( $wp_query -> max_num_pages > 1 ): ?>
				<div class = "pagenav">
					<span class = "old">
						<?php next_posts_link('<i class = "fa fa-chevron-circle-left"></i> Previous Post'); ?>
					</span>
					<span class = "new">
						<?php previous_posts_link('<i class = "fa fa-chevron-circle-right"></i> Latest Post'); ?>				
					</span>
				</div>
			<?php endif; ?>

</div> <!-- Contents -->

<div class = "blogmenu">
<ul><?php dynamic_sidebar(); ?>
<li class = "widget">
	<ul>
		<li>
		<a href = "<?php bloginfo('rss2_url'); ?>"><i class = "fa fa-rss-square"></i> RSS</a>
	</li>
	</ul>
</li>
</ul>
</div>

</div> <!-- container -->	


<?php get_footer(); ?>
<!--Site Created by Lisa Pearson. For inquiries email me at lisapearson0619@gmail.com -->