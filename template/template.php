<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php get_site_name(); ?> | <?php page_title();  ?></title>
</head>
<body>
<div>

	<header>
		<h1><?php get_site_name(); ?></h1>
		<nav>
			<?php nav_menu(); ?>
		</nav>
	</header>

	<article>
		<h2><?php page_title(); ?></h2>
		<?php page_content(); ?>
	</article>

	<footer>
		<small>&copy;<?php echo date('Y'); ?> <?php get_site_name(); ?></small>
	</footer>
</div>
	
</body>
</html>