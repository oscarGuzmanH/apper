<?php

namespace App\Http\Controllers;

use App\Mail\MessageRecived;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Prophecy\Doubler\Generator\Node\ReturnTypeNode;

class messageController extends Controller
{
    public function store(Request $request) 
    {
        // VALIDAR DATOS
        $message = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3'
        ]/*, [ // Se utiliza para enviar mensajes personalizados sin modificar los archivos de traduccion...
            'name.required' => 'I need your fullname'
        ]*/);

        // ENVIAR FORMULARIO
        Mail::to('l19450669@itz.edu.mx')->queue(new MessageRecived($message));
        
        return 'Mensaje Enviado';
    }
}
