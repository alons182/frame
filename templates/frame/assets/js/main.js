;(function($){

  var btnMenu = $('.btn-menu'),
      menu = $('.menu'),
      containerProjects = $('.projects-container'),
      resizeTimer = null;


  btnMenu.on('click', function(){

      menu.toggle();


  });

  $('<h1 class="txt-center">Others Projects</h1>').insertAfter('.project');

  // MENU HOVER FUNCTION (SUBMENU)

  menu.find(".parent").hoverIntent({
      over: function() {
            $(this).find(">.nav-child").slideDown(200 );
          },
      out:  function() {
            $(this).find(">.nav-child").slideUp(200);
          },
      timeout: 200

       });


   $(window).bind('load resize', function() {
     if (resizeTimer) clearTimeout(resizeTimer);
        resizeTimer = setTimeout(portafolio_init('300'), 100);

     //$('.main').height(getWindowHeight()-70-50-$('.header').height());

   });


    containerProjects.find('.projects-item').css({opacity: 0});
    containerProjects.imagesLoaded( function(){
        containerProjects.find('.projects-item').css({opacity: 1});
        containerProjects.isotope({
          itemSelector : '.projects-item',
          layoutMode: 'masonry',
          sortBy: 'order',
          sortAscending: true,
          getSortData: {
            order: function($elem){
              var _order = $elem.hasClass('projects-item') ?
                $elem.attr('data-order'):
                $elem.find('.order').text();
              return parseInt(_order);
            }
          }
        });

        portafolio_init('300');
    });

    function portafolio_init(defaultwidth){

      var contentWidth    = $('.projects-container').width();
      var columnWidth     = defaultwidth;
      var curColCount     = 0;
      var maxColCount     = 0;
      var newColCount     = 0;
      var newColWidth     = 0;
      var featureColWidth = 0;

      curColCount = Math.floor(contentWidth / columnWidth);

      maxColCount = curColCount + 1;
      if((maxColCount - (contentWidth / columnWidth)) > ((contentWidth / columnWidth) - curColCount)){
        newColCount     = curColCount;
      }
      else{
        newColCount = maxColCount;
      }

      newColWidth = contentWidth;
      featureColWidth = contentWidth;


      if(newColCount > 1){
        newColWidth =Math.floor(contentWidth / newColCount);
        featureColWidth = newColWidth * 2;
      }

      $('.projects-item').width(newColWidth);

      $('.featured').width(featureColWidth);

      containerProjects.imagesLoaded(function(){
        containerProjects.isotope({
          masonry:{
            columnWidth: newColWidth
          }
        });

      });

      //ResizeImageContainer($('.projects-item'));
      //ResizeImageContainer($('.product-image'));
    }


    //GALLERY PROJECT

    $('.project-gallery-item').magnificPopup({
      type: 'image',
      gallery:{
        enabled:true
      }
    });


    function getScrollerWidth() {
    	var scr = null;
    	var inn = null;
    	var wNoScroll = 0;
    	var wScroll = 0;

    	// Outer scrolling div
    	scr = document.createElement('div');
    	scr.style.position = 'absolute';
    	scr.style.top = '-1000px';
    	scr.style.left = '-1000px';
    	scr.style.width = '100px';
    	scr.style.height = '50px';
    	// Start with no scrollbar
    	scr.style.overflow = 'hidden';

    	// Inner content div
    	inn = document.createElement('div');
    	inn.style.width = '100%';
    	inn.style.height = '200px';

    	// Put the inner div in the scrolling div
    	scr.appendChild(inn);
    	// Append the scrolling div to the doc
    	document.body.appendChild(scr);

    	// Width of the inner div sans scrollbar
    	wNoScroll = inn.offsetWidth;
    	// Add the scrollbar
    	scr.style.overflow = 'auto';
    	// Width of the inner div width scrollbar
    	wScroll = inn.offsetWidth;

    	// Remove the scrolling div from the doc
    	document.body.removeChild(
    		document.body.lastChild);

    	// Pixel width of the scroller
    	return (wNoScroll - wScroll);
    }

    function getWindowHeight() {
    	var windowHeight=0;
    	if (typeof(window.innerHeight)=='number') {
    		windowHeight=window.innerHeight;
    	} else {
    		if (document.documentElement && document.documentElement.clientHeight) {
    			windowHeight = document.documentElement.clientHeight;
    		} else {
    			if (document.body && document.body.clientHeight) {
    				windowHeight=document.body.clientHeight;
    			}
    		}
    	}
    	return windowHeight;
    }

    function getWindowWidth() {
    	var windowWidth=0;
    	if (typeof(window.innerWidth)=='number') {
    		windowWidth=window.innerWidth;
    	} else {
    		if (document.documentElement && document.documentElement.clientWidth) {
    			windowWidth = document.documentElement.clientWidth;
    		} else {
    			if (document.body && document.body.clientWidth) {
    				windowWidth=document.body.clientWidth;
    			}
    		}
    	}
    	return windowWidth;
    }




})(jQuery);
