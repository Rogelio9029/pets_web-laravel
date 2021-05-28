<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Servicios;
use App\Models\Mascotas;

class PayPalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Frm_Paypal($id)
    {
        if(auth()->user()->tipo == 'usuario'){
            $id_Cliente = auth()->id(); 
            $Cliente = User::where('id', $id_Cliente)->first(); 
            $Servicio = Servicios::where('id', $id)->first();
            $Mascotas = Mascotas::get()->where('id_cliente','===', $id_Cliente);

            return view('Pagos/BuyPaypal')->with(['Servicio' => $Servicio])
            ->with(['Cliente' => $Cliente])->with(['Mascotas' => $Mascotas]);

        }else{
            return view('Index');
        }
    }


}
