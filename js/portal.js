//Wenn DOM geladen ist
$(document).ready(function() {
    
    //Bei Hover ueber Hoerspiel
    $(".right_block").hover(function() {
        
        //Opacity der anderen Divs runtersetzen
        $(".right_block").not(this).css("opacity", ".4");
    }, 
    
    //beim Verlassen wieder hochsetzen
    function() {
        $(".right_block").css("opacity", "1");
    });
});
   