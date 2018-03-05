
  var myCarousel;
  $(document).ready(function ($) {
    myCarousel= $("#carousel-container").waterwheelCarousel({
        // include options like this:
        // (use quotes only for string values, and no trailing comma after last option)
        // option: value,
        // option: value
        orientation: 'vertical',
        autoPlay: 1000,
        separation:90,
        opacityMultiplier:0.5,
        sizeMultiplier:0.8,
        flankingItems:2,
        linkHandling:2
    });
    


    $("#carousel-container").on('mouseover',function(){
      myCarousel.stop();
    });

    $("#carousel-container").on('mouseleave',function(){
      myCarousel.play(1000);
    });

});