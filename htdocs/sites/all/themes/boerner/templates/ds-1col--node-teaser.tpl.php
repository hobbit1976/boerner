<?php

$teaser_box = array('5' => 'box-1', '4' => 'box-2', '6' => 'box-3', '7' => 'box-4');
$teaser_typ = $node->field_teaser_typ['und'][0]['tid'];
/**
 * @file
 * Display Suite 1 column template.
 */
?>
<<?php print $ds_content_wrapper; print $layout_attributes; ?> class="ds-1col <?php print $teaser_box[$teaser_typ];?> <?php print $classes;?> clearfix">

  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

  <?php if ($teaser_typ == '5'): ?>
  <?php print l($ds_content, 'node/'.$node->field_teaser_verlinkung['und'][0]['target_id'], array('html' => true)); ?>
  <?php endif; ?>

  <?php if ($teaser_typ == '7'): ?>
  <?php print $ds_content; ?>
  <?php print l($node->field_teaser_link_beitrag['und'][0]['title'], $node->field_teaser_link_beitrag['und'][0]['url'], array('attributes' => array('class' => 'button')));?>
  <?php endif; ?>

  <?php if ($teaser_typ == '4' || $teaser_typ == '6'): ?>
  <?php print $ds_content; ?>
  <?php print l($node->field_teaser_link_view['und'][0]['title'], $node->field_teaser_link_view['und'][0]['url'], array('attributes' => array('class' => 'button')));?>
  <?php endif; ?>

</<?php print $ds_content_wrapper ?>>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
