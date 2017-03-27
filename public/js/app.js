// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).ready(function() {
    
    $("#owl").owlCarousel({
    navigation : true,
    slideSpeed : 300,
    items : 3,
    lazyLoad : true,
    responsive: true
    });
    
    $("#owl2").owlCarousel({
        navigation : true,
        slideSpeed : 300,
        items : 4,
        lazyLoad : true,
        responsive: true
    });
    
    //detecting if its a mobile device
 var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};

if(!isMobile.any()){
 
    var sources = document.querySelectorAll('video#v0 source');
    // Define the video object this source is contained inside
    var video = document.querySelector('video#v0');
    for(var i = 0; i<sources.length;i++) {
      sources[i].setAttribute('src', sources[i].getAttribute('data-src'));
    }
    // If for some reason we do want to load the video after, for desktop as opposed to mobile (I'd imagine), use videojs API to load
    video.load();
   
}
else{
    //$('#v0').css('display','none');
    $('.overlay').css('background-color','#fff');
    $('#navMenu').css('display','none');
    $('.mobileOnly').css('display','inline');
    $('#mobileBg').addClass('active');
}

    
});

$(document).foundation();


// select video element
var vid = document.getElementById('v0');
vid.volume = 0;


function removeLoadScreen(){
    var vid = document.getElementById('v0');
    
    $('#loadScreen').fadeOut(function(){
        vid.play();
    });   
} 

