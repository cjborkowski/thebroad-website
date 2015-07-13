//main.js
jQuery(document).ready(function($) {

//some variable and logging for responsive stuff
var ligboxImages = $( '.thebroad-lightbox-image' ).length;
var nodeCount = $('.node').length;
////console.log ('there are: '+nodeCount +' nodes' );
////console.log ('there are: '+ligboxImages +' lightbox Images' );
//var nav1ClassState = $('#slickmenu-1 a').first().attr("class");
//var nav2ClassState = $('#slickmenu-2 a').first().attr("class");
////console.log('#slickmenu-1 a class is: '+ nav1ClassState);
////console.log('#slickmenu-2 a class is: ' + nav2ClassState);
//var navState = getCookie('navigation');
////console.log('navState cookie is:' +navState);


var w=window,d=document,e=d.documentElement,g=d.getElementsByTagName('body')[0],x=w.innerWidth||e.clientWidth||g.clientWidth,y=w.innerHeight||e.clientHeight||g.clientHeight;
////console.log(Object.keys(w));
////console.log ('widow is: '+w + 'document is' +d);
////console.log ('viewpoint is: '+ x + 'X' + y);

var widthMatch = window.matchMedia("(min-height: 500px)").matches;
function getOrientationValue (mediaQueryList) {
    ////console.log('mediaMeatch are: '+ mediaQueryList.matches);
}
portraitOrientationCheck = window.matchMedia("(orientation: portrait)");
portraitOrientationCheck.addListener(getOrientationValue);

////console.log('orientationCheck: '+portraitOrientationCheck);

$( '#thebroad-lightbox' ).each(function() {
  var nodeligboxImages = $(this).next('.thebroad-lightbox-image' ).length;
  ////console.log('node- has '+ nodeligboxImages); 
});

//countdown clock
	$(function() {
	    var BigDay = new Date("20 Sept 2015, 00:00:00");
	    var msPerDay = 24 * 60 * 60 * 1000 ;


	    $(function() {
	        var today = new Date();
	        var timeLeft = (BigDay.getTime() - today.getTime());

	        var e_daysLeft = timeLeft / msPerDay;
	        var daysLeft = Math.floor(e_daysLeft);

	        var timeString = daysLeft;
	        $('#countdown').prepend(timeString);
	    });
	});

window.onresize = function() {
		var newWidth = $(window).width();
		//console.log('change width is:' + newWidth);
		
		$('#block-system-main-menu').slicknav('close');
		
		if (newWidth < 500) {
			var stuckHeight = 295;
			////console.log('less than 500. newWidth is:' +newWidth );
		}
		
		if (newWidth < 1024) {
			var stuckHeight = 295;
			//$('.search-toggle').css({ "top": "36px"});
			////console.log('less than 1024. newWidth is:' +newWidth );
			
		}
		
		if (newWidth > 1024){
		////console.log('hide responive search 3 because winWidth is greater than 1024. newWidth is:' +newWidth );
		//TODO: USE MEDIA QUERIES FOR CSS 
		// $('.search-toggle').css({ "top": "25px"});
		 $( "#responsive-search-3" ).hide();
		 $( "#responsive-search-2" ).hide();
		 $('#block-multiblock-2 ul, #block-multiblock-4 ul ').slicknav('close');
		 
		}		
	}; 
//match media section /not jQuery
var winWidth = $(window).width();
//console.log('winWidth is: '+ winWidth);
var headwrapper = $('#header-wrapper').height();
//console.log ('head-warpper height is: '+headwrapper);

	function setHeaderHeight() {

		var setHeader = new Object();
		//defaults for desptop
		//header-wrapper
		var searchOpen1 = 230;
		var navOpen1 = 380;
		var headerWapperClose1 = 78;
		//stuckNav
		var searchOpen2 = 230;
		var navOpen2 = 330;
		var headerWapperClose2 = 78;

		//small devices 3gs etc
		var mql = window.matchMedia("screen and (min-width: 320px) and (max-width: 1136px)and (orientation : portrait) and (-webkit-device-pixel-ratio: 1)");
		if (mql.matches) {
			//header-wrapper
			var searchOpen1 = 140;
			var navOpen1 = 305;
			var headerWapperClose1 = 78;
			//stuckNav
			var searchOpen2 = 140;
			var navOpen2 = 305;
			var headerWapperClose2 = 78;
			//console.log("mediaMatches running screen and (min-width: 320px) and (max-width: 1136px)and (orientation : portrait) and (-webkit-device-pixel-ratio: 1)")
		}
        //modern portrait iphone 4-6
		var mql = window.matchMedia("screen and (min-width: 320px) and (max-width: 1136px)and (orientation : portrait) and (-webkit-device-pixel-ratio: 2)");
		if (mql.matches) {// if media query matches
			//header-wrapper
			var searchOpen1 = 120;
			var navOpen1 = 305;
			var headerWapperClose1 = 78;
			//stuckNav
			var searchOpen2 = 120;
			var navOpen2 = 305;
			var headerWapperClose2 = 78;
			//console.log('matchMedia running at CELL PORTRAIT (min-width: 320px) and (max-width: 1136px)and (orientation : portrait)and (-webkit-device-pixel-ratio: 2) ');
		}
		
		//modern landscape
		var mql = window.matchMedia("screen and (min-width: 320px) and (max-width: 1136px)and (orientation : landscape) and (-webkit-device-pixel-ratio: 2)");
		if (mql.matches) {// if media query matches
			//header-wrapper
			var searchOpen1 = 220;
			var navOpen1 = 305;
			var headerWapperClose1 = 78;
			//stuckNav
			var searchOpen2 = 220;
			var navOpen2 = 305;
			var headerWapperClose2 = 78;
			//console.log('matchMedia running at CELL LANDSCAPE (min-width: 320px) and (max-width: 1136px) and (orientation : landscape) and (-webkit-device-pixel-ratio: 2) ');

		}

		//desktop
		var mql = window.matchMedia("screen and (min-width: 992px) ");
		if (mql.matches) {// if media query matches
			//header-wrapper
			var searchOpen1 = 230;
			var navOpen1 = 380;
			var headerWapperClose1 = 78;
			//stuckNav
			var searchOpen2 = 160;
			var navOpen2 = 330;
			var headerWapperClose2 = 78;

			//console.log('matchMedia running at DESKTOP (min-width: 992px) ');

		}

		//desktop
		var mql = window.matchMedia("screen and (min-width:363px) and (max-width:1024px)");
		if (mql.matches) {// if media query matches
			//header-wrapper
			var searchOpen1 = 160;
			var navOpen1 = 380;
			var headerWapperClose1 = 78;
			//stuckNav
			var searchOpen2 = 120;
			var navOpen2 = 330;
			var headerWapperClose2 = 78;

			//console.log("matchMedia running at DESKTOP 2 screen and (min-width:363px) and (max-width:1024px)");

		}

		setHeader = [searchOpen1, navOpen1, headerWapperClose1, searchOpen2, navOpen2, headerWapperClose2];

		return setHeader;

	}

var navHeight = setHeaderHeight();

//console.log ('navHeight  array is searchOpen1: ' + navHeight[0] +' navOpen1: '+ navHeight[1] +' headerWapperClose1: '+navHeight[2] +' searchOpen2: ' +navHeight[3] +' navOpen2: '+ navHeight[4] +' headerWapperClose2: '+ navHeight[5] );

//the navHeight[] array order searchOpen1 , navOpen1 , headerWapperClose1 , searchOpen2 , navOpen2 , headerWapperClose2

// Code that uses jQuery's $ can follow here.

/*Toggle Search TODO:EXPAND THIS SECTION FOR CONDIDITONS TODO:SPLIT FOR 2*/
$('#responsive-search-3').hide();
$('#responsive-search-2').hide();

$( "#search-1-click-icon" ).click(function() {
   	//console.log('#search-1-click-icon clicked');
  
  	if($('#slickmenu-1').hasClass('slickmenu-1-open')){
  	//console.log('Search click slickmenu-1 open. 1ST IF #header-wrapper:' +navHeight[0] );
  	$('#block-system-main-menu, #block-multiblock-2 ul, #block-multiblock-4 ul').slicknav('close');
  	$('#header-wrapper').height(navHeight[0]);	
  	$( "#responsive-search-3" ).toggle( "fast", function() {
   	$( this ).toggleClass( 'search-3-visible' );
    });

    }
  	
  	if (!$("#responsive-search-3" ).hasClass('search-3-visible') ){
  	$('#header-wrapper').height(navHeight[0]);	
  	//console.log('Closed. ELSE #header-wrapper:' +navHeight[0] );
  	}
   
  	if( $("#responsive-search-3" ).hasClass('search-3-visible')){
  	$('#header-wrapper').height(navHeight[2]);
  	//console.log('Open IF #header-wrapper: ' +navHeight[2]);
  	} 
  	  	
	$( "#responsive-search-3" ).toggle( "fast", function() {
   	$( this ).toggleClass( 'search-3-visible' );
    });
  	
});

//the array navHeight[] order searchOpen1 , navOpen1 , headerWapperClose1 , searchOpen2 , navOpen2 , headerWapperClose2
$( "#search-2-click-icon" ).click(function() {
   //console.log('#search-2-click-icon clicked');
  
  	if($('#slickmenu-2').hasClass('slickmenu-2-open')){
  	//console.log('Search click slickmenu-2 open. #search-2-click-icon 1ST IF #header-wrapper:' +navHeight[0] );
  	$('#block-multiblock-2 ul, #block-multiblock-4 ul').slicknav('close');;
  	$('#header-wrapper').height(navHeight[3]);	
  	$( "#responsive-search-2" ).toggle( "fast", function() {
   	$( this ).toggleClass( 'search-2-visible' );
    });

    }
  	
  	if (!$("#responsive-search-2" ).hasClass('search-2-visible') ){
  	$('#stuckNav').height(navHeight[3]);	
  	//console.log('Closed. ELSE #header-wrapper:' +navHeight[3]);
  	}
   
  	if( $("#responsive-search-2" ).hasClass('search-2-visible')){
  	$('#stuckNav').height(navHeight[5]);
  	//console.log('Open IF #header-wrapper: ' +searchClose);
  	} 
  	  	
	$( "#responsive-search-2" ).toggle( "fast", function() {
   	$( this ).toggleClass( 'search-2-visible' );
    });
  	
});

//the array navHeight[] order searchOpen1 , navOpen1 , headerWapperClose1 , searchOpen2 , navOpen2 , headerWapperClose2

$('#block-system-main-menu').slicknav({
		prependTo:'#slickmenu-1',
		label: "",
		'open': function(trigger){
			
			if( $('#responsive-search-3' ).hasClass('search-3-visible') ){
				$( '#responsive-search-3').toggle();
   				$( '#responsive-search-3').removeClass( 'search-3-visible' );	
			}    		
				
			$('#slickmenu-1').removeClass( "slickmenu-1-closed" );
			$('#slickmenu-1').addClass( "slickmenu-1-open" );	
			$('#header-wrapper').height(navHeight[1]);	
			//console.log('#slickmenu-1 open #header-wrapper:'+navHeight[1]);
			$('#block-system-main-menu-2 ul').slicknav('close');
		},
		'close': function(trigger){
			
			$('#slickmenu-1').removeClass( "slickmenu-1-open" );
			$('#slickmenu-1').addClass( "slickmenu-1-closed" );
			
			if( ! $('#responsive-search-3' ).hasClass('search-3-visible') && $('#responsive-search-3').css('display') === 'block'  ){
			$('#header-wrapper').height(navHeight[0]);
			//console.log('search was opend while nav was in an open state');
			$( '#responsive-search-3').toggle();
   			$( '#responsive-search-3').addClass( 'search-3-visible' );
			
			} else {
			
			$('#header-wrapper').height(navHeight[2]);
			//console.log('#slickmenu-1 close #header-wrapper set to: '+navHeight[2] );
			
			}	
		}
});

//setHeader =    [searchOpen1 , navOpen1 , headerWapperClose1 , searchOpen2 , navOpen2 , headerWapperClose2 ]
//navHeight is' + navHeight[0] + navHeight[1] + navHeight[2] +navHeight[3] + navHeight[4] + navHeight[5] 
//slickmenu-2
$('#block-multiblock-2 ul, #block-multiblock-3 ul, #block-multiblock-4 ul ').slicknav({
		prependTo:'#slickmenu-2',
		label: "",
		'open': function(trigger){
			
			if( $('#responsive-search-2' ).hasClass('search-2-visible') ){
				$( '#responsive-search-2').toggle();
   				$( '#responsive-search-2').removeClass( 'search-2-visible' );	
			} 
			
			
			$('#block-system-main-menu').slicknav('close');
			$('#slickmenu-2').removeClass( "slickmenu-2-closed" );
			$('#slickmenu-2').addClass( "slickmenu-2-open" );	
			$('#stuckNav').height( navHeight[4] );
			//console.log('#slickmenu-2 open #header-wrapper set to :' +navHeight[4]);
			
		},
		'close': function(trigger){
			
			$('#stuckNav').addClass('display');

			$('#slickmenu-2').removeClass( "slickmenu-2-open" );
			$('#slickmenu-2').addClass( "slickmenu-2-closed" );
			
			if( ! $('#responsive-search-2' ).hasClass('search-2-visible') && $('#responsive-search-2').css('display') === 'block'  ){
			$('#header-wrapper').height(navHeight[3]);
			//console.log('search 2 was opend while nav 2 was in an open state #head-wrapper set to'+navHeight[3]);
			$( '#responsive-search-2').toggle();
   			$( '#responsive-search-2').addClass( 'search-2-visible' );
			
			} else {
			
			$('#stuckNav').height(navHeight[5]);
			//console.log('#slickmenu-2 close #header-wrapper set to: '+ navHeight[5] );
		
		}
	}
});

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) != -1) return c.substring(name.length,c.length);
    }
    return "";
}

   /*$(function() { 
	//console.log('swipe function running');
	var count=0;
	$("#views_slideshow_cycle_main_new_front_page_slideshow-default").swipe( {
        //Generic swipe handler for all directions
        swipeLeft:function(event, direction, distance, duration, fingerCount) {
          //console.log("You swiped " + direction + " " + ++count + " times " );  
        },
        //Default is 75px, set to 0 for demo so any distance triggers swipe
        threshold:0
      });
   }); */

