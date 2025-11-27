<div class="<?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($attributes); ?>>
  <?php print render($title_prefix); ?>
  <?php if (isset($block->subject) && $block->subject): ?>
    <h2 class="block-title"><?php print $block->subject; ?></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <div class="block-content"<?php print backdrop_attributes($content_attributes); ?>>
    <?php print render($content); ?>
  </div>
</div>
