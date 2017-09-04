$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});

$(document).ready(function(){

	/*$('.is-sticky').each(function() {
    if( $(this).is(':visible') ) {
        $(".intro-header").sticky({ topSpacing: 0, getWidthFrom: 'body' });
    } else {
        $(".intro-header").sticky({ topSpacing: 0, getWidthFrom: 'body' });
    }
})*/

	var $header = $(".intro-header"),
	$clone = $header.before($header.clone().addClass("clone"));

	$(window).on("scroll", function() {
		var fromTop = $(window).scrollTop();
		$("body").toggleClass("down", (fromTop > 500));
	});

  $('.menu-icon').click( function(event) {
    event.stopPropagation();
    $(this).toggleClass("menu-active")
    $('.big-parent').toggleClass("menu-active");
    $('.big-menu').toggleClass("menu-active");
  });
  $('.big-menu').on("click", function (event) {
    event.stopPropagation();
  });
});

$(document).on("click", function () {
  $('.menu-icon').removeClass("menu-active")
  $('.big-parent').removeClass("menu-active");
  $('.big-menu').removeClass("menu-active");
});

$(document).keyup(function(e) {
   if (e.keyCode == 27) {
     $('.menu-icon').removeClass("menu-active")
     $('.big-parent').removeClass("menu-active");
     $('.big-menu').removeClass("menu-active");
  }
	
});

/*
 * Replace all SVG images with inline SVG
 */
jQuery('img.svg').each(function(){
    var $img = jQuery(this);
    var imgID = $img.attr('id');
    var imgClass = $img.attr('class');
    var imgURL = $img.attr('src');

    jQuery.get(imgURL, function(data) {
        // Get the SVG tag, ignore the rest
        var $svg = jQuery(data).find('svg');

        // Add replaced image's ID to the new SVG
        if(typeof imgID !== 'undefined') {
            $svg = $svg.attr('id', imgID);
        }
        // Add replaced image's classes to the new SVG
        if(typeof imgClass !== 'undefined') {
            $svg = $svg.attr('class', imgClass+' replaced-svg');
        }

        // Remove any invalid XML tags as per http://validator.w3.org
        $svg = $svg.removeAttr('xmlns:a');

        // Check if the viewport is set, if the viewport is not set the SVG wont't scale.
        if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
            $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
        }

        // Replace image with new SVG
        $img.replaceWith($svg);

    }, 'xml');

});
