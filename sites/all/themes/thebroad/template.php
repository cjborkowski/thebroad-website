<?php

/**
 * @file
 * Process theme data.
 *
 * Use this file to run your theme specific implimentations of theme functions,
 * such preprocess, process, alters, and theme function overrides.
 *
 * Preprocess and process functions are used to modify or create variables for
 * templates and theme functions. They are a common theming tool in Drupal, often
 * used as an alternative to directly editing or adding code to templates. Its
 * worth spending some time to learn more about these functions - they are a
 * powerful way to easily modify the output of any template variable.
 * 
 * Preprocess and Process Functions SEE: http://drupal.org/node/254940#variables-processor
 * 1. Rename each function and instance of "theboad" to match
 *    your subthemes name, e.g. if your theme name is "footheme" then the function
 *    name will be "footheme_preprocess_hook". Tip - you can search/replace
 *    on "theboad".
 * 2. Uncomment the required function to use.
 */


/**
 * Preprocess variables for the html template.
 */
/* -- Delete this line to enable.
function theboad_preprocess_html(&$vars) {
  global $theme_key;

  // Two examples of adding custom classes to the body.
  
  // Add a body class for the active theme name.
  // $vars['classes_array'][] = drupal_html_class($theme_key);

  // Browser/platform sniff - adds body classes such as ipad, webkit, chrome etc.
  // $vars['classes_array'][] = css_browser_selector();

}
// */


/**
 * Process variables for the html template.
 */
/* -- Delete this line if you want to use this function
function theboad_process_html(&$vars) {
}
// */


/**
 * Override or insert variables for the page templates.
 */
/* -- Delete this line if you want to use these functions */
function thebroad_preprocess_page(&$vars) {
    
    $ga="  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-3488045-3']);
		  _gaq.push(['_setCampNameKey', 'false']);
		  _gaq.push(['_setCampSourceKey', 'false']);
		  _gaq.push(['_setCampMediumKey', 'false']);
		  _gaq.push(['_setCampTermKey', 'false']);
		  _gaq.push(['_setCampContentKey', 'false']);
		  _gaq.push(['_trackPageview']);
		  _gaq.push(['_trackPageview', location.pathname + location.search + location.hash]);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();";
    
     drupal_add_js($ga, array('type' => 'inline', 'scope' => 'header'));
	
	$googob="(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-3488045-2', 'thebroad.org');
	ga('send', 'pageview')";

    drupal_add_js($googob, array('type' => 'inline', 'scope' => 'header'));


 	$popup ="//for promo popups 
			function PopUp(hideOrshow) {
			    if (hideOrshow == 'hide') document.getElementById('promo-wrapper').style.display = 'none';
			    else document.getElementById('promo-wrapper').removeAttribute('style');
			}
			window.onload = function () {
			    setTimeout(function () { //to make the popup pop
			        PopUp('show');
			    }, 500);
			    
			    $(document).mouseup(function (e) //to hide the popup on a click outside
				{
				    var container = $('promo-popup');

				    if (!container.is(e.target) // if the target of the click isn't the container...
				        && container.has(e.target).length === 0) // ... nor a descendant of the container
				    {
				        PopUp('hide');
				    }
				});
			}";
 
//   drupal_add_js($popup, array('type' => 'inline', 'scope' => 'header'));
  
 /*
  * LOAD MARKUP IN THE <HEAD> SECTION with coustom encloseures ie. <noscript>
  * USE '#scr"=>$path to load external js 
  	$path = $GLOBALS['base_url'] . '/' . path_to_theme() . '/js/selectivizr-min.js';
 	$facbook2 =' <img height="1" width="1" border="0" alt="" style="display:none" src="https://www.facebook.com/tr?id=313805172102110&amp;ev=NoScript" />';

	 $facebook3 = array(
	 					'#type' => 'markup',
	 					'#markup' => $facbook2,
	 					'#prefix' => '<noscript>',
	 					'#suffix' => '</noscript>',
	 					'#weight' => '99'
 	 					);
	 drupal_add_html_head($facebook3, 'facebook3');*/
}//end preprocess function

