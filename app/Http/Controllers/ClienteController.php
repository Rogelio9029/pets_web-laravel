<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Mascotas;
use App\Models\Servicios;
use Carbon\Carbon;

use Illuminate\Http\Request;


class ClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Frm_AddMascota()
    {
        if(auth()->user()->tipo == 'usuario'){
            return view("Clientes/AgregarMascota");
        }else{
            return view('Index');
        }
    }

    public function AddMascota(Request $request)
    {
        if(auth()->user()->tipo == 'usuario'){
            $data = request()->validate([
                'Nombre' => 'required',
                'Descripcion' => 'required',
                'Edad' => 'required',
                'Peso' => 'required',
                'Raza' => 'required',
                'file' =>'required'
            ]);
            
            $id_cliente = auth()->id();
            $Nombre = request('Nombre');
            $Descripcion = request('Descripcion');
            $Edad = request('Edad');
            $Peso = request('Peso');
            $Raza = request('Raza');
            $File = request('file');
    
            $fileNameWithTheExtension = request('file')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithTheExtension, PATHINFO_FILENAME);
            $extension = request('file')->getClientOriginalExtension();


            $newFileName = $fileName .'.' . $extension;
            $path = request('file')->storeAs('public/Img/Img_Mascotas', $newFileName);
    
            $Mascota = new Mascotas();
    
            $Mascota->nombre_mascota = $Nombre;
            $Mascota->Descripcion = $Descripcion;
            $Mascota->edad = $Edad;
            $Mascota->peso = $Peso;
            $Mascota->raza = $Raza;
            $Mascota->imagen = $newFileName;
            $Mascota->id_cliente = $id_cliente;

            $Mascota->save();
    
            return redirect('Sesion'); 
        }else{
            return view('Index');
        }
        
    }

    public function Frm_UpdateMascota($id)
    {
        $id_user = auth()->user()->id;
        $Cliente = Mascotas::get('id_cliente')->where('id_cliente', '===', $id_user )->first();

        if(auth()->user()->tipo == 'usuario'){
            if($Cliente['id_cliente'] == $id_user){
                $Mascota = Mascotas::findorFail($id);
                return view("Clientes/EditarMascota")->with(['Mascota' => $Mascota]);
            }else{
                return redirect('Sesion');
            }
        }
        else{
            return redirect('Sesion');
        }
    }

    public function UpdateMascota(Request $request, $id)
    {

        if(auth()->user()->tipo == 'usuario'){
            $data = request()->validate([    //Rescate de datos, validacion de requeridos y tipos 
                'Nombre' => 'required',
                'Edad' => 'required',
                'Peso' => 'required',
                'Raza' => 'required',
                'Descripcion' => 'required',
            ]);
    
            $Nombre = request('Nombre');
            $Edad = request('Edad');
            $Peso = request('Peso');
            $Raza = request('Raza');
            $Descripcion = request('Descripcion');
            $Foto = request('file');


            
            $Mascota = Mascotas::findorFail($id);

            if($Foto != null){
                $fileNameWithTheExtension = request('file')->getClientOriginalName();
                $fileName = pathinfo($fileNameWithTheExtension, PATHINFO_FILENAME);
                $extension = request('file')->getClientOriginalExtension();
                $newFileName = $fileName .'.' . $extension;

                $path = request('file')->storeAs('public/Img/Img_Mascotas', $newFileName);

                $Mascota->imagen = $newFileName;
                $Mascota->nombre_mascota = $Nombre;  //Guarda el dato obtenido en la columna selecciona de la BD
                $Mascota->Descripcion = $Descripcion;
                $Mascota->edad = $Edad;
                $Mascota->peso = $Peso;
                $Mascota->raza = $Raza;
                $Mascota->save();//Guarda los datos
            }
            else{
                $Mascota->nombre_mascota = $Nombre;  //Guarda el dato obtenido en la columna selecciona de la BD
                $Mascota->Descripcion = $Descripcion;
                $Mascota->edad = $Edad;
                $Mascota->peso = $Peso;
                $Mascota->raza = $Raza;
                $Mascota->save();//Guarda los datos
            }
            
             return redirect('/Sesion'); 
        }else{
            return view('Index');
        }
    }

    public function DeleteMascota($id)
    {
        $Mascota = Mascotas::find($id);
        
        $Mascota->delete();
        return redirect('/Sesion');
    }

    public function Frm_UpdateUser($id)
    {
        if(auth()->user()->tipo == 'usuario'){
            if(auth()->user()->id == $id){
                $User = User::findorFail($id);
                return view("Clientes/EditarUsuario")->with(['User' => $User]);
            }else{
                return redirect('Sesion');
            }
        }
        else{
            return redirect('Sesion');
        }
        
    }

    public function UpdateUser(Request $request, $id)
    {
        if(auth()->user()->tipo == 'usuario'){
            $data = request()->validate([
                'Nombre' => 'required',
                'Apellido' => 'required',
                'Apellido2' => 'required',
                'Telefono' => 'required',
                'file' =>'required'
            ]);
            
            $id_cliente = auth()->id();
            $Nombre = request('Nombre');
            $Apellido = request('Apellido');
            $Apellido2 = request('Apellido2');
            $Telefono = request('Telefono');
            $File = request('file');
    
            $fileNameWithTheExtension = request('file')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithTheExtension, PATHINFO_FILENAME);
            $extension = request('file')->getClientOriginalExtension();
            $newFileName = $fileName .'.' . $extension;
            $path = request('file')->storeAs('public/Img/Img_User', $newFileName);
    
            $User = User::findorFail($id);
    
            $User->name = $Nombre;
            $User->apellido1 = $Apellido;
            $User->apellido2 = $Apellido2;
            $User->telefono = $Telefono;
            $User->foto = $newFileName;

            $User->save();
    
            return redirect('Sesion'); 
        }else{
            return view('Index');
        }
    }

}
