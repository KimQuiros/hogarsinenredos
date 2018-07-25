// var mn = jQuery(".navbar-collapse");
//  var mns = "main-nav-scrolled";
//  var hdr = jQuery('.top-menu').height();

// jQuery(window).scroll(function() {
//     if( $(this).scrollTop() > hdr ) {
// 				alert('csdcsdcds');
//         mn.addClass(mns);
//     } else {
//         mn.removeClass(mns);
//     }
// });

//jQuery to collapse the navbar on scroll
jQuery(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-collapse").addClass("main-nav-scrolled");
    } else {
        $(".navbar-collapse").removeClass("main-nav-scrolled");
    }
});