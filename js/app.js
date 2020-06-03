function navSlide() {
    const burger = document.querySelector(".burger");
    const nav = document.querySelector(".nav-links");
    const navLinks = document.querySelectorAll(".nav-links li");
    
    burger.addEventListener("click", () => {
        //Toggle Nav
        nav.classList.toggle("nav-active");
        
        //Animate Links
        navLinks.forEach((link, index) => {
            if (link.style.animation) {
                link.style.animation = ""
            } else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`;
            }
        });
        //Burger Animation
        burger.classList.toggle("toggle");
    });
    
}

navSlide();

/*$(function(){
   var value2upd = function(){
       var w = $(window).width();
       return w < 767 ? 20 : 40;
   };

   $(window).resize(function(){
       $('.wpcf7-form-control wpcf7-text').attr('size', value2upd);
   }).resize(); // <-----------fires when dom is ready.
});*/