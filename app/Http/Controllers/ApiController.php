<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class ApiController extends Controller
{
    //

    public function crearTienda(request $req)
    {

    }


    public function crearUsuario(request $req)
    {
        ///uid del celu
        $u = new User();
        $u->uid = $req->uid;
        $u->save();
        return respose($u->id,200);
    }
}
