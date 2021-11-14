<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
    {
        public function todoslosRegistros()
        {
            $users=User::all();
            return view('users.todos-los-registros',compact('users'));
        }
        
        public function consultaPorid()
        {
            return "hola aquie consulta con filtro";
        }

    }
