;(function($){

  var btnMenu = $('.btn-menu'),
      menu = $('.menu'),
      containerProjects = $('.projects-container');



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



   var resizeTimer = null;

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

     //create thumbs and append them
      var thumbnails=$(".thumbnails");
      var wrapper_wt=thumbnails.find("img:first").width();
      var count = thumbnails.find("img").length;
      var width_thumbnails = count * wrapper_wt;

      thumbnails.css({width:width_thumbnails+ "px"});



    var thumbnailsScroller = function(elem){

          var wrapper =	elem;

          var thumbnails	= wrapper.find('.thumbnails');
          var inactiveMargin = thumbnails.find("img:first").width();
          //wrapper.scrollLeft(thumbnails.outerWidth());
          wrapper.bind('mousemove',function(e){

                  var wrapperWidth = wrapper.width();
                  var menuWidth = thumbnails.outerWidth() + 2 * inactiveMargin;
                  var left = (e.pageX - wrapper.offset().left) * (menuWidth - wrapperWidth) / wrapperWidth - inactiveMargin;

                  wrapper.scrollLeft(left);
          });
    };



    thumbnailsScroller($('.project-gallery').find('.thumbnails-wrapper'));







})(jQuery);
