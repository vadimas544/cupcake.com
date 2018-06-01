$( document ).ready(function() {
    
});
$(window).resize(function() {
    resdisplay();
});
function resdisplay() {
    if($(window).width() < 992)
    {   
        $('ul').toggleClass('text-left');

    }
}