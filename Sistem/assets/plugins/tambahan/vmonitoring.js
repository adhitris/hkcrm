jQuery(document).ready(function() {       
           App.init();
           TableEditable.init();

        });
function tampil(id){
	$.ajax({
		type :'GET',
		url : 'Monitoring/detail/'+id,
		dataType:'json',
		success: function(result){
			var tm = result;
			for(var i = 0;i<tm.length;i++){
				var obj=tm[i];
				$("#sample_editable_2 > tbody").append("<tr><td>"+obj.SO_NUMBER+"</td><td>"+obj.SO_NUMBER+"</td><td>"+obj.SO_NUMBER+"</td>"+
					"<td>"+obj.SO_NUMBER+"</td><td>"+obj.SO_NUMBER+"</td><td>"+obj.SO_NUMBER+"</td><td>"+obj.SO_NUMBER+"</td>"+
					"<td>"+obj.SO_NUMBER+"</td><td>"+obj.SO_NUMBER+"</td><td>"+obj.SO_NUMBER+"</td><td>"+obj.SO_NUMBER+"</td>"+
					"<td>"+obj.SO_NUMBER+"</td><td>"+obj.SO_NUMBER+"</td><td>"+obj.SO_NUMBER+"</td><td>"+obj.SO_NUMBER+"</td></tr>");



			}
		}

	});
}