/*
var swipeOptions=
	{
		swipeLeft:swipeLeft,
		swipeRight:swipeRight,
		threshold:30
	}
	$(function()
	{	
		//console.log('swipe function running');
		//Enable swiping...
		//$("#views_slideshow_cycle_main_new_front_page_slideshow-default").swipe( swipeOptions );
		$('div.view-new-front-page-slideshow').swipe( swipeOptions );
		
	});

	//Swipe handlers.
	//The only arg passed is the original touch event object			
	function swipeLeft(event, direction)
	{
		$('#views_slideshow_controls_text_next_new_front_page_slideshow-default a').trigger('click');
		//console.log('swipe left');
	}
	function swipeRight(event, direction)
	{
		$('#views_slideshow_controls_text_previous_new_front_page_slideshow-default a').trigger('click');
		//console.log('swipe right');
	}

*/

//Blocks for mobile
/*
$('.box_title').addClass('thebroad-mobile-hide');
$('.box_details').addClass('thebroad-mobile-hide');

$('.box_title').each(function() {
	 var mobileTitle =$(this).text();
	 //console.log('box_title:' +mobileTitle);
     $(this).closest('.thebroad-frontpage-3x3-block').prepend('<div class="mobile-box-title"><h1 class="mobile-unhide">'+mobileTitle+'</h1></div>');
}); */

