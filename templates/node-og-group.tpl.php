<?php

/**
 * @file node-og-grouo.tpl.php
 * 
 * Og has not modified this at all. It is same as node.tpl.php.
 * This template is used by default for group nodes.
 *
 * Theme implementation to display a node.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 */
?>
<div id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?> clear-block">

<?php print $picture ?>

<?php if (!$page): ?>
  <h2><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
<?php endif; ?>

  <div class="meta">
  <?php if (isset($submitted)): ?>
    <span class="submitted"><?php print $submitted ?></span>
  <?php endif; ?>

  </div>

  <div class="content">
    <div class="floatleft">
      <?php print $node->field_sportsimage[0]['view']; ?>
    </div>
    <?php print $content ?>
  </div>

  <?php print $links; ?>
</div>