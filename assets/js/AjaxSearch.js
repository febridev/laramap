$(document).ready(function() {
	$("#district").click(function(){
		var distval = $("#district").val();
		$.post('http://laramap.dev:8080/api/searchCity',{distval:distval},function(match){
			$("#city").html(match);
		});
	});
})