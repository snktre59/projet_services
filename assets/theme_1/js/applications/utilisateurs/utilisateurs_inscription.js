$('#inscriptionForm').on('submit',function(e){
	e.preventDefault();
	var form = $(this);
	
	$.post(form.attr('action'), form.serialize(), function(data) {
        if (data.status == true) {
            //if($('input[name="termesEtConditions"]').is(":checked")){
               // $("#termesAlert").hide();
                $("html, body").animate({
                    scrollTop: 0
                }, 880);
                $('#inscriptionForm').fadeOut("slow", function(){
                    $("#inscriptionValide").addClass("fadeInDown",1000).show();
                });
                
           /* } else {
                $("#termesAlert").show();
            }*/
            
        }else{
            console.log(data);
            $("html, body").animate({
                scrollTop: 0
            }, 880);
            $.each(data.errors[0], function(key, val) {
                /*if(key != "termesEtConditions") {
                    if($('input[name="termesEtConditions"]').is(":checked")){
                        $("#termesAlert").hide();
                    } else {
                        $("#termesAlert").show();
                    }*/
                    form.find('input[name="'+ key +'"]').next().next().remove();
                    form.find('input[name="'+ key +'"]').next().remove();
                    form.find('input[name="'+ key +'"]').after(val);
                //}
            });
        }
    }, "json");
});