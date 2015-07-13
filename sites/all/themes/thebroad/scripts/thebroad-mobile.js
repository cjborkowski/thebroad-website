//mobile.js
jQuery(document).ready(function($) {
 
// Code that uses jQuery's $ can follow here.

console.log('thebroad-mobile.js is loaded');
map ='<style>';
map += '.Flexible-container {position: relative; padding-bottom: 56.25%; padding-top: 30px; height: 0; overflow: hidden;}';
map += '.Flexible-container iframe,.Flexible-container object,.Flexible-container embed {position: absolute; top: 0; left: 0; width: 100%; height: 100%;}';
map += '</style><div class="Flexible-container">';
map += '<iframe width=\"425\" height=\"350\" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"  src="https://www.google.com/maps?sll=34.051786100000015,-118.24723030000001&amp;sspn=0.02993955768134445,0.06935582380779835&amp;t=m&amp;q=221+S+Grand+Ave,+Los+Angeles,+CA&amp;dg=opt&amp;ie=UTF8&amp;hq=&amp;hnear=221+S+Grand+Ave,+Los+Angeles,+California+90012&amp;ll=34.057068,-118.250055&amp;spn=0.034132,0.054932&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>'; 
map += '</div>';

//Blocks for mobile

$('.box_title').addClass('thebroad-mobile-hide');
$('.box_details').addClass('thebroad-mobile-hide');



$('.box').removeClass('large_box first_row thebroad-frontpage-3x3-block thebroad-340x290-block thebroad-340x290');
$('div').removeClass('thebroad-frontpage-3x3-block thebroad-340x290-block');

/*Pollyfill section*/


/* acrordion and nodes for building pages */ 
var urlProto = window.location.protocol ;
var hostName = window.location.host;
var pathArray = window.location.pathname.split( '/' );
console.log('urlProto is: '+urlProto);
console.log('hostName is: '+hostName);
console.log('pathArray[1] is: '+pathArray[1]);

$(function() {
   
   
    if ( pathArray[1].indexOf('building') > -1 ) {
        console.log('we have "bulding" in the URL');
        //dev site
        if ( hostName =="dev.thebroad.org" ) {
        $('div.views-row.views-row-8.views-row-even').hide(); 
		$('div.views-row.views-row-8.views-row-even.bottomBorder').hide();
		console.log('we are in the dev site');
		 }
		if ( hostName =="www.thebroad.org" || hostName =="thebroad.org"  ) {
		$('div.views-row.views-row-7.views-row-odd').hide(); 
		$('div.views-row.views-row-7.views-row-odd.bottomBorder').hide();
		console.log('we are in : '+ location.href+ 'site');
		}
    }
   
   if ( pathArray[1].indexOf('about') > -1 ) {
   $('#aboutMapDiv').empty().html(map);
    console.log('we are on the about page');
   }
   
});

//$('div.views-row.views-row-8.views-row-even').hide(); 
//$('div.views-row.views-row-8.views-row-even.bottomBorder').hide(); 
  
  
});// see Drupal's JS closures https://drupal.org/node/171213