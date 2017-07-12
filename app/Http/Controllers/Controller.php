<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use FTP;

use App\texto;

class Controller extends BaseController
{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


	//Funções do site - home

	public function home(){
		$texto_home = new texto();

		$texto = texto::where('excluido','=','0')
		->where('visivel','=','1')
		->where('localizacao','=','1')
		->skip(1)
		->limit(2)
		->orderby('data','desc')
		->get();

		$texto2 = texto::where('excluido','=','0')
		->where('visivel','=','1')
		->where('localizacao','=','1')
		->limit(1)
		->orderby('data','desc')
		->get();

		$texto_comportamento = texto::where('excluido','=','0')
		->where('visivel','=','1')
		->where('localizacao','=','1')
		->where('categoria','=','1')
		->limit(5)
		->orderby('data','desc')
		->get();

		$texto_cotidiano = texto::where('excluido','=','0')
		->where('visivel','=','1')
		->where('localizacao','=','1')
		->where('categoria','=','2')
		->limit(5)
		->orderby('data','desc')
		->get();

		$texto_relacionamento = texto::where('excluido','=','0')
		->where('visivel','=','1')
		->where('localizacao','=','1')
		->where('categoria','=','3')
		->limit(5)
		->orderby('data','desc')
		->get();

		$texto_beleza = texto::where('excluido','=','0')
		->where('visivel','=','1')
		->where('localizacao','=','1')
		->where('categoria','=','4')
		->limit(5)
		->orderby('data','desc')
		->get();

		$propaganda = texto::where('excluido','=','0')
		->where('visivel','=','1')
		->where('localizacao','=','4')
		->orderby('data','desc')
		->get();


		return view('pages.home',[

			'texto'=>$texto,
			'texto2'=>$texto2,
			'texto_comportamento'=>$texto_comportamento,
			'texto_cotidiano'=>$texto_cotidiano,
			'texto_relacionamento'=>$texto_relacionamento,
			'texto_beleza'=>$texto_beleza,
			'propaganda'=>$propaganda

			]);
	}

	public function assuntos($id){
		$texto_home = new texto();

		$texto = $texto_home
		->where('excluido','=','0')
		->where('visivel','=','1')
		->where('localizacao','=','1')
		->where('categoria','=',$id)
		->orderby('data','asc')
		->get();

		$propaganda = texto::where('excluido','=','0')
		->where('visivel','=','1')
		->where('localizacao','=','4')
		->orderby('data','desc')
		->get();

		return view('pages.assuntos',[

			'texto'=>$texto,
			'propaganda'=>$propaganda,
			'id'=>$id,
			'categoria'=>'comportamento'

			]);
	}

	public function audios(){

		$texto = texto::where('excluido','=','0')
		->where('visivel','=','1')
		->where('localizacao','=','2')
		->orderby('data','asc')
		->get();

		$propaganda = texto::where('excluido','=','0')
		->where('visivel','=','1')
		->where('localizacao','=','4')
		->orderby('data','desc')
		->get();

		return view('pages.audios',[

			'texto'=>$texto,
			'propaganda'=>$propaganda

			]);
	}


	public function videos(){
		$texto_home = new texto();

		$texto = $texto_home
		->where('excluido','=','0')
		->where('visivel','=','1')
		->where('localizacao','=','3')
		->orderby('data','asc')
		->get();

		$propaganda = texto::where('excluido','=','0')
		->where('visivel','=','1')
		->where('localizacao','=','4')
		->orderby('data','desc')
		->get();

		return view('pages.videos',[

			'texto'=>$texto,
			'propaganda'=>$propaganda

			]);
	}

	public function assuntosPost($id){

		$texto = texto::where('id','=',$id)
		->limit(1)
		->get();

		$propaganda = texto::where('excluido','=','0')
		->where('visivel','=','1')
		->where('localizacao','=','4')
		->orderby('data','desc')
		->get();

		return view('pages.assunto_detalhe',[

			'texto'=>$texto,
			'propaganda'=>$propaganda,
			'categoria'=>'#15A2FF',
			'categoria_nome'=>'comportamento'

			]);
	}

	public function contato(){

		$propaganda = texto::where('excluido','=','0')
		->where('visivel','=','1')
		->where('localizacao','=','4')
		->orderby('data','desc')
		->get();

		return view('pages.contato',[

			'propaganda'=>$propaganda

			]);
	}

	public function loja(){

		$produto = texto::where('excluido','=','0')
		->where('visivel','=','1')
		->where('localizacao','=','6')
		->orderby('data','desc')
		->get();

		$propaganda = texto::where('excluido','=','0')
		->where('visivel','=','1')
		->where('localizacao','=','4')
		->orderby('data','desc')
		->get();

		return view('pages.loja',[

			'propaganda'=>$propaganda,
			'produto'=>$produto

			]);
	}

	public function lojaDetalhe($id){

		$produto = texto::where('id','=',$id)
		->limit(1)
		->get();

		$propaganda = texto::where('excluido','=','0')
		->where('visivel','=','1')
		->where('localizacao','=','4')
		->orderby('data','desc')
		->get();

		return view('pages.loja_detalhe',[

			'produto'=>$produto,
			'propaganda'=>$propaganda

			]);
	}




	// Funções do painel-site

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

	public function notificacao($tipo, $alert, $msg){

        return view('emails.notificacao',
            [
            'msg' => $msg,
            'tipo' =>$tipo,
            'alert'=> $alert

            ]);
    }



}
