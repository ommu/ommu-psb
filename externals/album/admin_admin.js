$(document).ready(function() {
	
	var limit = $('#media-render').attr('name');
	var link = $('li#upload').find('a').attr('href');

	new AjaxUpload($('li#upload'), {
		// Arquivo que fará o upload
		action: link,
		//Nome da caixa de entrada do arquivo
		name: 'namaFile',
		responseType: 'json',
		onSubmit: function(file, ext){
			 if (! (ext && /^(jpg|png|jpeg|gif)$/.test(ext))){ 
				// verificar a extensão de arquivo válido
				alert('Hanya file JPG, PNG or GIF yang dibolehkan.');
				return false;
			}
		},
		onComplete: function(file, response){
			if(response.count == limit) {
				$('.horizontal-desc #media-render #upload').hide();
			}
			$.ajax({
				type: 'get',
				url: response.get,
				dataType: 'json',
				success: function(response) {
					$('.horizontal-desc #media-render #upload').before(response.data);
				}
			});
		}
	});

});
