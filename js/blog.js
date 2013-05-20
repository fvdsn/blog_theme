$(function(){
	console.log('Hello World :)');
	var header_hidden = true;
	var active_header = '';
	function toggle_header(name){
		if(header_hidden){
			header_hidden = false;
			$('.headerpages').removeClass('hidden');
			$('.headerpages '+name).removeClass('hidden');
            $('.navicon[href='+name+']').addClass('selected');
			active_header = name;
		}else{
			if(active_header === name){
				$('.headerpages').addClass('hidden');
				$('.headerpages '+name).addClass('hidden');
                $('.navicon[href='+name+']').removeClass('selected');
				active_header = '';
				header_hidden = true;
			}else{
				$('.headerpages '+active_header).addClass('hidden');
				$('.headerpages '+name).removeClass('hidden');
                $('.navicon[href='+active_header+']').removeClass('selected');
                $('.navicon[href='+name+']').addClass('selected');
				active_header = name;
			}
		}
	}

	$('.navicon').click(function(event){
		toggle_header($(this).attr('href'));
        event.preventDefault();
	});
})
