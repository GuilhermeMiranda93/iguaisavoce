$(document).ready(function(){

	$('.blog_preview').hover(function(){
		$(this).children().children().children('.card-img-top').addClass('hover-img');
	}, function(){
		$(this).children().children().children('.card-img-top').removeClass('hover-img');
	});

	$('#new').click(function(){
		
	});

	$('#texto_input').froalaEditor({
		toolbarInline: false,
		heightMin: 500
	});

	$('#texto_input').on('froalaEditor.contentChanged froalaEditor.initialized', function (e, editor) {
		$('#preview').text(editor.codeBeautifier.run(editor.html.get()))
	}).froalaEditor();

	function readURL(input) {

		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
				$('#file-upload').attr('src', e.target.result);
			}

			reader.readAsDataURL(input.files[0]);
		}
	}

	$("#imagem_input").change(function(){
		readURL(this);
	});


	if($('.valorcarrinho').length > 0){
		var valortotal = 0;

		for(i=0;i<$('.valorcarrinho').length;i++){

			var valor = $('#valor'+i).attr('value');
			var quantidade = $('#qtd'+i).val();

			valortotal += valor*quantidade;

		}

		valortotal += parseFloat($('#frete').attr('value'));

		valortotal = valortotal.toFixed(2);

		var valorString = valortotal.replace('.',',');

		$('#valorfinal').text('R$ '+valorString);
	}

	$( ".numberinput" ).change(function() {

		var valortotal = 0;

		for(i=0;i<$('.valorcarrinho').length;i++){

			var valor = $('#valor'+i).attr('value');
			var quantidade = $('#qtd'+i).val();

			valortotal += valor*quantidade;

		}

		valortotal += parseFloat($('#frete').attr('value'));

		valortotal = valortotal.toFixed(2);

		var valorString = valortotal.replace('.',',');

		$('#valorfinal').text('R$ '+valorString);

	});

	$('#finalizar_compra').click(function(){

		$(document).ajaxStart(function(){
			$('#loading').css('display','flex');
		}); 

		$(document).ajaxStop(function(){
			$('#loading').css('display','none');
		});

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		$.post('http://127.0.0.1:8000/pagseguro',function(data){
			PagSeguroLightbox(data);
		})
	});

	




	

});