/*
function thebroad_process_page(&$vars) {
}
*/


/**
 * Override or insert variables into the node templates.
 */
/* -- Delete this line if you want to use these functions
function theboad_preprocess_node(&$vars) {
}
function theboad_process_node(&$vars) {
}
// */


/**
 * Override or insert variables into the comment templates.
 */
/* -- Delete this line if you want to use these functions
function theboad_preprocess_comment(&$vars) {
}
function theboad_process_comment(&$vars) {
}
// */


/**
 * Override or insert variables into the block templates.
 */
/* -- Delete this line if you want to use these functions
function theboad_preprocess_block(&$vars) {
}
function theboad_process_block(&$vars) {
}
// */


/**
 *FOR REFERENCE ONLY
 *
 * Returns HTML for a taxonomy field.
 *
 * Output taxonomy term fields as unordered lists.
 */

 /**
 function babble_at_subtheme_field__taxonomy_term_reference($vars) {
	$output = '';

	// Render the label, if it's not hidden.
	if (!$vars['label_hidden']) {
		$output .= '<h4 class="label"' . $vars['title_attributes'] . '>' . $vars['label'] . ':&nbsp;</h4>';
	}

	// Render the items.
	$output .= '
<ul class="field-items conservationreel-term-ul"' . $vars['content_attributes'] . '>
	';
	foreach ($vars['items'] as $delta => $item) {
		$classes = 'field-item ' . ($delta % 2 ? 'odd' : 'even');
		$output .= '
	<li class="' . $classes . ' conservationreel-term-li"' . $vars['item_attributes'][$delta] . '>
		' . drupal_render($item) . '
	</li>';
	}

	$output .= '
</ul>';

	// Render the top-level wrapper element.
	$tag = $vars['tag'];
	$output = "<$tag class=\"" . $vars['classes'] . '"' . $vars['attributes'] . '>' . $output . "</$tag>";

	return $output;
}
*/
/**
 * FOR REFERENCE
 * ADDDING JS TO A VIEW
 */
/*
function THEME_preprocess_views_view(&$vars) {
   $view = $vars['view'];
   // Make sure it's the correct view
  if($view->name == 'your-view-name') {
     // add needed javascript
     drupal_add_js(drupal_get_path('theme', 'your-theme') . '/your-js.js');
     // add needed stylesheet
     drupal_add_css(drupal_get_path('theme', 'your-theme') .'/your-css.css');
  }
} 
 * /
 /*
 * FOR REFERENCE
 * PREPCESS ALL LINKS
 */
/** 
 function  thebroad_preprocess_link(&$vars){
		
	$vars['text'] .= 'Click Me !';
	
}
 */
 /* pre-process views
  * 
  */
function thebroad_preprocess_views_view(&$vars) {
	$view = $vars['view'];
	//dpm($vars);
	if ('featured_artwork' == $view -> name) {
		// Add desired manipulations for all 'featured_artwork' views
		//dpm($vars);
		//drupal_add_js(drupal_get_path('theme', 'thebroad') . '/scripts/jquery.carouFredSel-6.2.1-packed.js');
		//drupal_add_js(drupal_get_path('theme', 'thebroad') . '/scripts/thebroad-views.js');
		if ('art_pages_bottom_carousel' == $view -> current_display) {
			// Add desired manipulations for the 'videos' display only
			//dpm($vars);
		}
		if('art_pages_slideshow'){
				
				$construction ='<a href="http://broadartfoundation.org/featuredArtists.html?sid=31" target="_blank">
				<img src="http://dev.thebroad.org/sites/default/files/images/under-construction-01.jpg" alt="Under Construction" width="960" height="425"/>
  				</a><!-- loaded from template.php preprocess function -->';		
				$count = count($view->result);
				$row = new stdClass();
				$row->under_construcion = $construction;
				$view->result[]= $row;			
				/*
				$vars['fields'][]= $row;
				dpm($view->result);	 
				dpm($vars['rows']); 
				dpm('count is: '.$count); */
		}

	}//end if
	
	//press view
	if ('press_release_pages' == $view -> name) {
			
	}// end if	
	
}//end function


