 $(document).ready(function () {

      // ------------nav bar shrink---------
    // $(window).on("scroll",function(){
    //     if($(this).scrollTop()>80){
    //         $(".navbar-section").addClass("navbar-shrink");
    //     }
    //     else{
    //         $(".navbar-section").removeClass("navbar-shrink");
    //     }
    // })

    // $(window).on("scroll",function(){
    //     if($(this).scrollTop()>80){
    //         $("nav").addClass("navbar-shrink");
    //     }
    //     else{
    //         $("nav").removeClass("navbar-shrink");
    //     }
    // })

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
     //---------head-carousel---------
     $('.customar-carousel').owlCarousel({
        loop:true,
        margin:0,
        autoplay:true,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                
            },
            600:{
                items:2,
                
            },
            1000:{
                items:3,
               
            }
        }
    })
    
    // -------------page Scrolling------------
    $.scrollIt({
        
      
        topOffset: -60           // 
      });

 });

 function openNav(){
    document.getElementById('mynav').style.width='100%';
    
}
function closeNav(){
    document.getElementById('mynav').style.width='0%';
}

//--------loader-----

function loader(){
    document.querySelector('.loader-container').classList.add('fade-out');
}
function fadeOut(){
    setInterval(loader,2000);
}
window.onload = fadeOut;

function openSearch(){
    document.querySelector('.search-section').classList.remove('fade-out');
    document.querySelector('.search-section').classList.add('fade-in');
}
function closeSearch(){
    document.querySelector('.search-section').classList.remove('fade-in');
    document.querySelector('.search-section').classList.add('fade-out');
}