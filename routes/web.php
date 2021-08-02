<?php

use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'prevent-back-history'],function(){

    //Publico
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/Servicios', [App\Http\Controllers\HomeController::class, 'Servicios'])->name('Servicios');
    Route::get('/AllServicios{id}', [App\Http\Controllers\HomeController::class, 'AllServicios'])->name('AllServicios');
    Route::get('/Contacto', [App\Http\Controllers\HomeController::class, 'Contacto'])->name('Contacto');
    Route::get('/Acerca', [App\Http\Controllers\HomeController::class, 'Acerca'])->name('Acerca');

    //Auth Laravel
    Auth::routes(['verify' => true]);

    Route::group(['middleware' => 'verified'], function(){

        //Sesion
        Route::get('Sesion', [App\Http\Controllers\SesionController::class, 'Sesion'])->name('Sesion');

        //Datos Cliente
        Route::get('/Frm_UpdateUser/{id}', [App\Http\Controllers\ClienteController::class, 'Frm_UpdateUser'])->name('Frm_UpdateUser');
        Route::put('/UpdateUser/{id}', [App\Http\Controllers\ClienteController::class, 'UpdateUser'])->name('UpdateUser');

        //Mascotas.Clientes
        Route::get('/Frm_AddMascota', [App\Http\Controllers\ClienteController::class, 'Frm_AddMascota'])->name('Frm_AddMascota');
        Route::post('/AddMascota', [App\Http\Controllers\ClienteController::class, 'AddMascota'])->name('AddMascota');
        Route::get('/Frm_UpdateMascota/{id}', [App\Http\Controllers\ClienteController::class, 'Frm_UpdateMascota'])->name('Frm_UpdateMascota');
        Route::put('/UpdateMascota/{id}', [App\Http\Controllers\ClienteController::class, 'UpdateMascota'])->name('UpdateMascota');

        //Pagos
        Route::get('/FrmCita/{id}', [App\Http\Controllers\PayPalController::class, 'FrmCita'])->name('FrmCita');
        Route::get('/Pagar/{id}', [App\Http\Controllers\PayPalController::class, 'Pagar'])->name('Pagar');
        Route::get('/PagoExitoso/{id}', [App\Http\Controllers\PayPalController::class, 'PagoExitoso'])->name('PagoExitoso');
        Route::Post('/Cita/{id}', [App\Http\Controllers\PayPalController::class, 'Cita'])->name('Cita');
        //Citas
        Route::get('/MisCitas', [App\Http\Controllers\PayPalController::class, 'MisCitas'])->name('MisCitas');

    }); //Verificar Email Real

    //Servicios.Admin
    Route::get('/TblServicios', [App\Http\Controllers\ServiciosController::class, 'TblServicios'])->name('TblServicios');
    Route::get('/Frm_AddServicios', [App\Http\Controllers\ServiciosController::class, 'Frm_AddServicios'])->name('Frm_AddServicios');
    Route::post('/AddServicios', [App\Http\Controllers\ServiciosController::class, 'AddServicios'])->name('AddServicios');
    Route::get('/Frm_EditServicios/{id}', [App\Http\Controllers\ServiciosController::class, 'Frm_EditServicios'])->name('Frm_EditServicios');
    Route::put('/EditServicios/{id}', [App\Http\Controllers\ServiciosController::class, 'EditServicios'])->name('EditServicios');
    Route::delete('/DeleteServicio/{id}', [App\Http\Controllers\ServiciosController::class, 'DeleteServicio'])->name('DeleteServicio');
    
    //Mascotas.Admin
    Route::get('/TblMascotas', [App\Http\Controllers\AdminController::class, 'TblMascotas'])->name('TblMascotas');
    
    //Usuarios.Admin
    Route::get('/TblUsuarios', [App\Http\Controllers\AdminController::class, 'TblUsuarios'])->name('TblUsuarios');


}); //Prevent Back middleware




