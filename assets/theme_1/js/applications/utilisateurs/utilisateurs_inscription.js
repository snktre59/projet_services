$('#inscriptionForm').on('submit',function(e){
	e.preventDefault();
	var form = $(this);
	
	$.post(form.attr('action'), form.serialize(), function(data) {
        if (data.status == true) {
            if($('input[name="termesEtConditions"]').is(":checked")){
                $("#termesAlert").hide();
                $('#inscriptionForm').fadeOut("slow", function(){
                    $("#inscriptionValide").addClass("fadeInDown",1000).show();
                });
            } else {
                $("#termesAlert").show();
            }
            
        }else{
            $.each(data.errors[0], function(key, val) {
                if(key != "termesEtConditions") {
                    if($('input[name="termesEtConditions"]').is(":checked")){
                        $("#termesAlert").hide();
                    } else {
                        $("#termesAlert").show();
                    }
                    form.find('input[name="'+ key +'"]').next().next().remove();
                    form.find('input[name="'+ key +'"]').next().remove();
                    form.find('input[name="'+ key +'"]').after(val);
                }
            });
        }
    }, "json");
});