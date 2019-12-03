<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store(){
        $message = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required|min:3',
            'message' => 'required|min:3'
        ],[
            'message.min' => 'Debe ingresar un mensaje de 3 caracteres como mínimo'
        ]);

        // Definimos a que correo debe llegar
        Mail::to('jerrynba26@gmail.com')->queue(new MessageReceived($message));

        return redirect()->route('contactanos')
            ->with('info','Mensaje enviado con éxito');
    }
}
