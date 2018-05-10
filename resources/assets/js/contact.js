function sendAjax(request ,callback=''){
	var url = request.url?request.url:'/'; 
	var method = request.method?request.method:'get'; 
	var data = request.data?request.data:{}; 


	$.ajaxSetup({ 
		headers: { 
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') 
		} 
	});

	$.ajax({ 
		url : url, 
		method : method, 
		data : data, 


		success: function(response){ 
			$('#myModal').modal('hide');
				if (typeof(callback) != 'string') {
					callback(response); 
				} 
			} 
	}); 
} 


function showModal(url){ 
	$('#myModal').modal(); 
		sendAjax({url:url},
		function(data){ 
			$('#ModalBody').html(data); 
		});
	}


//js to save contact

$(document).ready(function(){
	$(document).on('click','#btnSave',function(e){
		e.preventDefault();
		var data = $('#addContact').serializeArray();
		console.log(data);

		sendAjax({
			url:'store',
			method:'post',
			data:data
		}, function(data){
			//location.reload(true);
		});
	});
});