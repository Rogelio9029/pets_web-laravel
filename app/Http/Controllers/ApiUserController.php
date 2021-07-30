<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class ApiUserController extends Controller
{
    public function Api_User(){
        $Usuarios = User::get()->where('tipo', '===', 'user');
        return $Usuarios;
        //return view('Clientes/Index_Cliente')->with(['Usuarios' => $Usuarios];)
    }
}
