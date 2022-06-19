jQuery(document).ready(function($) {
	
	/************ comments  *************/
	$("#author").attr("placeholder", "Your Name");
	$("#email").attr("placeholder", "Email Address");
	$("#url").attr("placeholder", "Your Website");
	$("#comment").attr("placeholder", "Your comment");
	
	
	/************ search *************/
	$('input:text').each(function(){
        var txtval = $(this).val();
        $(this).focus(function(){
            if($(this).val() == txtval){
                $(this).val('')
            }
        });
        $(this).blur(function(){
            if($(this).val() == ""){
                $(this).val(txtval);
            }
        });
    });
	
	/************ tooltip *************/
	$('[data-toggle="tooltip"]').tooltip();
	
	/************ popover *************/
	$('[data-toggle="popover"]').popover();
	
});