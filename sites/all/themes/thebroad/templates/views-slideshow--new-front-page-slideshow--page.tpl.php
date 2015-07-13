<?php

/**
 * @file
 * Default views template for displaying a slideshow.
 *
 * - $view: The View object.
 * - $options: Settings for the active style.
 * - $rows: The rows output from the View.
 * - $title: The title of this group of rows. May be empty.
 *
 * @ingroup views_templates
 */
?>

<?php if (!empty($slideshow)): ?>
  <div class="skin-<?php print $skin; ?>">
    <?php if (!empty($top_widget_rendered)): ?>
      <div class="views-slideshow-controls-top clearfix">
        <?php print $top_widget_rendered; ?>
      </div>
    <?php endif; ?>
		
	<div id="thebroad-front-page-slideshow-wrapper">
	<div id="thebroad-front-page-slideshow">
    <?php print $slideshow; ?>
    </div>
	</div>

    <?php if (!empty($bottom_widget_rendered)): ?>
      <div class="views-slideshow-controls-bottom clearfix">
      <div id="thebroad-views-slideshow-controls-wrapper">
        <?php print $bottom_widget_rendered; ?>
        <div style="clear:both;"></div>
        </div>
      </div>
    <?php endif; ?>
  </div>
<?php endif; ?>