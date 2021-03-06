$(function(){
	prettyPrint();
	//$('#default_settings_grant').grant_widget();

	$('#custom_settings_grant').grant_widget({
		pre_lookup: true,
		pre_open_search:true,
		lookup_text: 'Custom Lookup',
		search_text: 'Custom Search',
		before_html: 'Enter Here: '
	});

	$('#tooltip_settings_grant').grant_widget({
		before_html: 'Enter Here: ',
		tooltip:true,
        funder_lists: true,
        funders: '{"funder_list":["Australian Research Council","National Health and Medical Research Council"]}',
        search_fields: '{"search_fields":["title","person","institution","description","id"]}'
	});

	$('#format_display_settings_grant').grant_widget({
	before_html: 'Enter Here: ',
	search_div_class: 'custom_search_div',
	info_box_class:'custom_info_box',
});

});