<!DOCTYPE HTML>
<!--
	Future Imperfect by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Blogjp</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'./indextheme/assets/css/main.css' ?>"/>
	</head>

	<body class="is-preload">
	<?php wp_nav_menu([
			'theme_location' => 'header',
			'container' => false,
			'menu_class' => 'navbar-nav mr-auto']); 
	?>
		<section>	
		<?php if (have_posts() ) : 
			while( have_posts() ) : the_post(); ?>
				<article><h1><?php the_title(); ?></h1>
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'full' ); ?></a>
				<p><?php the_excerpt(); ?></p></article>
        <?php endwhile; 
			endif; ?>
		</section>
		
		<?php 
			// if (have_posts()) :
            //     while (have_posts()) : the_post(); 
            //     the_post_thumbnail();
                // echo '<hr><h2> Titre : <a href="'.get_the_permalink().'">'.get_the_title()."</a></h2>";
                // the_author(); the_date();
                // get_template_part('contact.php');
                // endwhile; 
			// endif; 
            the_category();
get_footer();
?>

