<?php
/**
 * Partial Template for Author Box on single pages
 */
?>

<?php if (is_single() && Bunyad::options()->author_box) : // author box? ?>

	<div class="author-box">
		<h3 class="section-head"><?php _e('この記事は私が書きました。', 'bunyad'); ?></h3>

		<?php get_template_part('partials/author'); ?>
	</div>

<?php endif; ?>