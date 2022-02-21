$(document).ready(function() {

    $(".navdrop").click(function() {
    
      $("nav").slideToggle(200);	
    
        $(this).toggleClass("close");
                                     
      }); 
    
    
    $(".plus").click(function(e) {
    
         e.preventDefault();
    
         var current_width = $(window).width();
    
         if(current_width < 860) {
    
      $(this).toggleClass("minus").next('nav li ul').slideToggle();
     
        }
    
      });
    
    }); // end document ready