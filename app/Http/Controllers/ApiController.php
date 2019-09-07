<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\tienda;
class ApiController extends Controller
{
    //
    /**
     * {
     *  user_id: int,
     *  nombre: String?,
     *  direccion:String?,
     *  telefono:String?,
     *  instagram:String?
     * }
     */
    public function crearTienda(request $req)
    {
        $t = new tienda();
        $t->user_id = $req->user_id;
        $t->nombre = $req->nombre;
        $t->direccion = $req->direccion;
        $t->telefono = $req->telefono;
        $t->instagram = $req->instagram;
        $t->save();
        return response($t->id);
    }

    /***
     *
     * $req = {uid:string}
     */
    public function login(request $req)
    {
        ///uid del celu
        $u = user::where('uid',$req->uid)->first();
        if(!$u)///si no existe que lo cree
        {
            $u = new User();
            $u->uid = $req->uid;
            $u->save();

        }
        return response($u->id);//devulve el user_id;
    }
}
