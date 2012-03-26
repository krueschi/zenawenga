<?php
/**
 * @file
 * Theme implementation to display a block.
 *
 * @see template_preprocess()
 * @see zen_preprocess()
 * @see template_preprocess_block()
 * @see zen_preprocess_block()
 * @see zen_process()
 */
?>
<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>">

  <!-- start block class module css -->
  <?php /*
  <div class="Block <?php print block_class($block); ?>">  */ ?>
  <!-- end block class module css -->
  <div class="Block-tl"></div>
  <div class="Block-tr"></div>
  <div class="Block-bl"></div>
  <div class="Block-br"></div>
  <div class="Block-tc"></div>
  <div class="Block-bc"></div>
  <div class="Block-cl"></div>
  <div class="Block-cr"></div>
  <div class="Block-cc"></div>
  <div class="Block-body">
    <?php if ($block->subject): ?>
      <div class="BlockHeader">
        <div class="l"></div>
        <div class="r"></div>
        <div class="header-tag-icon">
          <div class="t">
            <?php echo $block->subject; ?>
          </div>
        </div>
      </div>
    <?php endif; ?>
    <div class="BlockContent">
      <div class="BlockContent-body">
        <?php echo $block->content; ?>
      </div>
    </div>
  </div>


  <?php print $edit_links; ?>
</div><!-- /.block -->
