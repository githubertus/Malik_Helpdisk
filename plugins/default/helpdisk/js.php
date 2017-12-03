$(document).ready(function() {
	$('#search').keyup(function(){
		$('#control').css({'display':'none'});
		var search = $('#search').val();
		$.post(Ossn.site_url+'/helpsearch',{action:search},function(data){
				$('.search-result').html(data);
			});
	}); 

});
