jQuery(document).ready(function ($) {
    //initialise Stellar.js
    $(window).stellar();
    //Cache variables for Stellar.js in the document
    var links = $('.navigation').find('li');
    slide = $('.slide');
    button = $('.button');
    mywindow = $(window);
    htmlbody = $('html,body');
    //Set up for waypoints navigation
        //cache the variable of the data-slide attribute associated with each slide
  $('.navigation li[data-slide="1"]').addClass('active');
    //waypoints doesnt detect the first slide when user scrolls back up to the top so we add this little bit of code, that removes the class 
    //from navigation link slide 2 and adds it to navigation link slide 1. 
    mywindow.scroll(function () {
        if (mywindow.scrollTop() == 0) {
            $('.navigation li[data-slide="1"]').addClass('active');
            $('.navigation li[data-slide="2"]').removeClass('active');
               $('.navigation li[data-slide="3"]').removeClass('active');
            $('.navigation li[data-slide="4"]').removeClass('active');
        }
    });
    //Create a function that will be passed a slide number and then will scroll to that slide using jquerys animate. The Jquery
    //easing plugin is also used, so we passed in the easing method of 'easeInOutQuint' which is available throught the plugin.
    function goToByScroll(dataslide) {
        console.log("slide clicked is " + dataslide);
        if(dataslide == 1){
            $('.navigation li[data-slide="1"]').addClass('active');
            $('.navigation li[data-slide="2"]').removeClass('active');
            $('.navigation li[data-slide="3"]').removeClass('active');
            $('.navigation li[data-slide="4"]').removeClass('active');
        htmlbody.animate({
            scrollTop: 0
        }, 2000, 'easeInOutQuint');
        }
        else if(dataslide == 2)
        {
            $('.navigation li[data-slide="2"]').addClass('active');
            $('.navigation li[data-slide="1"]').removeClass('active');
            $('.navigation li[data-slide="3"]').removeClass('active');
            $('.navigation li[data-slide="4"]').removeClass('active');
             htmlbody.animate({
            scrollTop: 686
        }, 2000, 'easeInOutQuint');
        }
        else if(dataslide == 3)
        {
            $('.navigation li[data-slide="2"]').removeClass('active');
            $('.navigation li[data-slide="1"]').removeClass('active');
            $('.navigation li[data-slide="3"]').addClass('active');
            $('.navigation li[data-slide="4"]').removeClass('active');
             htmlbody.animate({
            scrollTop: 1317
        }, 2000, 'easeInOutQuint');
        }
        
        else if(dataslide == 4)
        {
            $('.navigation li[data-slide="2"]').removeClass('active');
            $('.navigation li[data-slide="1"]').removeClass('active');
            $('.navigation li[data-slide="3"]').removeClass('active');
            $('.navigation li[data-slide="4"]').addClass('active');
             htmlbody.animate({
            scrollTop: 1702
        }, 2000, 'easeInOutQuint');
        }
        

    }

    //When the user clicks on the navigation links, get the data-slide attribute value of the link and pass that variable to the goToByScroll function
    links.click(function (e) {
        e.preventDefault();
        dataslide = $(this).attr('data-slide');
        goToByScroll(dataslide);
    });

    //When the user clicks on the button, get the get the data-slide attribute value of the button and pass that variable to the goToByScroll function
    button.click(function (e) {
        e.preventDefault();
        dataslide = $(this).attr('data-slide');
        goToByScroll(dataslide);
    });
    //Mouse-wheel scroll easing
    if (window.addEventListener) window.addEventListener('DOMMouseScroll', wheel, false);
    window.onmousewheel = document.onmousewheel = wheel;
    var time = 1500;
    var distance = 100;
    function wheel(event) {
        if (event.wheelDelta) delta = event.wheelDelta / 50;
        else if (event.detail) delta = -event.detail / 1;
        handle();
        if (event.preventDefault) event.preventDefault();
        event.returnValue = false;
    }
    function handle() {

        $('html, body').stop().animate({
            scrollTop: $(window).scrollTop() - (distance * delta)
        }, time);
    }
    var flag = 0;
	//keyboard  scroll easing
    $(document).keydown(function (e) {
       // e.preventDefault();
        switch (e.which) {
            //up
        case 38:
            if(flag == 0){
            $('html, body').stop().animate({
                scrollTop: $(window).scrollTop() - 100
            }, 1000,'easeOutQuart');
            flag = 1;
            }
            else{

                 $('html, body').stop().animate({
                scrollTop: $(window).scrollTop() - 50
            }, 100);
            }

            if($(window).scrollTop() >=0 && $(window).scrollTop() <= 350)
             {
                 $('.navigation li[data-slide="1"]').addClass('active');
                  $('.navigation li[data-slide="2"]').removeClass('active');
                   $('.navigation li[data-slide="3"]').removeClass('active');
                    $('.navigation li[data-slide="4"]').removeClass('active');  
             }
             else if($(window).scrollTop() >=351 && $(window).scrollTop() <= 1195)
             {

                 $('.navigation li[data-slide="2"]').addClass('active');
                  $('.navigation li[data-slide="1"]').removeClass('active');
                   $('.navigation li[data-slide="3"]').removeClass('active');
                    $('.navigation li[data-slide="4"]').removeClass('active');  

             }
             else if($(window).scrollTop() >=1196 && $(window).scrollTop() <= 1565)
             {

                 $('.navigation li[data-slide="3"]').addClass('active');
                  $('.navigation li[data-slide="1"]').removeClass('active');
                   $('.navigation li[data-slide="2"]').removeClass('active');
                    $('.navigation li[data-slide="4"]').removeClass('active');  

             }
             else if($(window).scrollTop() >=1566)
             {

                 $('.navigation li[data-slide="4"]').addClass('active');
                  $('.navigation li[data-slide="1"]').removeClass('active');
                   $('.navigation li[data-slide="3"]').removeClass('active');
                    $('.navigation li[data-slide="2"]').removeClass('active');  

             }
            break;
            //down
        case 40:
            if(flag == 0){
            $('html, body').stop().animate({
                scrollTop: Math.min($(window).scrollTop() + 100,1656)
            }, 1000,'easeOutQuart');
            flag = 1;
            }
            else{

                 $('html, body').stop().animate({
                scrollTop: Math.min($(window).scrollTop() + 50,1656)
            }, 100);
            }

            if($(window).scrollTop() >=0 && $(window).scrollTop() <= 350)
             {
                 $('.navigation li[data-slide="1"]').addClass('active');
                  $('.navigation li[data-slide="2"]').removeClass('active');
                   $('.navigation li[data-slide="3"]').removeClass('active');
                    $('.navigation li[data-slide="4"]').removeClass('active');  
             }
             else if($(window).scrollTop() >=351 && $(window).scrollTop() <= 1195)
             {

                 $('.navigation li[data-slide="2"]').addClass('active');
                  $('.navigation li[data-slide="1"]').removeClass('active');
                   $('.navigation li[data-slide="3"]').removeClass('active');
                    $('.navigation li[data-slide="4"]').removeClass('active');  

             }
             else if($(window).scrollTop() >=1196 && $(window).scrollTop() <= 1565)
             {

                 $('.navigation li[data-slide="3"]').addClass('active');
                  $('.navigation li[data-slide="1"]').removeClass('active');
                   $('.navigation li[data-slide="2"]').removeClass('active');
                    $('.navigation li[data-slide="4"]').removeClass('active');  

             }
             else if($(window).scrollTop() >=1566)
             {

                 $('.navigation li[data-slide="4"]').addClass('active');
                  $('.navigation li[data-slide="1"]').removeClass('active');
                   $('.navigation li[data-slide="3"]').removeClass('active');
                    $('.navigation li[data-slide="2"]').removeClass('active');  

             }
            break;
        }
    });
    $(document).keyup(function (e) {
       // e.preventDefault();
        switch (e.which) {
            //up
        case 38:
            $('html, body').stop().animate({
                scrollTop: $(window).scrollTop() - distance
            }, time,'easeOutQuart');
            flag = 0;
            if($(window).scrollTop() >=0 && $(window).scrollTop() <= 350)
             {
                 $('.navigation li[data-slide="1"]').addClass('active');
                  $('.navigation li[data-slide="2"]').removeClass('active');
                   $('.navigation li[data-slide="3"]').removeClass('active');
                    $('.navigation li[data-slide="4"]').removeClass('active');  
             }
             else if($(window).scrollTop() >=351 && $(window).scrollTop() <= 1195)
             {

                 $('.navigation li[data-slide="2"]').addClass('active');
                  $('.navigation li[data-slide="1"]').removeClass('active');
                   $('.navigation li[data-slide="3"]').removeClass('active');
                    $('.navigation li[data-slide="4"]').removeClass('active');  

             }
             else if($(window).scrollTop() >=1196 && $(window).scrollTop() <= 1565)
             {

                 $('.navigation li[data-slide="3"]').addClass('active');
                  $('.navigation li[data-slide="1"]').removeClass('active');
                   $('.navigation li[data-slide="2"]').removeClass('active');
                    $('.navigation li[data-slide="4"]').removeClass('active');  

             }
             else if($(window).scrollTop() >=1566)
             {

                 $('.navigation li[data-slide="4"]').addClass('active');
                  $('.navigation li[data-slide="1"]').removeClass('active');
                   $('.navigation li[data-slide="3"]').removeClass('active');
                    $('.navigation li[data-slide="2"]').removeClass('active');  

             }
            break;
            //down
        case 40:
           
            $('html, body').stop().animate({
                scrollTop: Math.min( $(window).scrollTop() + distance,1656)
            }, time,'easeOutQuart');
            flag = 0;
            if($(window).scrollTop() >=0 && $(window).scrollTop() <= 350)
             {
                 $('.navigation li[data-slide="1"]').addClass('active');
                  $('.navigation li[data-slide="2"]').removeClass('active');
                   $('.navigation li[data-slide="3"]').removeClass('active');
                    $('.navigation li[data-slide="4"]').removeClass('active');  
             }
             else if($(window).scrollTop() >=351 && $(window).scrollTop() <= 1195)
             {

                 $('.navigation li[data-slide="2"]').addClass('active');
                  $('.navigation li[data-slide="1"]').removeClass('active');
                   $('.navigation li[data-slide="3"]').removeClass('active');
                    $('.navigation li[data-slide="4"]').removeClass('active');  

             }
             else if($(window).scrollTop() >=1196 && $(window).scrollTop() <= 1565)
             {

                 $('.navigation li[data-slide="3"]').addClass('active');
                  $('.navigation li[data-slide="1"]').removeClass('active');
                   $('.navigation li[data-slide="2"]').removeClass('active');
                    $('.navigation li[data-slide="4"]').removeClass('active');  

             }
             else if($(window).scrollTop() >=1566)
             {

                 $('.navigation li[data-slide="4"]').addClass('active');
                  $('.navigation li[data-slide="1"]').removeClass('active');
                   $('.navigation li[data-slide="3"]').removeClass('active');
                    $('.navigation li[data-slide="2"]').removeClass('active');  

             }
            break;
        }
    });

});