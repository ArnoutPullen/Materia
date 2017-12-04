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
        $(this).css({
            marginBottom: $(".sub-menu").height()
        });
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
    // if ($(".mat-sidenav").is(":visible")) {
        // console.log('close');
        // $(".mat-sidenav").css('left', '0px');
        // $(".mat-sidenav").animate({"left": '-=300'}, function() {
        //     $(".mat-sidenav").css('visibility','hidden');
        //     $(".mat-overlay").css('visibility','hidden');
        //     $(".mat-sidenav-container").removeClass('mat-active');
        // });
    // } else {
        // opening animation
        // console.log('open');
        // $(".mat-sidenav").css('left', '-300px');
        // $(".mat-sidenav").css('visibility','visible');
        // $(".mat-overlay").css('visibility','visible');
        // $(".mat-sidenav-container").addClass('mat-active');
        // $(".mat-sidenav").animate({"left": '+=300'});
    // }

    // $(".mat-sidenav").toggleClass('mat-sidenav-opened');
    // $(".mat-sidenav").toggleClass('mat-sidenav-closed');

    if ( $(".mat-sidenav").hasClass("mat-sidenav-opened") ) {
        console.log('close');
        $(".mat-sidenav").removeClass('mat-sidenav-opened');
        $(".mat-sidenav").addClass('mat-sidenav-closed');
        $(".mat-sidenav-container").removeClass('mat-sidenav-open');
    } else {
        console.log('open');
        $(".mat-sidenav").removeClass('mat-sidenav-closed');
        $(".mat-sidenav").addClass('mat-sidenav-opened');
        $(".mat-sidenav-container").addClass('mat-sidenav-open');
    }
    // $({xyz: -100}).animate({xyz:100}, {duration:10000, complete:function(){
    //     console.log("done");
    // }, step: function(now) {
    //     console.log("Anim now: "+now);
    // }});
}

function matAddAccordionIcons() {
    $(".accordion").each(function(){
        $(".accordion-header", this).append('<i class="fa fa-chevron-down accordion-icon" aria-hidden="true"></i>');
    });
}
function matAccordionToggle(element) {
    $(".accordion").each(function() {
        if ( ! $(element).closest('.accordion').hasClass('opened') ) {
            $(this).removeClass('opened');
        }
    });
    $(element).closest('.accordion').toggleClass('opened');
}