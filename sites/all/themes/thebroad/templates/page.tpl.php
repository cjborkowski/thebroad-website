<?php
/**
 * @file
 * Adaptivetheme implementation to display a single Drupal page.
 *
 * REV 255
 * ###  Full Width Wrappers  ###
 *
 * This page template that has 100% width wrappers, which effectively
 * divide the page up into sections to you can style with full width
 * backgrounds. AT Commerce uses markup similar to this to achieve
 * its style - its worth checking out to see how I did this.
 *
 * To use copy this to your subtheme and rename it page.tpl.php,
 * or enable this in theme settings under "Site Tweaks".
 *
 * Available variables:
 *
 * Adaptivetheme supplied variables:
 * - $site_logo: Themed logo - linked to front with alt attribute.
 * - $site_name: Site name linked to the homepage.
 * - $site_name_unlinked: Site name without any link.
 * - $hide_site_name: Toggles the visibility of the site name.
 * - $visibility: Holds the class .element-invisible or is empty.
 * - $primary_navigation: Themed Main menu.
 * - $secondary_navigation: Themed Secondary/user menu.
 * - $primary_local_tasks: Split local tasks - primary.
 * - $secondary_local_tasks: Split local tasks - secondary.
 * - $tag: Prints the wrapper element for the main content.
 * - $is_mobile: Bool, requires the Browscap module to return TRUE for mobile
 *   devices. Use to test for a mobile context.
 * - *_attributes: attributes for various site elements, usually holds id, class
 *   or role attributes.
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Core Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * Adaptivetheme Regions:
 * - $page['leaderboard']: full width at the very top of the page
 * - $page['menu_bar']: menu blocks placed here will be styled horizontal
 * - $page['secondary_content']: full width just above the main columns
 * - $page['content_aside']: like a main content bottom region
 * - $page['tertiary_content']: full width just above the footer
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see adaptivetheme_preprocess_page()
 * @see adaptivetheme_process_page()
 */
 
drupal_add_library('system', 'ui.accordion');
//drupal_add_css(drupal_get_path('theme', 'thebroad') .'/css/flexi-extra.css', array('weight' => 100,'type' => 'file', 'preprocess' => FALSE));
//drupal_add_js('jQuery(document).ready(function(){jQuery("#accordion").accordion();});', 'inline');
if ($is_mobile == TRUE){ 
drupal_add_js(drupal_get_path('theme', 'thebroad') .'/scripts/thebroad-mobile.js', 'file');
}

  $connectFix ='(function($) {
    			$( document ).ready(function() {
    			$("h1").attr("style", "color: #000; ");
            	$(".region-sidebar-second div.block-inner").attr("style", "width: 300px;  margin: 0 auto;");
            	$(".node-content").attr("style", "width: 580px;");
				$(".region-sidebar-second").attr("style", "width: 300px;  margin-left:-300px;");
  				 });
				})(jQuery);';
  
  
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

