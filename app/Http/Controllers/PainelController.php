<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use FTP;

use App\texto;

class painelController extends BaseController
{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	public function painelAssunto(){
		$texto_home = new texto();

		$texto = $texto_home
		->where('excluido','=','0')
		->where('localizacao','=','1')
		->orderby('data','asc')
		->get();

		return view('painel.assunto',[

			'texto'=>$texto

		]);
	}

	public function painelAudio(){
		$texto_home = new texto();

		$texto = $texto_home
		->where('excluido','=','0')
		->where('localizacao','=','2')
		->orderby('data','asc')
		->get();

		return view('painel.audio',[

			'texto'=>$texto

		]);
	}

	public function painelVideo(){
		$texto_home = new texto();

		$texto = $texto_home
		->where('excluido','=','0')
		->where('localizacao','=','3')
		->orderby('data','asc')
		->get();

		return view('painel.video',[

			'texto'=>$texto

		]);
	}

	public function painelPropaganda(){
		$texto_home = new texto();

		$texto = $texto_home
		->where('excluido','=','0')
		->where('localizacao','=','4')
		->orderby('data','asc')
		->get();

		return view('painel.propaganda',[

			'texto'=>$texto

		]);
	}


	// Funções do Painel

	public function saveBlog(Request $req){
		$texto_home = new texto();

		$titulo = $req->input('titulo');
		$localizacao = 1;
		$arquivo = $req->file('arquivo')->getClientOriginalName();
		$texto = $req->input('texto');
		$chamada = $req->input('chamada');
		$autor = $req->input('autor');
		$categoria = $req->input('categoria');
		$visivel = 1;
		$excluido = 0;

		$data = array(
			'titulo'=>$titulo,
			'localizacao'=>$localizacao,
			'arquivo'=>$arquivo,
			'texto'=>$texto,
			'chamada'=>$chamada,
			'autor'=>$autor,
			'categoria'=>$categoria,
			'visivel'=>$visivel,
			'excluido'=>$excluido
		);

		$texto_home->insert($data);

		if($_FILES["arquivo"]["error"] > 0){
			$file_result .= "No file upload or invalid file";
			$file_result .= "Error code: ".$_FILES["arquivo"]["error"]."<br>";

			dd($file_result);
		}
		else{

			move_uploaded_file($_FILES["arquivo"]["tmp_name"], "img/".$_FILES["arquivo"]["name"]);
		}

		return back();
	}




	public function deletarBlog($id){

		$texto = texto::find($id);

		$texto->excluido = 1;

		$texto->save();

		return back();

	}

	public function verBlog($id){

		$texto = texto::find($id);

		if($texto->visivel == 1){
			$texto->visivel = 0;
		}
		else{
			$texto->visivel = 1;
		}

		$texto->save();

		return back();

	}

	public function editarBlog($id){

		$texto_home = new texto();

		$texto = $texto_home
		->where('id','=',$id)
		->limit(1)
		->get();

		$texto_salvos = $texto_home
		->where('excluido','=','0')
		->where('localizacao','=','1')
		->orderby('data','asc')
		->get();
		
		return view('painel.assuntoedit',[
			'texto'=>$texto,
			'texto_salvos'=>$texto_salvos
		]);
	}

	public function editarSobre(){

		$texto_home = new texto();

		$texto = $texto_home
		->where('localizacao','=',5)
		->limit(1)
		->get();
		
		return view('painel.sobre',[
			'texto'=>$texto
		]);
	}

	public function saveSobre(Request $req){

		$texto_home = texto::find(1);

		$titulo = $req->input('titulo');
		$texto = $req->input('texto');

		if($texto != null){
			$texto_home->texto = $texto;
		}

		$texto_home->titulo = $titulo;
		

		$texto_home->save();

		return back();
	}

	public function saveAudio(Request $req){
		$texto_home = new texto();

		$titulo = $req->input('titulo');
		$localizacao = 2;
		$arquivo = $req->file('arquivo')->getClientOriginalName();
		$texto = '';
		$chamada = $req->input('chamada');
		$autor = '';
		$categoria = 0;
		$visivel = 1;
		$excluido = 0;

		$arquivo = 'audio/'.$arquivo;

		$data = array(
			'titulo'=>$titulo,
			'localizacao'=>$localizacao,
			'arquivo'=>$arquivo,
			'texto'=>$texto,
			'chamada'=>$chamada,
			'autor'=>$autor,
			'categoria'=>$categoria,
			'visivel'=>$visivel,
			'excluido'=>$excluido
		);

		$texto_home->insert($data);

		if($_FILES["arquivo"]["error"] > 0){
			$file_result .= "No file upload or invalid file";
			$file_result .= "Error code: ".$_FILES["arquivo"]["error"]."<br>";

			dd($file_result);
		}
		else{

			move_uploaded_file($_FILES["arquivo"]["tmp_name"], "audio/".$_FILES["arquivo"]["name"]);
		}

		return back();
	}

	public function saveVideo(Request $req){
		$texto_home = new texto();

		$urlvideo = 'https://www.youtube.com/embed/';

		$titulo = $req->input('titulo');
		$localizacao = 3;
		$arquivo = $req->input('arquivo');
		$texto = '';
		$chamada = '';
		$autor = '';
		$categoria = 0;
		$visivel = 1;
		$excluido = 0;

		$arquivo = substr($arquivo, -11);

		$urlembed = $urlvideo.$arquivo;

		$data = array(
			'titulo'=>$titulo,
			'localizacao'=>$localizacao,
			'arquivo'=>$urlembed,
			'texto'=>$texto,
			'chamada'=>$chamada,
			'autor'=>$autor,
			'categoria'=>$categoria,
			'visivel'=>$visivel,
			'excluido'=>$excluido
		);

		$texto_home->insert($data);

		return back();
	}

	public function savePropaganda(Request $req){
		$texto_home = new texto();

		$titulo = $req->input('titulo');
		$localizacao = 4;
		$arquivo = $req->file('arquivo')->getClientOriginalName();
		$texto = '';
		$chamada = $req->input('chamada');
		$autor = '';
		$categoria = 0;
		$visivel = 1;
		$excluido = 0;

		$arquivo = 'img/'.$arquivo;

		$data = array(
			'titulo'=>$titulo,
			'localizacao'=>$localizacao,
			'arquivo'=>$arquivo,
			'texto'=>$texto,
			'chamada'=>$chamada,
			'autor'=>$autor,
			'categoria'=>$categoria,
			'visivel'=>$visivel,
			'excluido'=>$excluido
		);

		$texto_home->insert($data);

		if($_FILES["arquivo"]["error"] > 0){
			$file_result .= "No file upload or invalid file";
			$file_result .= "Error code: ".$_FILES["arquivo"]["error"]."<br>";

			dd($file_result);
		}
		else{

			move_uploaded_file($_FILES["arquivo"]["tmp_name"], "img/".$_FILES["arquivo"]["name"]);
		}

		return back();
	}




}
