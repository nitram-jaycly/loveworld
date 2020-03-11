$(document).ready(function() {


    var userFeed = new Instafeed({
        get: 'user',
        userId: '2163003909',
        limit: 12,
        resolution: 'standard_resolution',
        accessToken: '2163003909.1677ed0.ed2b4904b696460a9e46b9a487bc21ea',
        sortBy: 'most-recent',
        template: '<div class="item"><a href="{{link}}" title="{{caption}}" target="_blank"><img src="{{image}}" alt="{{caption}}" /></a></div>',
        // template: '<div class="col-lg-3 instaimg"><a href="{{image}}" title="{{caption}}" target="_blank"><img src="{{image}}" alt="{{caption}}" class="img-fluid"/></a></div>',
        target: "instafeed_gallery",
        after : function()
        {
           
              var owl = $('.owl-carousel');
              owl.owlCarousel({
                items: 4,
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 1000,
                autoplayHoverPause: true
              });
              $('.play').on('click', function() {
                owl.trigger('play.owl.autoplay', [1000])
              })
              $('.stop').on('click', function() {
                owl.trigger('stop.owl.autoplay')
              })
            
        }
    });


    userFeed.run();

    
    // This will create a single gallery from all elements that have class "gallery-item"
    /*
    $('.gallery').magnificPopup({
        type: 'image',
        delegate: 'a',
        gallery: {
            enabled: true
        }
    });
    */

});