/*
$('.thebroad-frontpage-3x3-block').each(function() {
  var mobileTitle ='';
  var mobileTitle =+ $('.box_title').text();
  //console.log('box_title:' +mobileTitle);
  
  var i = 0;
var len = mobileTitle.length;

for (; i < len; ) {
    $(this).after('<h1 class="mobile-unhide">'+mobileTitle[i]+'</h1>');
    i++;
}
  
});*/


/*
window.document.addEventListener('orientationchange', function() {
  var iOS = navigator.userAgent.match(/(iPad|iPhone|iPod)/g);
  var viewportmeta = document.querySelector('meta[name="viewport"]');
  if (iOS && viewportmeta) {
    if (viewportmeta.content.match(/width=device-width/)) {
      viewportmeta.content = viewportmeta.content.replace(/width=[^,]+/, 'width=1');
    }
    viewportmeta.content = viewportmeta.content.replace(/width=[^,]+/, 'width=' + window.innerWidth);
  }
  // If you want to hide the address bar on orientation change, uncomment the next line
  // window.scrollTo(0, 0);
}, false);
*/

/*var icons = {
      header: "ui-icon-circle-arrow-e",
      activeHeader: "ui-icon-circle-arrow-s"
    };  */  

$("#accordion").accordion({
	      active: true,
          alwaysOpen: false,
          collapsible: true,
          icons: { "header": "arrow-off", "activeHeader": "arrow-on" },
          autoHeight: false,
          heightStyle: "content"
}); 
        

        
//countdown clock
	/*$(function() {
	    var BigDay = new Date("16 Nov 2014, 00:00:00");
	    var msPerDay = 24 * 60 * 60 * 1000 ;


	    $(function() {
	        var today = new Date();
	        var timeLeft = (BigDay.getTime() - today.getTime());

	        var e_daysLeft = timeLeft / msPerDay;
	        var daysLeft = Math.floor(e_daysLeft);

	        var timeString = daysLeft;
	        $('#countdown').prepend(timeString);
	    });
	});*/

