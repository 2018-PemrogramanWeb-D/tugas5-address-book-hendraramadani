$(document).ready(function(){
	$("table").hide();
	$(".sch").hide();
  			$("#myInput").on("keyup", function() {
	    		var value = $(this).val().toLowerCase();
	    		$("#myTable tr").filter(function() {
	      			$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
	    		});
  			});

		  	$("button").click(function(){
		  		$("p").css({"background-color": "white", "font-size": "110%","font-weight": "bold"});
		        $("table").toggle(1000);
		        $(".sch").toggle(500);
		        $("p1").hide();


		    });
});