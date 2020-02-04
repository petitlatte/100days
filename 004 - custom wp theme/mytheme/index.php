<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo( 'name' ); ?> <?php wp_title(); ?></title>
<link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet">	
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>

<body <?php body_class(); ?>>

<!-- Header -->
<header>
	<div class = "container">
<div class = "siteinfo">
<h1><a href = "<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
<p><?php bloginfo( 'description'); ?></p>
</div>
</div>
</header>





<div class = "container">
		
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

	</div>



		<?php the_content(); ?>

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



</div> <!-- container -->	


<footer>
	<div class = "container">
<small> &copy; LISA PEARSON 2020 </small>
</div>	
</footer>



<!--scripts-->

<script src="https://kit.fontawesome.com/f76c37ccc3.js" crossorigin="anonymous"></script>
</body>
</html>