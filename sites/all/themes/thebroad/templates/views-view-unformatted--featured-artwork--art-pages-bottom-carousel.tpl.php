

<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<!--thebroad/templates/views-view-unformatted--featured-artwork--art-pages-bottom-carousel.tpl.php-->

<div id="thebroad-featured-artists-carousel"><!-- start : thebroad-featured-featured-artists-carousel -->
	
<?php if (!empty($title)): ?>
  <h1><?php print $title; ?></h1>
<?php endif; ?>
	<div id="thebroad-featured-artists-carousel-wrapper">
	
  <?php foreach ($rows as $id => $row): ?>
  <div <?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
    <?php print $row; ?>
  </div>
<?php endforeach; ?>
 		<div style="clear: both;"></div> 
	</div><!-- end: thebroad-featured-artists-carousel-wrapper -->

</div> <!-- end: thebroad-featured-artists-carousel -->

<?php
$items = array (
  0 => '<img src="http://static.flickr.com/66/199481236_dc98b5abb3_s.jpg" width="75" height="75" alt="" />',
  1 => '<img src="http://static.flickr.com/75/199481072_b4a0d09597_s.jpg" width="75" height="75" alt="" />',
  2 => '<img src="http://static.flickr.com/57/199481087_33ae73a8de_s.jpg" width="75" height="75" alt="" />',
  3 => '<img src="http://static.flickr.com/77/199481108_4359e6b971_s.jpg" width="75" height="75" alt="" />',
  4 => '<img src="http://static.flickr.com/58/199481143_3c148d9dd3_s.jpg" width="75" height="75" alt="" />',
  5 => '<img src="http://static.flickr.com/72/199481203_ad4cdcf109_s.jpg" width="75" height="75" alt="" />',
  6 => '<img src="http://static.flickr.com/58/199481218_264ce20da0_s.jpg" width="75" height="75" alt="" />',
  7 => '<img src="http://static.flickr.com/69/199481255_fdfe885f87_s.jpg" width="75" height="75" alt="" />',
  8 => '<img src="http://static.flickr.com/60/199480111_87d4cb3e38_s.jpg" width="75" height="75" alt="" />',
  9 => '<img src="http://static.flickr.com/70/229228324_08223b70fa_s.jpg" width="75" height="75" alt="" />',
);
$options = array (
  'wrap' => 'circular',
);
print theme('jcarousel', array('items' => $items, 'options' => $options));
?>



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
<?php print $wrapper_prefix; ?>
  <?php if (!empty($title)) : ?>
    <h3><?php print $title; ?></h3>
  <?php endif; ?>
  <?php print $list_type_prefix; ?>
    <?php foreach ($rows as $id => $row): ?>
      <li class="<?php print $classes_array[$id]; ?>"><?php print $row; ?></li>
    <?php endforeach; ?>
  <?php print $list_type_suffix; ?>
<?php print $wrapper_suffix; ?>