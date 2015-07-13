<?php
//print_ r( $data->field_field_lightbox_image );
$image_path = $data->field_field_lightbox_image[0]['rendered']['#item']['uri'];

$image_path = $data->field_field_lightbox_image[0]['rendered']['#item']['uri'];
//$image_path = $data->field_field_lightbox_image[0]['rendered']['#path']['path'];
$image_alt = max ($data->field_field_lightbox_image[0]['rendered']['#item']['alt'], $data->field_field_lightbox_image[0]['rendered']['#item']['image_field_caption']['value'] );
$image_title = max ($data->field_field_lightbox_image[0]['rendered']['#item']['title'],$data->field_field_lightbox_image[0]['rendered']['#item']['image_field_caption']['value'] );

$title =& $row->title;
$title = str_replace('The Un-Private Collection:', '<em>The Un-Private Collection:</em>', $title);
$mobile_image = array(
  'style_name' => '320_width_mobile_slide',
  'path' => $image_path,
  'width' => '',
  'height' => '',
  'alt' => $title ,
  'title' => $title ,
  );
?>
<!-- past programs reponsive menu -->
<div class ="responsive-block-containter">
	
	<div class ="responsive-block-image-containter">
	<?php print theme('image_style',$mobile_image);?>
	</div><!-- close: responsove-block-image-containter -->
	
	<div class ="responsive-block-text-containter">
	<?php
	echo '<p class="thebroad-programs-responsive-menu">';
	echo '<a href ="/pastprograms#'. $row->nid.'" class="side-menu-responsive-a"/ >';
	echo $data->field_field_program_date[0]['rendered']['#markup'] .'<br>';
	echo  $title.'</a>';
	echo '</p>';
	?>
	</div><!-- end: responsove-block-text-containter -->
	
	<div class ="responsive-block-misc-containter">
	</div><!--responsove-block-misc-containter -->
	
	<div class="responsive-clear" style="clear:both;"></div>

</div><!--close: responsove-block-caontainter -->


echo '<p class="thebroad-programs-responsive-menu">';
echo '<a href ="/pastprograms#'. $row->nid.'" class="side-menu-responsive-a"/ >';
echo $data->field_field_program_date[0]['rendered']['#markup'] .'<br>';
echo  $title.'</a>';
echo '</p>';


?>

<?php
$img_url = 'public://myimagefolder/imgfilename.jpg';  // the orig image uri
$style = 'thumbnail';  // or any other custom image style you've created via /admin/config/media/image-styles
?>
<img src="<?php print image_style_url($style, $img_path) ?>>


 <?php print $data->field_field_file; ?>
 <?php

 echo ‘<img width=”100″ height=”130″ src=”‘.$data->field_field_image[0]['rendered']['#path']['path'].’” typeof=”foaf:Image” />’;


print drupal_render($data->field_field_video); 


$file = file_load($node->field_slider_image['und'][0]['fid']);

// Filename
print $file->filename;

// URI e.g. public://image.jpg
print $file->uri;

// URL e.g. /sites/default/files/image.jpg
print file_create_url($file->uri);

?>

<?php
/**
 * For additional parameters see
 * http://api.drupal.org/api/drupal/modules!image!image.field.inc/function/theme_image_formatter/7
 */
?>
<?php $variables = array('item' => array('uri' => $row->{$field->field_alias})); ?>
<?php $variables['image_style'] = 'thumbnail'; ?>
<?php print theme_image_formatter($variables); ?>


//From carousel header
<script>
(function($) {
    $(document ).ready(function() {

    console.log('jquery dom manipulation');
  
$('.view-display-id-jcarousel div.view-header').prepend('<div id="thebroad-featured-artist-title-jcarousel"><h1>Featured Artists</h1></div>');

var all = '<div id="thebroad-featured-artist-controls-mobile"></div>';
var after = '';
var clear ='<div style="clear:both;"></div>';
var  a = ('jcarousel-prev-horizont', 'jcarousel-next-horizontal');

$('.jcarousel-prev').addClass('jcarousel-controls');
$('.jcarousel-next').addClass('jcarousel-controls');

$('.jcarousel-prev-horizontal').append('<div id ="thebroad-featured-artist-scroll-text" class="jcarousel-controls"><h3>Swipe To See More</h3></div>');

$(".jcarousel-controls").wrapAll(all);
$("#thebroad-featured-artist-controls").append(clear);
   
 });
})(jQuery);
</script> 

<div id="thebroad-featured-artist-title-jcarousel-responsive"><h1>Featured Artists</h1></div>
<script>
(function($) {
    $(document ).ready(function() {

    console.log('responsive jquery dom manipulation');
  
$('#vscc_controls_previous_art_page_bottom_carousel-jcarousel_responsive').after('<div id ="thebroad-featured-artist-scroll-text-responsive" class="jcarousel-controls-responsive"><h3>Swipe To See More</h3></div>');
   
 });
})(jQuery);
</script> 

//this goes in /connect
<script>
(function($) {
    		$( document ).ready(function() {
    		$("h1").attr("style", "color: #000; ");
            $(".region-sidebar-second div.block-inner").attr("style", "width: 300px;  margin: 0 auto;");
            $(".node-content").attr("style", "width: 580px;");
			$(".region-sidebar-second").attr("style", "width: 300px;  margin-left:-300px;");
   });
})(jQuery);
</script>