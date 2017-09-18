$(document).ready(function(){




// Função quando posiciona o mouse em cima do post
$('.blog_preview').hover(function(){
	$(this).children().children().children('.card-img-top').addClass('hover-img');
}, function(){
	$(this).children().children().children('.card-img-top').removeClass('hover-img');
});




// Função do froala Editor (Editor HTML)
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


// Função de cálculo
function calcularValorTotal(){
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



// Função quando inicia o carrinho
if($('.valorcarrinho').length > 0){
	calcularValorTotal();
}

// Função quando muda a quantidade
$( ".numberinput" ).change(function() {
	calcularValorTotal();
});

// Função quando finaliza a compra (PagSeguro)
$('#finalizar_compra').click(function(){

	if($('#frete').attr('value') <= 0){
		alert('Calcule o frete antes de finalizar o pedido');
	}
	else{
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
	}

	
});


// Calcular o frete
$('#calcular_frete').click(function(){

	if($('#destino').val() != ''){

		var valortotal = 0;

		for(i=0;i<$('.valorcarrinho').length;i++){

			var valor = $('#valor'+i).attr('value');
			var quantidade = $('#qtd'+i).val();

			valortotal += valor*quantidade;

		}

		$.ajax({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			type: "POST",
			url:"/calcular-frete",
			dataType: "html",
			cache: false,
			async: false,
			data:{
				peso: $('#peso').attr('value'),
				comprimento: $('#comprimento').attr('value'),
				altura: $('#altura').attr('value'),
				largura: $('#largura').attr('value'),
				valordeclarado: valortotal,
				servico: $('input[name="optionsRadios"]:checked').val(),
				destino: $('#destino').val()
			},
			success: function (data) {
				console.log('sucesso');
				$('#frete').attr('value', data);
				$('#frete').text('R$ '+data);

				calcularValorTotal();
			},
			beforeSend: function(){

			},
			error: function(jqXHR, textStatus, errorThrown){
				console.log('erro');
			}
		});

	}
	else{
		alert('Preencha o campo CEP');
	}

});















});