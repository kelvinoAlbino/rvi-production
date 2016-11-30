jQuery( document ).ready( function() {

var i = 0;

var flexiSlider = function() {

  var flexSlider = jQuery('#flexi-slider ul li');

  if (i == 4)

  {
    i = 0;
  }

    flexSlider.eq(i).removeClass('hide');
    flexSlider.eq(i-1).addClass('hide');
    i++;

}

setInterval(flexiSlider, 5000);

});