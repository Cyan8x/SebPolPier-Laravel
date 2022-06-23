<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        /*
            Si recibo parametros como $curso, hay dos formas de pasarle a una vista:
            return vier('index' , ['curso' => $curso]);
            O tambien (si la variable con la que vas a mandar a la vista y la variable que recibes, tienen el mismo nombre)
            return vier('index' , compact('curso'));
        */

        return view('log.login');
    }
}
