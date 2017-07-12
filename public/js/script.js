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

});