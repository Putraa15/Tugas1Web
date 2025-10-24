// script.js - Amanda Computer (jQuery)
$(function(){
  $('#btnScroll').on('click', function(){
    $('html,body').animate({scrollTop: $('#layanan').offset().top - 20}, 600);
  });

  $('#searchBox').on('keyup', function(){
    var v = $(this).val().toLowerCase();
    $('#produkList .card').each(function(){
      var txt = $(this).text().toLowerCase();
      $(this).toggle(txt.indexOf(v) !== -1);
    });
  });
});
