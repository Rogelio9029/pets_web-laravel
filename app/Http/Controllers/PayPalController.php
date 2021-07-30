<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Servicios;
use App\Models\Mascotas;
use App\Models\Citas;
use App\Models\Pagos;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PayPalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function FrmCita($id)
    {
        if(auth()->user()->tipo == 'usuario'){
            $id_Cliente = auth()->id(); 
            $Cliente = User::where('id', $id_Cliente)->first(); 
            $Servicio = Servicios::where('id', $id)->first();
            $Mascotas = Mascotas::get()->where('id_cliente','===', $id_Cliente);

            return view('Pagos/AgendarCita')->with(['Servicio' => $Servicio])
            ->with(['Cliente' => $Cliente])->with(['Mascotas' => $Mascotas]);

        }else{
            return view('Index');
        }
    }

    public function Cita(Request $request,$id)
    {
        $data = request()->validate([    //Rescate de datos, validacion de requeridos y tipos 
            'firstName' =>'required',
            'lastName' =>'required',
            'mascota' =>'required',
            'fecha' => 'required',
            'email' => 'required',
            'telefono' => 'required',
        ]);

        $Nombre = request('firstName');
        $Apellidos = request('lastName');
        $Mascota_id = request('mascota');
        $Fecha = request('fecha');
        $Email = request('email');
        $Telefono = request('telefono');

        $user = auth()->id(); 
        $Cita = new Citas();
        $Cita->id_mascota = $Mascota_id;
        $Cita->id_servicio = $id;
        $Cita->id_user = $user;
        $Cita->dueño = $Nombre;
        $Cita->fecha_cita = $Fecha;
        $Cita->email = $Email;
        $Cita->telefono = $Telefono;
        $Cita->estado = "Sin Pagar";
        $Cita->save();

        return view('/Pagos/AgendaExitosa');
    }

    public function MisCitas()
    {
        $user = auth()->id(); 
        
        //Sin pagar
        $Citas = Citas::where('id_user', $user)->where('estado','Sin Pagar')->get();
        //Pagadas
        $Pagadas = Citas::where('id_user', $user)->where('estado','Pagado')->get();

        return view('/Clientes/MisCitas')->with(['Citas' => $Citas])->with(['Pagadas' => $Pagadas]);  
    }

    public function Pagar($id)
    {
        $cita = Citas::get()->where('id', $id)->first(); 
        $Servicio = Servicios::get()->where('id', $cita['id_servicio'])->first(); 


        return view('/Pagos/Pagar')->with(['Servicio' => $Servicio])->with(['cita' => $cita]); 
    }

    public function PagoExitoso($id)
    {
        $Cita = Citas::findorFail($id);
        $Cita->estado = "Pagado";
        $Cita->save();

        $id_servicio = Citas::get()->where('id', $id)->first();
        $Costo = Servicios::get()->where('id', $id_servicio['id_servicio'])->first();

        $Pago = new Pagos();
        $Pago->id_cita = $id;
        $Pago->pago = $Costo['Costo'];
        $Pago->save();

        return redirect('/MisCitas');
        
    }


}
