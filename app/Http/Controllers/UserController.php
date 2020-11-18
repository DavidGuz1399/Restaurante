<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){
        $usuarios=User::select('users.id','users.name','users.email','roles.name as nombre_rol')->join('model_has_roles','model_has_roles.model_id','=','users.id')
        ->join('roles','model_has_roles.role_id','=','roles.id')
        ->get();
        return view('usuarios.index',compact('usuarios'));
    }
}
