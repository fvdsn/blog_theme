$(function(){
	console.log('Hello World :)');
	var header_hidden = true;
	var active_header = '';
	function toggle_header(name){
		if(header_hidden){
			header_hidden = false;
			$('.headerpages').removeClass('hidden');
			$('.headerpages .'+name).removeClass('hidden');
			active_header = name;
		}else{
			if(active_header === name){
				$('.headerpages').addClass('hidden');
				$('.headerpages .'+name).addClass('hidden');
				active_header = '';
				header_hidden = true;
			}else{
				$('.headerpages .'+active_header).addClass('hidden');
				$('.headerpages .'+name).removeClass('hidden');
				active_header = name;
			}
		}
	}

	$('.navicon').click(function(){
		toggle_header($(this).attr('attr-dst'));
	});
})