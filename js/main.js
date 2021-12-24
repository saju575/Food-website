 $(document).ready(function () {

     // ------------nav bar shrink---------
     $(window).on("scroll",function(){
        if($(this).scrollTop()>80){
            $(".na").addClass("navbar-shrink");
        }
        else{
            $(".na").removeClass("navbar-shrink");
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

// const menu=document.querySelector("#menu-bars");
// const navbar=document.querySelector('.navbar');

// menu.onclick=() =>{
//     menu.classList.toggle('fa-times');
//     navbar.classList.toggle('act');
// }