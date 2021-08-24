// windows scroll

$(window).scroll(function () {
   $('.bg-custom').toggleClass('scrolled', $(this).scrollTop() > 60);
 });

$(window).scroll(function () {
  $('.itemstart').toggleClass('scrolled', $(this).scrollTop() > 60);
});

$(window).scroll(function () {
   $('.navbar-toggler-icon').toggleClass('scrolled', $(this).scrollTop() > 60);
 });

 $(window).scroll(function () {
   $('.bordermenu1').toggleClass('scrolled', $(this).scrollTop() > 60);
 });

 $(window).scroll(function () {
   $('.dropdown-menu-nav1').toggleClass('scrolled', $(this).scrollTop() > 60);
 });

 $(window).scroll(function () {
   $('.dropdown-item-nav1').toggleClass('scrolled', $(this).scrollTop() > 60);
 });