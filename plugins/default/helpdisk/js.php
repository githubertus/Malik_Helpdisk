$(document).ready(function() {
	$('#search').keyup(function(){
		// alert('working');
		$('#control').css({'display':'none'});
		var search = $('#search').val();
		//alert(search);
		console.log('search val is: ' + search);
		$.post(Ossn.site_url+'/Help/',{action:search},function(data){
				// $('.search-result').html(data);
				// alert(data);
			});
	}); 
});
