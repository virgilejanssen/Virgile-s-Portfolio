<!DOCTYPE html> 
<html xml:lang="en" lang="en" xmlns="http://www.w3.org/1999/xhtml">
 
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<title><?php echo get_bloginfo( 'name' ); wp_title( ' | ', true, 'left' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">

<meta name="keywords" content="">
<meta name="description" content="<?php echo get_bloginfo ( 'description' );  ?>">
<meta name="title" content="">
<meta name="author" content="">

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/responsive-nav.js"></script>
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<div class="wrapper">
		<div class="nav-container">
			<div class="nav-wrapper">
				<div class="nav">
					<div class="masthead">
						<p class="name"><b><a href="/"><?php echo get_bloginfo( 'name' ); ?></a></b></p>
						<p class="separator">//</p>
					</div>
					<div class="nav-collapse" id="responsive-menu">
						<ul>
							<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	