 $(document).ready(function () {

      // ------------nav bar shrink---------
    $(window).on("scroll",function(){
        if($(this).scrollTop()>80){
            $("header").addClass("navbar-shrink");
        }
        else{
            $("header").removeClass("navbar-shrink");
        }
    })

     //---------head-carousel---------
     $('.features-carousel').owlCarousel({
        loop:true,
        margin:0,
        autoplay:true,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                
            },
            600:{
                items:1,
                
            },
            1000:{
                items:1,
               
            }
        }
    })
    
    // -------------page Scrolling------------
    $.scrollIt({
        topOffset:-50
    })

 });

 function openNav(){
    document.getElementById('mynav').style.width='100%';
    
}
function closeNav(){
    document.getElementById('mynav').style.width='0%';
}