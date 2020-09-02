$(document).ready(function(){
	$('#data_table').Tabledit({
		deleteButton: false,
		editButton: false,   		
		columns: {
		  identifier: [0, 'ID'],                    
		  editable: [[1, 'Zdjecie'], [2, 'Nazwa'], [3, 'delay']]
		},
		hideIdentifier: true,
		url: 'live_edit.php'		
	});
});