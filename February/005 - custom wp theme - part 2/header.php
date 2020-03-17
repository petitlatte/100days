<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo( 'name' ); ?> <?php wp_title(); ?></title>
	<meta name = "viewport" content = "width=device-width">
<link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet">	
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Header -->
<header>
<div class = "siteinfo">
<div class = "container">

<h1><a href = "<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
<p><?php bloginfo( 'description'); ?></p>
</div>
</div>

<?php if(get_header_image() ): ?>
<img src = "<?php header_image(); ?>"
width = "<?php echo get_custom_header()->width; ?>" height = "<?php echo get_custom_header()->height; ?>" alt = ""
>
<?php endif; ?>


<nav>
<div class = "container">
	<?php wp_nav_menu('theme_location=navigation' ); ?>
</div>
</nav>


</header>