$(document).ready(function() {


    var userFeed = new Instafeed({
        get: 'user',
        userId: '2163003909',
        limit: 100,
        resolution: 'standard_resolution',
        accessToken: '2163003909.1677ed0.ed2b4904b696460a9e46b9a487bc21ea',
        sortBy: 'most-recent',
        template: '<div class="item" instaimg style="a img {height: 240px; width: 240px;}"><a href="{{image}}" title="{{caption}}" target="_blank"><img src="{{image}}" alt="{{caption}}" height="240" width="240"/></a></div>',
       // template: '<div class="col-lg-3 instaimg"><a href="{{image}}" title="{{caption}}" target="_blank"><img src="{{image}}" alt="{{caption}}" class="img-fluid"/></a></div>',
    });


    userFeed.run();

    
    // This will create a single gallery from all elements that have class "gallery-item"
    $('.gallery').magnificPopup({
        type: 'image',
        delegate: 'a',
        gallery: {
            enabled: true
        }
    });


});