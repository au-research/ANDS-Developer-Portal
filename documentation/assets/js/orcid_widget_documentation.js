$(function(){
	prettyPrint();
	//$('#default_settings_orcid').orcid_widget();

	$('#custom_settings_orcid').orcid_widget({
		pre_lookup: true,
		pre_open_search:true,
		lookup_text: 'Custom Lookup',
		search_text: 'Custom Search',
		before_html: 'Enter Here: '
	});

	$('#tooltip_settings_orcid').orcid_widget({
		before_html: 'Enter Here: ',
		tooltip:true
	});

	$('#format_display_settings_orcid').orcid_widget({
	before_html: 'Enter Here: ',
	search_div_class: 'custom_search_div',
	info_box_class:'custom_info_box',
});

});