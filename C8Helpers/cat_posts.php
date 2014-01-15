		
			<?php 	$category = get_the_category(); 			 
 					$post_category[0]->cat_name; ?>
		 
			<?php if((has_post_thumbnail() == FALSE) && ($_SERVER['REQUEST_URI'] == "") && ($post_category == ("events" || "events-we-were-at"))) : ?>
				<div class="post-info">
				
				
				
				
	while ( $cat_posts->have_posts() )
	{
		$cat_posts->the_post();
	?>
		<li class="cat-post-item">
			
			
			<?php
				if (
					function_exists('the_post_thumbnail') &&
					current_theme_supports("post-thumbnails") &&
					$instance["thumb"] &&
					has_post_thumbnail()
				) :
			?>
				<div class="post-image">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<?php the_post_thumbnail( 'cat_post_thumb_size'.$this->id ); ?>
				</a>
				</div>
			<?php endif; ?>

			<?php if ( $instance['date'] ) : ?>
		<!--  Changes to formating of date output are done below -->
			<p class="post-date"><span class="month-date"><?php the_time("M j"); ?></span><br /><span class="year"><?php the_time("Y"); ?></span></p>
			<?php endif; ?>
		
		<!-- Ryan - Added code to only post title if there is not post thumbnail-->
		
			<?php 	$category = get_the_category(); 			 
 					$post_category[0]->cat_name; ?>
		 
			<?php if((has_post_thumbnail() == FALSE) && ($_SERVER['REQUEST_URI'] == "") && ($post_category == ("events" || "events-we-were-at"))) : ?>
				<div class="post-info">
				
				<a class="post-title" href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
			
				
				<?php if ( $instance['excerpt'] ) : ?>
				<div class="post-excerpt"><?php the_excerpt(); ?></div>
				<?php endif; ?>
				
				<?php if ( $instance['comment_num'] ) : ?>
				<p class="comment-num">(<?php comments_number(); ?>)</p>
				<?php endif; ?>
				
				</div>
			<?php endif; // if no post thumbnail?>
			<div class="clearfix"></div>