/**
 * Override or insert variables into the node templates.
 * see GPANEL DOCUMENTAION:  http://adaptivethemes.com/documentation/using-gpanels
 */

function thebroad_preprocess_node(&$vars) {
  
  // Setup variables to hold the regions blocks, so we can print them in node.tpl.php
  if ($blocks_three_33_first = block_get_blocks_by_region('three_33_first')) {
    $vars['three_33_first'] = $blocks_three_33_first;
    $vars['three_33_first']['#theme_wrappers'] = array('region');
    $vars['three_33_first']['#region'] = 'three_33_first';
  }
  else {
    $vars['three_33_first'] = '';
  }
  if ($blocks_three_33_second = block_get_blocks_by_region('three_33_second')) {
    $vars['three_33_second'] = $blocks_three_33_second;
    $vars['three_33_second']['#theme_wrappers'] = array('region');
    $vars['three_33_second']['#region'] = 'three_33_second';
  }
  else {
    $vars['three_33_second'] = '';
  }
  if ($blocks_three_33_third = block_get_blocks_by_region('three_33_third')) {
    $vars['three_33_third'] = $blocks_three_33_third;
    $vars['three_33_third']['#theme_wrappers'] = array('region');
    $vars['three_33_third']['#region'] = 'three_33_third';
  }
  else {
    $vars['three_33_third'] = '';
  } //end :variables to hold the regions blocks
  
  
  // Various Node types and what to do
  
   $node =& $vars['node'];

    switch($vars['type']) {
        case 'artist_bio_pages':
           
		    $vars['foo'] = array('foo','bar' );
			$vars['foo-title'] = $node->title;
			
			$results = db_query("SELECT DISTINCT field_artist__node.nid AS field_artist__node_nid, 
             node.nid AS nid, node.title AS node_title,
             node.sticky AS node_sticky 
             FROM node 
             LEFT JOIN {field_data_field_artist_} field_data_field_artist_ ON node.nid = field_data_field_artist_.field_artist__target_id 
             AND (field_data_field_artist_.entity_type = 'node' AND field_data_field_artist_.deleted = '0') 
             LEFT JOIN {node} field_artist__node ON field_data_field_artist_.entity_id = field_artist__node.nid 
             WHERE (( (node.title = '{$node->title}') )AND(( (node.type IN ('artist_bio_pages')) ))) ORDER BY node_sticky DESC");

			$vars['artwork'] = array();
		   	 
			 //dpm("length is:". count($results));
			 
			 $i =0;
			 foreach($results as $row) {
                   $vars['artwork'][] = node_view(node_load($row->field_artist__node_nid), 'teaser');     
				   unset($vars['artwork'][$i]['links']);
				   
			 
					$i ++;
			 }
			 
		  // dpm($vars);
		   
		   break;
           case 'page' :
			
			/*dpm($vars['title'].'NID:'. $vars['nid']);
			if ($vars['title'] = 'Site Map' || $vars['nid'] =107){
				
			$vars['title'] = '';
			dpm ('title is now:'. $vars['title']);
			} */

			break;
			}
			
			
		
}//end: thebroad_presprocess_node()

/* 
 * Impliments hook_file_link()
 * Theme Function to globaly remove file icons on file fields
 * add $icon in return '' string to bring them back
 */
function thebroad_file_link($vars) {
	$file = $vars['file'];
	$icon_directory = $vars['icon_directory'];
	$url = file_create_url($file -> uri);
	$icon = theme('file_icon', array('file' => $file, 'icon_directory' => $icon_directory));
	$options = array('attributes' => array('type' => $file -> filemime . '; length=' . $file -> filesize,  ), );
	if (empty($file -> description)) {
		$link_text = $file -> filename;
	} else {
		$link_text = $file -> description;
		$options['attributes']['title'] = check_plain($file -> filename);
	}
    $options['attributes']['target'] = '_blank';
	return '<span class="file thebroad-file-field">' . l($link_text, $url, $options) . '</span>';
}

function thebroad_preprocess_field(&$vars, $hook) {
	
}

