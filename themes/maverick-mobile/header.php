<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->
  <meta name="description" content="<?php bloginfo('description'); ?>" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/jquery-mobile.css" />
	<script src="<?php bloginfo('template_directory'); ?>/jquery-1.4.3.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/jquery-mobile-min.js"></script>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<script type="text/javascript">
	function websitez_extendMenu(){
		$('.exMenu').toggle("slow");
	}
	</script>
	<?php wp_head() ?>
</head>

<body>
	<div id="wrapper_mobile" data-role="page" data-theme="d">
		<div style="padding-bottom: 5px;">
			<div class="mav-header">
				<div class="mav-graph">
					<a href="" data-role="button" data-inline="true" data-icon="plus" data-iconpos="notext" onClick="websitez_extendMenu();" data-theme="a"></a>
				</div>
				<div class="mav-name">
					<h1><a href="/"><?php bloginfo('name'); ?></a></h1>
				</div>
			</div>
			<div class="exMenu" style="display: none;">
				<div class="websitez_search">
					<?php get_search_form(); ?>
				</div>
				<?php get_sidebar(); ?>
			</div>
		</div>