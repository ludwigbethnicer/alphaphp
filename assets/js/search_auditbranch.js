$(document).ready(function(){
	$("#controlNo").on("keyup", function() {
		var value = $(this).val().toLowerCase();
		$("#listBranchAudit tbody tr").filter(function() {
			$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		});
	});
});