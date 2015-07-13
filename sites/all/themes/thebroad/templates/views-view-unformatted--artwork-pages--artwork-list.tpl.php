<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>

<div id ="thebroad-artwork-view-wrapper">
	<div id="thebroad-artwork-view-inner-wrapper">
<?php if (!empty($title)): ?>
  <h1><?php print $title; ?></h1>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
  <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
    <?php print $row; ?>
  </div>
<?php endforeach; ?>
    </div>
</div>