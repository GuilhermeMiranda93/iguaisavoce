<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

use Session;
use App\produto;

class PagSeguroController extends BaseController{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	public function pagseguro(){

		/*-=-=-=-=-=-=-   Ambiente de Produção -=-=-=-=-=-=*/
		// $data['token'] ='1365C3138BD148A2A08B1769638F03E1';

		/*-=-=-=-=-=-=-   Ambiente de Teste -=-=-=-=-=-=*/
		$data['token'] ='AE358690BFB244008AC56E307129C54B';
		
		$data['email'] = 'contato@iguaisavoce.com.br';
		$data['currency'] = 'BRL';

		/*-=-=-=-=--=Pegar dados da session-=-=-=--=-=-=*/
		$value = Session::get('cart');

		$data['itemId1'] = 0;
		$data['itemQuantity1'] = 1;
		$data['itemDescription1'] = "Frete Único para todo o Brasil";
		$data['itemAmount1'] = "10.00";

		$aux = 2;

		foreach($value as $item){

			$produto = produto::where('id',$item->productID)
			->limit(1)
			->get();

			$valor_formatado = number_format($produto[0]->valor*$item->qtd,2);

			$data['itemId'.$aux] = $produto[0]->id;
			$data['itemQuantity'.$aux] = $item->qtd;
			$data['itemDescription'.$aux] = $produto[0]->nome;
			$data['itemAmount'.$aux] = $valor_formatado;

			$aux++;
		}
		

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

		return $xml -> code;
	}

	public function abrirPagseguro($code){
		echo "<script>PagSeguroLightbox('1365C3138BD148A2A08B1769638F03E1')</script>";
		// echo 'https://sandbox.pagseguro.uol.com.br/v2/checkout/payment.html?code='.$code;
		// return redirect('https://pagseguro.uol.com.br/v2/checkout/payment.html?code='.$code);
	}

}