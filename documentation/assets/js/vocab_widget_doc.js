$(function(){
	prettyPrint();
	$("#anzsrc-vocab").vocab_widget({
		mode: 'search',
		 cache: false,
		 repository: 'anzsrc-for',
		 target_field: 'label'
	 });

	$("#rifcs-idtype").vocab_widget({
		mode:"narrow",
		 mode_params:"http://purl.org/au-research/vocabulary/RIFCS/1.4/RIFCSIdentifierType",
		 repository:"rifcs",
		 cache: false,
		 fields: ['definition'],
		 target_field: 'label'
	 });

	$("#rifcs-idtype-input").vocab_widget({
		mode:"narrow",
		mode_params:"http://purl.org/au-research/vocabulary/RIFCS/1.4/RIFCSIdentifierType",
		repository:"rifcs",
		cache: false,
		fields: ['label', 'definition', 'about'],
		target_field: 'label'
	});

	$("#vocab-tree").vocab_widget({
		mode:'tree',
		repository:'anzsrc-for'})
	.on('treeselect.vocab.ands', function(event) {
		var target = $(event.target);
		var data = target.data('vocab');
		alert('You clicked ' + data.label + '\r\n<' + data.about + '>');
	});

	var elem = $("#vocab-core");
	var widget = elem.vocab_widget({repository:'rifcs', cache: false});

	//set up some handlers
	elem.on('narrow.vocab.ands', function(event, data) {
		var list = elem.append('<ul />');
		$.each(data.items, function(idx, e) {
		var link = $('<a href="' + e['about'] + '">' + e['label'] + '</a>');
		var item = $('<li />');
		item.append(link).append(' (' + e.definition + ')');
		item.data('data', e);
		list.append(item);
	  });
	});

	//error handler
	elem.on('error.vocab.ands', function(event, xhr) {
	  elem.addClass('error')
		.empty()
		.text('There was an error retrieving vocab data: ' + xhr);
	});

	//now, perform the vocab lookup
	widget.vocab_widget('narrow','http://purl.org/au-research/vocabulary/RIFCS/1.4/RIFCSIdentifierType');

});