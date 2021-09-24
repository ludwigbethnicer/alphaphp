function goBack() {
	window.history.back();
}

$('input:radio[name="secured"]').change(function() {
	if ($(this).val() == '0') {
		$('#comment').removeClass('d-none');
	} else {
		$('#comment').addClass('d-none');
	}
});