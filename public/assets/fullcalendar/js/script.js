
$(function(){

	$('.date-time').mask('00/00/000 00:00:00');

	$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


	

});

function sendEvent(route, data_){
    
    $.ajax({
      url: route,
      data: data_,
      method: 'POST',
      dataType: 'json',
      success: function(json){

      	if(json){
      		location.reload();
      	}
      }
     /* error: function(json){

         let responseJSON=json.responseJSON.errors;
         $("#message").html(loadErrors(responseJSON));
      }*/

    });

}

/*function loadErrors(response){
	let boxAlert='<div class="alert alert-danger">';
	for(let fields in response){
		boxAlert +='<span>${response[fields]}</span><br/>';

	}
	boxAlert += '</div>';
	//return boxAlert.replace('/\,/g',"<br/>");
}
*/
function routeEvents(route){
	return document.getElementById('calendar').dataset[route];
}

function resetForm(form){
	$(form)[0].reset();
}