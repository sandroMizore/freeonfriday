$('.fof-mini-cart-close').on('click', function(){
  $('.fof-mini-cart-container').toggleClass('open');
});
$('.fof-cart-btn').on('click', function(e){
  e.preventDefault;
  $('.fof-mini-cart-container').toggleClass('open');
});
