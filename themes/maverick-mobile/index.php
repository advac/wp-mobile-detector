<?php get_header(); ?>
<div class="main_body_mobile">
	<?php if(have_posts()) : ?>
	<?php $i=0; ?>
		<?php while(have_posts()) : the_post(); ?>
			<div class="wrapper" id="post-<?php the_ID(); ?>">
				<div class="ui-body ui-body-e">
					<div>
						<div class="post_the_title">
				    	<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
							<p class="postmetadata">By <?php the_author(); ?> at <? the_time() ?> on <? the_time('m')?>/<? the_time('m') ?>/<? the_time('Y')?></p>
				    </div>
					</div>
					<div class="entry eid<?=$i?>" style="<? if($i!=0) echo 'display: none;';?>">
						<!-- Begin -->  
						<?php 
						the_excerpt();
						?>
						<!-- End -->
					</div>
					<a href="#" data-role="button" data-icon="<? if($i==0) echo 'arrow-u'; else echo 'arrow-d'; ?>" data-iconpos="notext" onclick="$('<? echo '.eid'.$i; ?>').toggle('slow'); return false;"></a>
				</div>
			</div>
		<?php $i++; ?>
		<?php endwhile; ?>
	  <div class="navigation">
	  	<?php posts_nav_link(' &#124; ','&#171; previous','next &#187;'); ?>
	  </div>               
	<?php else : ?>
	<div class="post" id="post-<?php the_ID(); ?>">
		<h2><?php _e('No posts are added.'); ?></h2>
	</div>
	<?php endif; ?>
</div>
<?php get_footer(); ?>      