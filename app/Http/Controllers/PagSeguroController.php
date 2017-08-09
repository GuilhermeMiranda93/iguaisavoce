<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class PagSeguroController extends BaseController{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	public function pagseguro(){
		$data['token'] ='AE358690BFB244008AC56E307129C54B';
		$data['email'] = 'contato@iguaisavoce.com.br';
		$data['currency'] = 'BRL';
		$data['itemId1'] = '1';
		$data['itemQuantity1'] = '1';
		$data['itemDescription1'] = 'Produto de Teste';
		$data['itemAmount1'] = '299.00';

		$url = 'https://ws.sandbox.pagseguro.uol.com.br/v2/checkout';

		$data = http_build_query($data);

		$curl = curl_init($url);

		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);

		$xml= curl_exec($curl);

		curl_close($curl);

		$xml= simplexml_load_string($xml);

		// $this->abrirPagseguro($xml -> code);
		echo $xml -> code;
	}

	public function abrirPagseguro($code){
		PagSeguroLightbox(‘1F69A3CF7878ED9994B3DF9DDC706796’);
		echo 'https://sandbox.pagseguro.uol.com.br/v2/checkout/payment.html?code='.$code;
		// return redirect('https://pagseguro.uol.com.br/v2/checkout/payment.html?code='.$code);
	}

}