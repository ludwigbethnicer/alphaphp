$(document).ready(function() {
	$(".notrem3char").on("keyup", function() {
		var value = $(this).val();
		$(this).val($(this).data("initial") + value.substring(3));
	});
});