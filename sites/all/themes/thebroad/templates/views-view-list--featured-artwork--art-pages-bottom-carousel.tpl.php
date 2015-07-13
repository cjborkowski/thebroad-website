<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $options['type'] will either be ul or ol.
 * @ingroup views_templates
 */
?>
<!--thebroad/templates/views-view-list--featured-artwork--art-pages-bottom-carousel.tpl.php-->
<div id="thebroad-featured-artists-carousel" class"jcarousel-wrapper">
<?php print $wrapper_prefix; ?>
  <?php if (!empty($title)) : ?>
    <h3><?php print $title; ?></h3>
  <?php endif; ?>
  <div id="thebroad-featured-artists-carousel-wrapper" class="jcarousel">
  <?php print $list_type_prefix; ?>

    <?php foreach ($rows as $id => $row): ?>
      <li class="<?php print $classes_array[$id]; ?>"><?php print $row; ?></li>
    <?php endforeach; ?>
  <?php print $list_type_suffix; ?>
<?php print $wrapper_suffix; ?>
<div style="clear: both;"></div> 
	
	</div><!-- end: thebroad-featured-artists-carousel-wrapper -->
</div> <!-- end: thebroad-featured-artists-carousel -->