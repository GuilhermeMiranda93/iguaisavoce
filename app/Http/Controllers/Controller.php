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

	public function sobre(){

		$texto = texto::where('excluido','=','0')
		->where('visivel','=','1')
		->where('localizacao','=','5')
		->limit(1)
		->get();

		$propaganda = texto::where('excluido','=','0')
		->where('visivel','=','1')
		->where('localizacao','=','4')
		->orderby('data','desc')
		->get();

		return view('pages.sobre',[

			'texto'=>$texto,
			'propaganda'=>$propaganda

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

	public function notificacao($tipo, $alert, $msg){

        return view('emails.notificacao',
            [
            'msg' => $msg,
            'tipo' =>$tipo,
            'alert'=> $alert

            ]);
    }



}
