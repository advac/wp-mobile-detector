<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar() ) : else : ?>

<div class="mav-package">
	<h3>Pages</h3>
	<ul data-role="listview" data-inset="true" data-theme="c">
	<?php wp_list_pages('title_li=&depth=1'); ?>
	</ul>
</div>

<div class="mav-package">
	<h3>Categories</h3>
	<ul data-role="listview" data-inset="true" data-theme="c">
  <?php wp_list_categories('show_count=1&title_li=&depth=1'); ?>
	</ul>
</div>

<?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>

<div class="mav-package">
	<h3>Blogroll</h3>
	<ul data-role="listview" data-inset="true" data-theme="c">
  <?php wp_list_bookmarks(array('title_li'=>'','categorize'=>0)); ?>
	</ul>
</div>

<?php } ?>
<?php endif; ?>