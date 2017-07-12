<?php
/**
 * Created by PhpStorm.
 * User: alexandre
 * Date: 15/06/16
 * Time: 17:29
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Exception;
use Illuminate\Support\Facades\Mail;


class EmailController extends BaseController
{

    public function __construct(Controller $app)
    {
        $this->app = $app;

    }






    function sendContato(Request $request){

        try {
            $nome = $request->input('name');
            $email = $request->input('email');
            $phone = $request->input('phone');
            $menssagem = $request->input('message');


            $data = [

            'nome' => $nome,
            'email' => $email,
            'phone' => $phone,
            'mensagem' => $menssagem
            ];


            Mail::send('emails.contato', $data, function ($message) {

                $message->from('desenvolvimento02@soitic.com', 'Contato - Site');
                $message->to('desenvolvimento02@soitic.com', 'Administrador')->subject('Contato - Site');

            });


            return $this->app->notificacao('Sucesso !!', 'success', 'Mensagem enviada com sucesso !!');
        }catch(Exception $e){

            echo $e->getMessage();
        }

    }

    
    
}
