/*
*
*   This script manages the carousel slideshow in the
*   index.html page banner and some related hover effects
*
*/

var SLIDE_INTERVAL = 3000;      // time interval for changing interval
var LAYER_TRANS_SPEED = 200;    // transition speed for photo cards

$(document).ready(function() {
    
    /********************************************************************
    *       functions on carousel slide show in the banner
    ********************************************************************/
    
    var slideItems = $('#bannerSlide').children('.carousel-slide');    // slide photos
    var carouselIndexImages = $('.carousel-index-box img');         // slide indicators
    var slideIndex = 0;                                             // current photo index
    var isSwiping = false;                                          // is animation done
    
    // set the z-indice for the indicated photo and the one below it
    var setSlideZIndex = function (beginIndex, swipeLeft) {
        var topZ = 990;
        var nextIndex = swipeLeft ? beginIndex - 1 : beginIndex + 1;
        
        // check if index reached head or tail
        if (nextIndex == slideItems.length)
            nextIndex = 0;
        else if (nextIndex == -1)
            nextIndex = slideItems.length - 1;
        
        slideItems.eq(beginIndex).show().css('z-index', topZ--);
        slideItems.eq(nextIndex).show().css('z-index', topZ--);
    };
    
    // function for switch slide in the carousel
    var switchSlide = function (swipeLeft) {
        
        // return if last swipe animation is not yet done
        if (isSwiping)
            return;
        
        // mark swipe begins
        isSwiping = true;
        
        // set the z-indice according to the swipe direction
        if (swipeLeft)
            setSlideZIndex(slideIndex, true);
        else
            setSlideZIndex(slideIndex, false);
        
        slideItems.eq(slideIndex).fadeOut('slow', function() {
            // clear current index indicator
            carouselIndexImages.eq(slideIndex).attr('src', './images/index_oval.png');
            
            // decrement or increment current photo slide index
            slideIndex = swipeLeft ? slideIndex - 1 : slideIndex + 1;
            if (slideIndex == slideItems.length)
                slideIndex = 0;
            else if (slideIndex == -1)
                slideIndex = slideItems.length - 1;
            
            // fill next index indicator
            carouselIndexImages.eq(slideIndex).attr('src', './images/index_fill.png');
            
            // mark swipe ends
            isSwiping = false;
        });
    };

    // show first photo and fill its indicator at initial state
    slideItems.eq(0).show();
    carouselIndexImages.eq(0).attr('src', './images/index_fill.png');
    
    // set timer for slide switching
    setInterval(switchSlide, SLIDE_INTERVAL);
    
    
    
    /********************************************************************
    *       functions on slide show arrows
    ********************************************************************/
        
    // show and hide the arrows on slide hover
    $('#carouselLayer').hover(function() {
        $('.carousel-arrow').fadeIn();
    }, function() {
        $('.carousel-arrow').fadeOut();
    });
    
    // update the arrow images on hover
    $('#leftArrow').hover(function() {
        $('img', this).attr('src', './images/leftArrow.png');
    }, function() {
        $('img', this).attr('src', './images/leftArrow_dim.png');
    });
    $('#rightArrow').hover(function() {
        $('img', this).attr('src', './images/rightArrow.png');
    }, function() {
        $('img', this).attr('src', './images/rightArrow_dim.png');
    });
    
    // attach click event listeners to the two arrows
    $('#leftArrow').click(function() {
        switchSlide(true);
    });
    $('#rightArrow').click(function() {
        switchSlide(false);
    });
    
    
    
    /********************************************************************
    *       hover functions for photo cards
    ********************************************************************/
    
    $('.photo-box').hover(function() {
        // show overlay when mousein
        $(this).children('.photo-overlay').show().animate({height:'100%', top:'0'}, LAYER_TRANS_SPEED);
    }, function() {
        // hide overlay when mouseout
        $(this).children('.photo-overlay').animate({height:'0', top:'100%'}, LAYER_TRANS_SPEED, function() {
            $(this).hide();
        });
    });
    
});