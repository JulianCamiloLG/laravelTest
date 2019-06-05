<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MensajesController extends Controller
{
    public function store() {
        // ver las reglas que se pueden ingresar en el array asociativo
       request()->validate([
        'nombre' => 'required',
        'correo' => 'required|email', // también ['required','email']
        'asunto' => 'required',
        'contenido' => ['required', 'min:5']
    ], [ 
        'nombre.required' => 'No acepto anónimos',
        'contenido.min' => 'Sea breve en los mensajes pero no tanto',
    ]);

    // si se despliega este mensaje la validación pasó, si no,
    // validate, regresa automáticamente a la página del formulario
    return 'datos válidos';

    }
 
}
