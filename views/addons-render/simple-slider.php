<?php if ($shortcodes): ?>
	<div class="simple-slider owl-carousel owl-theme" id="<?php echo $id; ?>">
		<?php foreach ($shortcodes[0] as $s): ?>
			<div class="item">
				<?php echo do_shortcode($s); ?>
			</div>
		<?php endforeach; ?>
	</div>
<?php endif; ?>


<script>

	jQuery(function($) {
		$('#<?php echo $id; ?>').owlCarousel({
			items: 1,
			loop: true,
			margin: 10,
			nav: false,
			dots: false,
			responsive: {
				<?php if ($items_320px): ?>
					0: { items: <?php echo $items_320px; ?> },
				<?php endif; ?>
				<?php if ($items_480px): ?>
					320: { items: <?php echo $items_480px; ?> },
				<?php endif; ?>
				<?php if ($items_640px): ?>
					480: { items: <?php echo $items_640px; ?> },
				<?php endif; ?>
				<?php if ($items_728px): ?>
					640: { items: <?php echo $items_728px; ?> },
				<?php endif; ?>
				<?php if ($items_1024px): ?>
					728: { items: <?php echo $items_1024px; ?> },
				<?php endif; ?>
				<?php if ($items_1280px): ?>
					1024: { items: <?php echo $items_1280px; ?> },
				<?php endif; ?>
				<?php if ($items_1600px): ?>
					1280: { items: <?php echo $items_1600px; ?> },
				<?php endif; ?>
				<?php if ($items_1920px): ?>
					1600: { items: <?php echo $items_1920px; ?> },
				<?php endif; ?>
			}
		});
	});

</script>