<div class="share-social-medias" id="share-social-medias-<?php echo $id; ?>">
  <?php if (!empty($title)): ?>
    <p class="title"><?php echo $title; ?></p>
  <?php endif; ?>

  <div class="social-medias">
    <?php if (in_array('facebook', $social_medias)): ?>
      <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode($share_url); ?>">
        <i class="fa fa-facebook fa-fw"></i>
      </a>
    <?php endif; ?>

    <?php if (in_array('twitter', $social_medias)): ?>
      <a href="https://twitter.com/home?status=<?php echo urlencode($share_url).(!empty($description) ? ' '.$description : ''); ?>">
        <i class="fa fa-twitter fa-fw"></i>
      </a>
    <?php endif; ?>

    <?php if (in_array('linkedin', $social_medias)): ?>
      <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode($share_url).(!empty($description) ? '&summary='.$description : ''); ?>">
        <i class="fa fa-linkedin fa-fw"></i>
      </a>
    <?php endif; ?>

    <?php if (in_array('pinterest', $social_medias)): ?>
      <a href="https://pinterest.com/pin/create/button/?url=<?php echo urlencode($share_url).(!empty($description) ? '&description='.$description : '').(!empty($share_picture) ? '&media='.$share_picture : ''); ?>">
        <i class="fa fa-pinterest fa-fw"></i>
      </a>
    <?php endif; ?>
  </div>
</div>

<?php

if ($icons_color || $icons_hover_color)
{
  echo '<style>';

  if ($icons_color)
    echo '#share-social-medias-'.$id.' a { color: '.$icons_color.'; }';

  if ($icons_color)
    echo '#share-social-medias-'.$id.' a:hover { color: '.$icons_hover_color.'; }';

  echo '</style>';
}