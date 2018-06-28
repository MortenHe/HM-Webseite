//Wenn DOM-Baum geladen ist
$(document).ready(function() {
	
    //Alle Bilder
    $.each($('.img_container'), function(i,val) {
		
        //Auf gewissen Position setzen
        var cont_left = $(val).position().left;
		
        $(this).find(".img").each(function(index) {
            var left = (index * 160) + cont_left;
            $(this).css("left", left + "px");
        });
    });
    
    //Beim Hover
    $(".img a img").hover(function() {
            
        //vergroessern
        $(this).parent().parent().css("z-index", 1);
        $(this).animate({
            height: "250",
            width: "250",
            left: "-=50",
            top: "-=50"
        }, "fast");
    }, function() {
        
        //wieder verkleinern
        $(this).parent().parent().css("z-index", 0);
        $(this).animate({
            height: "150",
            width: "150",
            left: "+=50",
            top: "+=50"
        }, "fast");
    });
});

//Bildwechsel bei Galerie Atkionen
function bildwechsel(bildnr) {
    $("#anzeige").attr("src", "../pics/galerien/freistett/gr"+bildnr+".jpg");
}