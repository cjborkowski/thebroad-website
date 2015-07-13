<?php
/**
 * @file
 * Adaptivetheme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Adaptivetheme Variables:
 * - $html_attributes: structure attributes, includes the lang and dir attributes
 *   by default, use $vars['html_attributes_array'] to add attributes in preprcess
 * - $polyfills: prints IE conditional polyfill scripts enabled via theme
 *   settings.
 * - $skip_link_target: prints an ID for the skip navigation target, set in
 *   theme settings.
 * - $is_mobile: Bool, requires the Browscap module to return TRUE for mobile
 *   devices. Use to test for a mobile context.
 *
 * Available Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 * @see adaptivetheme_preprocess_html()
 * @see adaptivetheme_process_html()
 */
  
  $connectFix ='<script>
			(function($) {
    		$( document ).ready(function() {
    		$(\'h1\').attr("style", "color: #000; ");
            $(\'.region-sidebar-second div.block-inner\').attr("style", "width: 300px;  margin: 0 auto;");
            $(\'.node-content\').attr("style", "width: 580px;");
			$(\'.region-sidebar-second\').attr("style", "width: 300px;  margin-left:-300px;");
  			 });
			})(jQuery);
			</script>';
  
  
  $path_to_thebroad = drupal_get_path('theme', 'thebroad');
  $path = current_path();
  $path_alias = drupal_lookup_path('alias',$path);
  $false ="<!--is mobile-->";
  
  if ($is_mobile == FALSE){
  	$false = "<!--is not mobile-->";
  	if($path_alias == "connect"){
  		drupal_add_js($connectFix, array('type' => 'inline', 'scope' => 'header'));
  	}
  }
    
?>
<!DOCTYPE html>
<!--[if IEMobile 7]><html class="iem7"<?php print $html_attributes; ?>><![endif]-->
<!--[if lte IE 6]><html class="lt-ie9 lt-ie8 lt-ie7"<?php print $html_attributes; ?>><![endif]-->
<!--[if (IE 7)&(!IEMobile)]><html class="lt-ie9 lt-ie8"<?php print $html_attributes; ?>><![endif]-->
<!--[if IE 8]><html class="lt-ie9"<?php print $html_attributes; ?>><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)]><!--><html<?php print $html_attributes . $rdf_namespaces; ?>><!--<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<?php print $head; ?>
<title><?php print $head_title; ?></title>
<?php print $styles; ?>
<?php print $scripts; ?>
<?php print $polyfills; ?>
<?php //include  $path_to_thebroad. "/inc/facebook-remarketing.inc"; ?>
<!--<link type="text/css" rel="stylesheet" href="http://www.thebroad.org/sites/all/themes/thebroad/css/flexi-extra.css" media="all" />-->
</head>
<body class="<?php print $classes; ?>"<?php print $attributes; ?>>
	<?php //include  $path_to_thebroad. "/inc/google-tag.inc"; 
	 if ($is_mobile == FALSE): ?>
	 <!-- is not mobile so load mailchimp -->
	<?php include  $path_to_thebroad. "/inc/mail-chimp.inc"; ?>
	<?php //include  $path_to_thebroad. "/inc/popup-promo.inc"; ?>
	   <?php endif; ?>
  <div id="skip-link">
    <a href="<?php print $skip_link_target; ?>" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
  <!--TO:RECLAIM THIS SPACE ELIMNATE BLOCK LEVEL -->
 <?php include  $path_to_thebroad. "/inc/google-addwords.inc"; ?>
 <!-- CJB MEDIA SOLUTIONS -->
<!-- DRUPAL 7 SITE FOR THE BROAD MUSEUM -->

</body>
</html>