<?php print $false ; ?>
<?php print '<!-- path is '. $path.' -->'; ?>
<?php print '<!-- path_alias is '. $path_alias.' -->'; ?>
<!-- thebroad/templates/page.tpl.php Adaptive Theme master layout file -->
<div id="page-wrapper">
  <div id="page" class="<?php print $classes; ?>">

    <?php if($page['leaderboard']): ?>
      <div id="leaderboard-wrapper">
        <div class="container clearfix">
          <?php print render($page['leaderboard']); ?>
        </div>
      </div>
    <?php endif; ?>

 <div id="header-wrapper"><!-- start: header-wrapper. leaderboard and menu bar go in here with thebroad wrapper divs -->
      <div class="container clearfix">
        <header<?php print $header_attributes; ?>>
   <!-----------------------the broad style header------------------------->
   <div id="thebroad-header-wrapper"><!--start: thebroad-header-wrapper -->	 
	 		
	 		<?php if ($site_logo): ?>
     			<div id="thebroad-logo">
     				<?php print $site_logo; ?>
     			</div>
     		<?php endif; ?>
	 		
	 		<?php if ($page['thebroad_social_header']): ?>
	 	    	<div id="thebroad-social-header">
    				<?php print render($page['thebroad_social_header']); ?>
    			</div>
     		<?php endif; ?>
     		<!--slick nav -->
     		<div id ="search-1-click-icon" class="search-toggle"></div>
	 		<div id ="slickmenu-1" class="slickmenu-1-closed"></div>
	 		
     		<?php if ($page['menu_bar'] || $primary_navigation || $secondary_navigation): ?>
      			<div id="thebroad-menubar-wrapper">
     	 		<!-- Navigation elements -->
      				<div id="nav-wrapper">
        				<div class=" clearfix">
        					
          					<!--main menu normally goes here -->
          					<?php print render($page['menu_bar']); ?>
          					<?php if ($primary_navigation): print $primary_navigation; endif; ?>
         					<?php if ($secondary_navigation): print $secondary_navigation; endif; ?>
        				</div>
       				</div><!-- end: nav-wrapper -->
     			</div><!-- end: thebroad-menubar-wrapper -->
     			
      		<?php endif; ?>
    	 <?php if ($page['mobile_search']): ?>
         	<div id ="responsive-search-3" class="responsive-search search-3-invisible">
         		<div id ="responsive-search-inner-wrapper3">
   					<?php print render($page['mobile_search']); ?>
   				</div>
 			</div>
 			<?php endif; ?> 
			<div style="clear: both;"></div>
 </div> <!--end: thebroad-header-wrapper -->
		<!-----------------------the broad style header------------------------->
          
          <?php if ($site_logo || $site_name || $site_slogan): ?>
            <!-- start: Branding -->
            <div<?php print $branding_attributes; ?>>
			  	<?php if ($site_name || $site_slogan): ?>
                <!-- start: Site name and Slogan hgroup -->
                <hgroup<?php print $hgroup_attributes; ?>>
                  <?php if ($site_name): ?><h1<?php print $site_name_attributes; ?>><?php print $site_name; ?></h1>
                  <?php endif; ?>
                  <?php if ($site_slogan): ?><h2<?php print $site_slogan_attributes; ?>><?php print $site_slogan; ?></h2>
                  <?php endif; ?>
                </hgroup><!-- /end #name-and-slogan -->
              <?php endif; ?>
            
            </div><!-- /end #branding -->
          <?php endif; ?>
        	  <?php print render($page['header']); ?>
        </header>
      </div><!-- end: clearfix -->
 </div><!-- end: header-wrapper. leaderboard and menu bar go in here with thebroad wrapper divs -->

<?php if ($page['responsive_menu_bar'] || $page['menu_bar'])  : ?>
    <div id="stuckNav" class="clearfix">
			<div id="stuckWrap">
				<?php if ($site_logo): ?>
     			<div id="thebroad-logo">
     				<?php print $site_logo; ?>
     			</div>
     		<?php endif; ?>
				<!--mobile search -->
				<div id ="search-2-click-icon" class="search-toggle"></div>
				<!-- slickmenu-2 : responsive stuck nav -->
				<div id="slickmenu-2" class="slickmenu-2-closed"></div>
				
				<div id ="smallNav" class="small-nav">
		
			     	<div id ="small-nav-responce" class="small-nav-responsive">
			     	<!-- we're resonsive -->
			    	<?php print render($page['responsive_menu_bar']); ?>
			    	</div>	
			 
				</div> <!--end smallNav -->
			</div> <!-- end stuckWrap -->
			<?php if ($page['mobile_search']): ?>
         	<div id ="responsive-search-2" class="responsive-search search-3-invisible">
         		<div id ="responsive-search-inner-wrapper3">
   					<?php print render($page['mobile_search']); ?>
   				</div>
 			</div>
 			<?php endif; ?> 
			
			<div style="clear: both;"></div>
		</div><!--end stuckNav -->
