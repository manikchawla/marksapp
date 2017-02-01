
$(document).ready(function(){
	setModalWindowsChangeListener();
	
});

function setModalWindowsChangeListener(){
	$("#login_arrow_modal_11").css("visibility","visible");	
	$("#signup_arrow_modal_11").css("visibility","hidden");
	$(".visible_for_signup").css("display","none");
	$(".visible_for_login").css("display","block");

	$("#sign_up_text_modal_11").click(function(){
		$("#login_arrow_modal_11").css("visibility","hidden");	
		$("#signup_arrow_modal_11").css("visibility","visible");
		$(".visible_for_signup").css("display","block");
		$(".visible_for_login").css("display","none");
	});
	$("#login_text_modal_11").click(function(){
		$("#login_arrow_modal_11").css("visibility","visible");	
		$("#signup_arrow_modal_11").css("visibility","hidden");
		$(".visible_for_signup").css("display","none");
		$(".visible_for_login").css("display","block");
	});
}

function centerModal() {
	$(this).css('display', 'block');
	var $dialog = $(this).find(".modal-dialog");
	var offset = ($(window).height() - $dialog.height()) / 2;
    // Center modal vertically in window
    $dialog.css("margin-top", offset);
}

$('.modal').on('show.bs.modal', centerModal);
$(window).on("resize", function () {
	$('.modal:visible').each(centerModal);
});