/*================================================
                Show/hide password icon
==================================================*/
$(".toggle-password").click(function() {

    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
      input.attr("type", "text");
    } else {
      input.attr("type", "password");
    }
});
/*================================================
                Navigation
==================================================*/
/*show/hide white navigtion*/
$(function () {

  // show/hide nav on page load
  showHideNav();

  $(window).scroll(function () {
      // show/hide nav on window scroll
      showHideNav();
});
function showHideNav() {

  if ($(window).scrollTop() > 50) {

      //show white nav
      $("nav").addClass("white-nav-top");

      //show dark logo
      $(".navbar-brand img").attr("src", "image/logo/logo.png");

      //show back to top button
      $("#back-to-top").fadeIn();

  } else {
      
      //hide white nav
      $("nav").removeClass("white-nav-top");

      //show logo
      $(".navbar-brand img").attr("src", "image/logo/top-logo.png");

      // Hide back to top button
      $("#back-to-top").fadeOut();
    }
  }
});
/*================================================
                Mobile Menu
==================================================*/
$(function () {
  // Show Mobile Nav 
  $("#mobile-nav-open-btn").click(function () {
      $("#mobile-nav").css("height", "100%")
  });

  // Hide Mobile Nav
  $("#mobile-nav-close-btn,#mobile-nav a").click(function () {
      $("#mobile-nav").css("height", "0%")
  });
});




















