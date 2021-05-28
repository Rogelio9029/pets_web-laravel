<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Mascotas;

class SesionController extends Controller
{
    public function __construct(){$this->middleware('auth');}

    public function Sesion()
    {
        if(auth()->user()->tipo == 'usuario'){
            $id_cliente = auth()->id(); 
            $mascotas = Mascotas::get()->where('id_cliente', '===', $id_cliente);
            $Num_Mascotas = Mascotas::get()->where('id_cliente', '===', $id_cliente)->count();
            return view('Clientes/Index_Cliente')->with(['mascotas' => $mascotas])->with(['Num_Mascotas' => $Num_Mascotas]);
        }else if(auth()->user()->tipo == 'admin'){
            return view('Admin/Index_Admin');
        }
         
    }


}