/*Fortmatting string section */

		$('.field-name-field-artist').wrap('<div class ="link-to-artist-page">');
		$('.field-name-field-artist- a').before('more about&nbsp;');
			
/*End Formitting Section,*/


	var winWidth = $(window).width();
	//////console.log(winWidth);
	if (winWidth < 960) {
		$("html").css( "overflow-x", "scroll");
	}

	$(function(){
  		var menuOffset = $('#content-wrapper')[0].offsetTop;
  		$(document).bind('ready scroll',function() {
    	var docScroll = $(document).scrollTop();
    	////console.log ('docScroll is: '+docScroll + ' menuOffset is: '+menuOffset);
    	
    	if(docScroll >= menuOffset) {
    		$('#stuckNav').show();
      		$('#stuckNav').addClass('display');
      		////console.log ('adding class display');
	    } else {	
	      	$('#stuckNav').removeClass('display');
	      	////console.log ('removing class display');
	      	$('#stuckNav').hide();
	    }
	   });
	});

	
	/*$(function(){
  		var menuOffset = $('#content-wrapper')[0].offsetTop;
  		//console.log ('menuOffset is :' +menuOffset);
  		$(document).bind('ready scroll',function() {
    	var docScroll = $(document).scrollTop();
    	//console.log ('docScroll is:' +docScroll);
    	if(docScroll >= menuOffset) {
      		$('#aboutNav').addClass('display');
	    } else {	
	      	$('#aboutNav').removeClass('display');
	    }
	   });
	}); */


	//for auto-select when scrolling side nav
	// Cache selectors
	//var lastId;
	////console.log ('lastId is: ' +lastId);
	var topMenu = $("#aboutNav");
	var topMenuHeight = topMenu.outerHeight() + 40;
	// All list items
	var menuItems = topMenu.find("a");

	var scrollItems = menuItems.map(function() {
		var item = $(this.hash);
		if (item.length) {
			return item;
		}
	});
	var lastId = "";



	// Bind to scroll

	$(window).scroll(function() {
		// Get container scroll position
    	
		var fromTop = $(this).scrollTop() + 200;

		// Get id of current scroll item
		var cur = scrollItems.map(function() {
			if ($(this).offset().top < fromTop)
				return this;
		});
		////console.log('cur is: ' + cur);
		var pathArray = window.location.pathname;
		var host = window.location.host;
		////console.log('path '+pathArray);
		////console.log('menu '+menuItems[0]);
		// Get the id of the current element
		cur = cur[cur.length - 1];
		var id = cur && cur.length ? cur[0].id : "";
		////console.log('id is:' + id);
		//if (lastId !== id) {
		//	lastId = id;
		// Set/remove active class
		menuItems.removeClass("currentPage").end();

		$('a[href="'+pathArray +'#'+ id + '"]').each(function() {
			$(this).addClass("currentPage");

		});
		
		var remove = $('.region-sidebar-second').find('a');
		//whack a mole
		$('#responsive-sub-nav a').removeClass('currentPage');

		//}
	});
		

	var menuItems = topMenu.find("a");
	

	// THE CLICK FUNCTION FOR ALL LEFT NAV
	menuItems.click(function(event) {
		////console.log("HREF IS" + $(this).attr("href"));
		event.preventDefault();
		//calculate destination place
		if ($(this).attr("href") == "/programs" || $(this).attr("href") == "/pastprograms") {
			//console.log("RETURNING FALSE");
			window.location.href = $(this).attr("href");
			return;
		}

		var target = $(this.hash);
		
		/*var output = '';
		for (var property in target ) {
			output += property + ': ' + target[property] + '; ';
		}
		//console.log  ("hash is: "+ target.length);*/

		if (target.length <= 0) {

			window.location.href = $(this).attr("href");
			return;
		}

		var dest = 0;
		if ($(this.hash).offset().top > $(document).height() - $(window).height()) {
			dest = $(document).height() - $(window).height() - 80;
			//console.log("dest is IF:" + dest);
		} else {
			dest = $(this.hash).offset().top - 80;
			//console.log("dest is ELSE:" + dest);
		}

		//go to destination
		////console.log("FINAL DEST IS:" + dest);
		$('html,body').animate({
			scrollTop : dest
		}, 500, 'swing');
	});
	
				
});// see Drupal's JS closures https://drupal.org/node/171213
	
