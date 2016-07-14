$(document).ready(function(){
    /*
    INTRO SECTION
     */
    var introElements = $('#intro .animate-element');
    introElements.each(function(){
        $(this).delay(1000).removeClass('hide-on-start lower-on-start');
    });
    ///*
    //EXPERIENCE SECTION
    // */
    $('#experience').bind('inview', function (event, visible, topOrBottomOrBoth) {
        if (visible == true) {
            // element is now visible in the viewport
            if (topOrBottomOrBoth == 'top') {
                // top part of element is visible
            } else if (topOrBottomOrBoth == 'bottom') {
                // bottom part of element is visible
            } else {
                // whole part of element is visible
                setTimeout(function(){ $('li.experience_1').removeClass('hide-on-start lower-on-start'); }, 0);
                setTimeout(function(){ $('li.experience_2').removeClass('hide-on-start lower-on-start'); }, 100);
                setTimeout(function(){ $('li.experience_3').removeClass('hide-on-start lower-on-start'); }, 200);
                setTimeout(function(){ $('li.experience_4').removeClass('hide-on-start lower-on-start'); }, 400);
                setTimeout(function(){ $('li.experience_5').removeClass('hide-on-start lower-on-start'); }, 600);
                setTimeout(function(){ $('li.experience_6').removeClass('hide-on-start lower-on-start'); }, 800);
            }
        } else {
            // element has gone out of viewport
        }
    });
    $('#projects .project').bind('inview', function (event, visible, topOrBottomOrBoth) {
        if (visible == true) {
            // element is now visible in the viewport
            $(this).find('.project-image').removeClass('slide-left-on-start slide-right-on-start');
            if (topOrBottomOrBoth == 'top') {
                // top part of element is visible
            } else if (topOrBottomOrBoth == 'bottom') {
                // bottom part of element is visible
            } else {

            }
        } else {
            // element has gone out of viewport
        }
    });
});