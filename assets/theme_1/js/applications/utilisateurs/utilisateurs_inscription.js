$('#inscriptionForm').on('submit',function(e){
	e.preventDefault();
	var form = $(this);
	
	$.post(form.attr('action'), form.serialize(), function(data) {
        if (data.status == true) {
            $('#inscriptionForm').fadeOut("slow", function(){
                $("#inscriptionValide").addClass("fadeInDown",1000).show();
            });
            
        }else{
            $.each(data.errors[0], function(key, val) {
                form.find('input[name="'+ key +'"]').next().next().remove();
                form.find('input[name="'+ key +'"]').next().remove();
                form.find('input[name="'+ key +'"]').after(val);
            });
        }
    }, "json");
});