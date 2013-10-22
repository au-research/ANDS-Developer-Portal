$(function(){
	prettyPrint();
	// $('#single_display').registry_widget({mode:'display_single'});
	// $('#search_display').registry_widget({mode:'display_result'});
	$("#mapContainer").ands_location_widget({
		lonLat:"151.503462,-33.251348 150.558638,-33.039778 149.767623,-34.137978 150.844283,-34.754050 151.283736,-33.937689 151.503462,-33.251348"
	});
});