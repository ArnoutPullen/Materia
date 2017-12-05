jQuery(document).ready(function($) {
    // Menu Toggle
    $("#mat-toggle-menu").click(function() {
        matToggleMenu();
    });
    $(".mat-overlay").click(function() {
        if ($(".mat-sidenav").is(":visible")) {
            matToggleMenu();
        }
    });

    // Toggle Sub menu
    $(".menu-item-has-children").click(function(event){
        event.preventDefault();
        if ($(".mat-sidenav").is(":visible")) {
            
        }
        // $(this).css({
        //     marginBottom: $(".sub-menu").height()
        // });
        $(this).toggleClass('mat-open');
        $(".sub-menu").toggle();
    });

    // Ripple Effect
    $('.mat-button').mousedown(function(event) {
        matRippleEffect($(this), event);
    });

    // Accordions
    matAddAccordionIcons();

    $('.accordion-header').on('click',function(event){
        matAccordionToggle($(this));
    });
});

function matSubmenuToggle() {
    
}

function matRippleEffect(element, event) {
    $('.mat-ripple').remove();
    
    var width = $(element).width();
    var height =  $(element).height();
    
    $(element).prepend('<span class="mat-ripple"></span>');
    
    if(width >= height) {
        height = width;
    } else {
        width = height; 
    }
            
    var x = event.pageX - $(element).offset().left - width / 2;
    var y = event.pageY - $(element).offset().top - height / 2;
    
    $(".mat-ripple").css({
        width: width,
        height: height,
        top: y + 'px',
        left: x + 'px',
    }).addClass("mat-ripple-effect");
    
    setTimeout(function() { $('.mat-ripple').remove(); }, 1000);
}

function matToggleMenu() {
    // If opened then close else open
    $(".mat-sidenav").toggleClass('mat-sidenav-closed');
    $(".mat-sidenav").toggleClass('mat-sidenav-opened');
    $(".mat-sidenav-container").toggleClass('mat-sidenav-open');

}

function matAddAccordionIcons() {
    // Add accordion icon to each accordion
    $(".accordion").each(function(){
        $(".accordion-header", this).append('<i class="fa accordion-icon" aria-hidden="true"></i>');
    });
}

function matAccordionToggle(element) {
    accordion = $(element).closest('.accordion');

    // Close opened accordions
    $(".accordion").each(function() {
        if ( ! $(accordion).hasClass('opened') ) {
            $(this).removeClass('opened');
        }
    });

    // Open accordion
    $(accordion).toggleClass('opened');
}