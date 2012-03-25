<?php
/**
 * @file
 * Theme implementation to display a node.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see zen_preprocess()
 * @see zen_preprocess_node()
 * @see zen_process()
 */
?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix">
  <?php print $user_picture; ?>

  <?php if (!$page && $title): ?>
    <h2 class="title"><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>

  <?php if ($unpublished): ?>
    <div class="unpublished"><?php print t('Unpublished'); ?></div>
  <?php endif; ?>

  <?php if ($display_submitted || $terms): ?>
    <div class="meta">
      <?php if ($display_submitted): ?>
        <span class="submitted">
          <?php print $submitted; ?>
        </span>
      <?php endif; ?>

    </div>
  <?php endif; ?>

  <div class="content">
      <div class="floatleft">
      <?php print $node->field_newsimage[0]['view'] ?></div>
      <?php print $content; ?></div>
        <div style="clear:both"></div>
      <?php unset($node->field_newsimage[0]); ?>
      <div class="floatleft">
      <?php if($page !=0 or !$teaser): ?>
        <?php foreach ($node->field_newsimage as $otherimage=>$image) {
          print"<div class='floatleft'>".$image['view']."</div>"; } ?>
      <?php endif; ?></div>
  <div style="clear:both"></div>

  <?php print $links; ?>
</div><!-- /.node -->