<?php endif; ?>


    <?php if ($breadcrumb): ?>
      <div id="breadcrumb-wrapper">
        <div class="container clearfix">
          <?php print $breadcrumb; ?>
        </div>
      </div>
    <?php endif; ?>

    <?php if ($messages || $page['help']): ?>
      <div id="messages-help-wrapper">
        <div class="container clearfix">
          <?php print $messages; ?>
          <?php print render($page['help']); ?>
        </div>
      </div>
    <?php endif; ?>

    <div id="content-wrapper">
     <div class="container"><!--start container and drop in mobile search -->
     	
      <div id="columns">
      	<div class="columns-inner clearfix">
         <div id="content-column">
        	<div class="content-inner">
        	
         <!-- mobile sub menu -->
         <?php if ($page['mobile_submenu']): ?>
         	<div id ="responsive-sub-nav" class="sub-nav">
         		<div id ="responsive-sub-nav-inner-wrapper">
   			<?php print render($page['mobile_submenu']); ?>
   				</div>
 			</div>
 		<?php endif; ?>  
 		
 		 <?php if ($page['mobile_feature']): ?>
         	<div id ="responsive-feature" class="responsive-feature">
         		<div id ="responsive-feature-inner-wrapper">
   			<?php print render($page['mobile_feature']); ?>
   				</div>
 			</div>
 		<?php endif; ?> 
 		
         <!--new sortable frontpage slide show only for front add css-->
  <?php if(drupal_is_front_page()) : ?>
  <?php print views_embed_view('new_front_page_slideshow'); ?>
  <?php endif; ?>
  <!-- Three column 3x33 Gpanel -->
  <?php if ($page['three_33_first'] || $page['three_33_second'] || $page['three_33_third']): ?>
    <div class="three-3x33 gpanel clearfix">
      <?php print render($page['three_33_first']); ?>
      <?php print render($page['three_33_second']); ?>
      <?php print render($page['three_33_third']); ?>
    </div>
  <?php endif; ?>

    <?php if ($page['secondary_content']): ?>
      <div id="secondary-content-wrapper">
        <div class="container clearfix">
          <?php print render($page['secondary_content']); ?>
        </div>
      </div>
    <?php endif; ?>
        	

          <?php print render($page['highlighted']); ?>
			<!-- $node->nid can end up as non-property if not evaluated by The if() construct  -->
          <<?php print $tag; ?> id="main-content" class="node-<?php if (isset ($node->nid) ){ print $node->nid;} ?>">

            <?php print render($title_prefix); ?>

            <?php if ($title || $primary_local_tasks || $secondary_local_tasks || $action_links = render($action_links)): ?>
              <header<?php print $content_header_attributes; ?>>

                <?php if ($title): ?>
                  <h1 id="page-title"><?php print $title; ?></h1>
                <?php endif; ?>

                <?php if ($primary_local_tasks || $secondary_local_tasks || $action_links): ?>
                  <div id="tasks">

                    <?php if ($primary_local_tasks): ?>
                      <ul class="tabs primary clearfix"><?php print render($primary_local_tasks); ?></ul>
                    <?php endif; ?>

                    <?php if ($secondary_local_tasks): ?>
                      <ul class="tabs secondary clearfix"><?php print render($secondary_local_tasks); ?></ul>
                    <?php endif; ?>

                    <?php if ($action_links = render($action_links)): ?>
                      <ul class="action-links clearfix"><?php print $action_links; ?></ul>
                    <?php endif; ?>

                  </div>
                <?php endif; ?>

              </header>
            <?php endif; ?>

            <?php if ($content = render($page['content'])): ?>
              <div id="content">
                <?php if(!drupal_is_front_page()) : ?>
              	<?php print $content; ?>
              <?php endif; ?>
              </div>
            <?php endif; ?>

            <?php print $feed_icons; ?>

            <?php print render($title_suffix); // Prints page level contextual links ?>

          </<?php print $tag; ?>>

          <?php print render($page['content_aside']); ?>

        </div></div>

        <?php print render($page['sidebar_first']); ?>
        <?php print render($page['sidebar_second']); ?>

      </div></div>
    </div></div>

    <?php if ($page['tertiary_content']): ?>
      <div id="tertiary-content-wrapper">
        <div class="container clearfix">
          <?php print render($page['tertiary_content']); ?>
        </div>
      </div>
    <?php endif; ?>

    <?php if ($page['footer'] || $page['artcarousel']): ?>
    	<?php if ($is_mobile == FALSE): ?>
      <div id="footer-wrapper">
      	
      	<div id="thebroad-artcarousel-wrapper">
      		<?php print render($page['artcarousel']); ?>
      	</div><!-- end: thebroad-artcarousel-wrapper -->
      	
      	<div id="thebroad-footer-inner-wrapper">
        <div class="container clearfix">
          <footer<?php print $footer_attributes; ?>>
            <?php print render($page['footer']); ?>
          </footer>
        </div>
      </div><!--end :thebroad-footer-inner-wrapper-->
      </div><!--end :thebroad-footer-wrapper-->
    	<?php endif; ?>
	<?php endif; ?> <!--end mobile if -->
	
	<?php if ($is_mobile == TRUE): ?>
		
		<?php if ($page['mobile_subcontent']): ?>
			<div id="responsive-subcontent">
			<?php print render($page['mobile_subcontent']); ?>
			</div>
		<?php endif; ?>
		

		
	 	<div id="responsive-footer">
	 		<!--here's the responsive-footer -->
            <?php print render($page['responsive_footer']); ?>
            <div id="responsive-footer-menu">
            <?php print drupal_render(menu_tree_output(menu_tree_all_data('menu-footer-menu'))); ?>
            
            <div id="responive-copyright">
            	<div id="thebroad-footer-copyright-left">
				<p>©&nbsp;Copyright &nbsp;<?php echo date("Y"); ?>&nbsp;|&nbsp;The Broad Art Foundation</p>
				</div>
				<div id="thebroad-footer-copyright-right">
				<p>All Rights Reserved</p>
				</div>
            	<div style="clear:both;"></div>
            </div>
            
            </div>
   		</div><!--end: responsive-footer -->
	<?php endif; ?> <!--end mobile if -->
  
  </div>
</div>

