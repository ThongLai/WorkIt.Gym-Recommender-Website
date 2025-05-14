/**
 * Main JavaScript for WorkIT
 */
$(document).ready(function() {
    // Mobile navigation toggle
    $(".ham-burger, .nav ul li a").click(function() {
        $(".nav").toggleClass("open");
        $(".ham-burger").toggleClass("active");
    });
    
    // Accordion functionality
    $(".accordian-container").click(function() {
        $(".accordian-container").children(".body").slideUp();
        $(".accordian-container").removeClass("active");
        $(this).children(".body").slideDown();
        $(this).addClass("active");
    });

    // Smooth scrolling for navigation and go-down button
    $(".nav ul li a, .go-down").click(function(event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash; 
            
            $('html,body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function() {
                window.location.hash = hash;
            });
            
            // Add active class in navigation
            $(".nav ul li a").removeClass("active");
            $(this).addClass("active");
        }
    });
}); 