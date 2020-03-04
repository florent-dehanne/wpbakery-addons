<?php if ($shortcodes): ?>
	<div class="simple-slider owl-carousel owl-theme" id="<?php echo $id; ?>" data-responsive='<?php echo $responsive; ?>'>
		<?php foreach ($shortcodes[0] as $s): ?>
			<div class="item">
				<?php echo do_shortcode($s); ?>
			</div>
		<?php endforeach; ?>
	</div>
<?php endif; ?>