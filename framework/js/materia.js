jQuery(document).ready(function($) {
    // Menu Toggle
    $("#mat-toggle-menu").click(function(){
        matToggleMenu();
    });

    // Menu Open If Click Outside Close Menu
    // $(document).mouseup(function(e) {
    //     if ($(".mat-sidenav").is(":visible")) {
    //         var container = $(".mat-sidenav");
            
    //         if (!container.is(e.target) && container.has(e.target).length === 0) {
    //             matToggleMenu();
    //         }
    //     }
    // });
    $(".mat-overlay").click(function(){
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
    if ($(".mat-sidenav").is(":visible")) {
        $(".mat-sidenav").css('margin-left', '0px');
        $(".mat-sidenav").animate({"margin-left": '-=300'}, function(){
            $(".mat-sidenav").hide();
            $(".mat-overlay").hide();
            $(".mat-sidenav-container").removeClass('mat-active');
        });
    } else {
        $(".mat-sidenav").css('margin-left', '-300px');
        $(".mat-sidenav").show();
        $(".mat-overlay").show();
        $(".mat-sidenav-container").addClass('mat-active');
        $(".mat-sidenav").animate({"margin-left": '+=300'});
    }
}