<?php
/**
 * Partial template for social share buttons on single page
 */
?>

<?php if ((is_single() OR Bunyad::options()->social_icons_classic) && Bunyad::options()->social_share): ?>
	
	<div class="post-share">
		<span class="text"><?php _e('', 'bunyad'); ?></span>
		
		<span class="share-links">

			<a href="http://twitter.com/home?status=<?php echo urlencode(get_permalink()); ?>" class="fa fa-twitter" title="<?php _e('Tweet It', 'bunyad'); ?>" target="_blank">
				<span class="visuallyhidden"><?php _e('Twitter', 'bunyad'); ?></span></a>
				
			<a href="http://www.facebook.com/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" class="fa fa-facebook" title="<?php _e('Share on Facebook', 'bunyad'); ?>" target="_blank">
				<span class="visuallyhidden"><?php _e('Facebook', 'bunyad'); ?></span></a>
				
			<a href="http://plus.google.com/share?url=<?php echo urlencode(get_permalink()); ?>" class="fa fa-google-plus" title="<?php _e('Share on Google+', 'bunyad'); ?>" target="_blank">
				<span class="visuallyhidden"><?php _e('Google+', 'bunyad'); ?></span></a>
								
			<a href="mailto:?subject=<?php echo rawurlencode(get_the_title()); ?>&amp;body=<?php echo rawurlencode(get_permalink()); ?>" class="fa fa-envelope-o"
				title="<?php _e('Share via Email', 'bunyad'); ?>">
				<span class="visuallyhidden"><?php _e('Email', 'bunyad'); ?></span></a>
			
		</span>
	</div>
	
<?php endif; ?>