<?php if ($shortcodes): ?>
	<div class="simple-slider owl-carousel owl-theme" id="<?php echo $id; ?>" data-responsive='<?php echo $responsive; ?>' data-nav="<?php echo $display_nav ? 1 : 0; ?>" data-dots="<?php echo $display_dots ? 1 : 0; ?>" data-autoplay="<?php echo $autoplay ? 1 : 0; ?>" data-autoplay-timeout="<?php echo $autoplay_timeout; ?>" data-autoplay-hover-pause="<?php echo $autoplay_hover_pause ? 1 : 0; ?>">
		<?php foreach ($shortcodes[0] as $s): ?>
			<div class="item">
				<?php echo do_shortcode($s); ?>
			</div>
		<?php endforeach; ?>
	</div>


	<style>

		#<?php echo $id; ?> .owl-nav [class*=owl-] { color: <?php echo $nav_color; ?>; font-size: <?php echo $nav_size; ?>; }
		#<?php echo $id; ?> .owl-nav [class*=owl-]:hover { color: <?php echo $nav_color; ?>; }

	</style>
<?php endif; ?>