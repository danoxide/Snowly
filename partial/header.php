<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=latin,latin-ext">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Montserrat:400,700">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo theme_url('css/styles.css'); ?>">
	<title><?php echo page_title("Page can't be found."); ?> - <?php echo site_name(); ?></title>
</head>
<body>

<header id="top">
	<nav class="navbar navbar-default">
		<div class="navbar-header">
			<?php if(has_menu_items()): ?>
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-menu">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<?php endif; ?>
			<a href="<?php echo base_url(); ?>" class="navbar-brand" style="background-image:url('<?php echo theme_url("img/avatar.jpg"); ?>');padding-left:55px;">
				<strong><?php echo site_name(); ?></strong>
			</a>
		</div>

		<?php if(has_menu_items()): ?>
		<div class="collapse navbar-collapse" id="navbar-collapse-menu">
			<ul class="nav navbar-nav navbar-right">
				<?php while(menu_items()): ?>
				<li<?php echo (menu_active() ? ' class="active"' : ''); ?>><a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>"><?php echo menu_name(); ?></a></li>
				<?php endwhile; ?>
				<li><a href="#" title="Search..." data-target="#search"><span class="glyphicon glyphicon-search"></span></a></li>
			</ul>
		</div>
		<?php endif; ?>
	</nav>
</header>