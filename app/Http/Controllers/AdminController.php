<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Servicios;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    

}
