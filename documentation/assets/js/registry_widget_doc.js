$(function(){
	prettyPrint();
	$('#advanced_search_example').registry_widget({
		mode: 'search',
		lookup:false,
		auto_search:true,
		search_btn_text: '<i class="icon icon-search"></i> Search',
		result_template: '<div id="accordion" class="panel-group"> {{#docs}} <div class="panel panel-default"> <div class="panel-heading"> <h4 class="panel-title"> <a href="#{{slug}}" data-parent="#accordion" data-toggle="collapse" class="accordion-toggle collapsed"> {{list_title}} </a> </h4> </div> <div class="panel-collapse collapse" id="{{slug}}"> <div class="panel-body"> {{description}} </div> </div> </div> {{/docs}} </div>', 
	});
});