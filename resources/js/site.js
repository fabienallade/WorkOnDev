$(document).ready(function() {
  $('.carousel.carousel-slider').carousel({
    fullWidth: true
  });
  $('.button-collapse').sidenav();
  $('.sidenav').sidenav();
  $('.modal').modal();
  $('.fixed-action-btn').floatingActionButton();
  $('.fixed-action-btn').click(function() {
    $("html, body").animate({
      scrollTop: 0
    }, 1000);
  })

  function taille() {
    var taille_ecran = $("body")[0].scrollTop
    if (taille_ecran <= 500) {
      $('.fixed-action-btn').hide()
    } else {
      $('.fixed-action-btn').show()
    }
  }
  $(document).scroll(function(event) {
    // console.log($(document).height() - $(window).height());
    // console.log(document.body.clientHeight);
    taille()
  });
  taille()
});
