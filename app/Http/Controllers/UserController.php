<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Echo_;

class UserController extends Controller
{

    public function P1(){
       return view('Page1');
       //Echo "<h1>Listagem de Usuarios </h1>";

    }

    public function P2(){
        return view('Page2');
        //Echo "<h1>Listagem de Usuarios </h1>";

     }

     public function P3(){
        return view('Page3');
        //Echo "<h1>Listagem de Usuarios </h1>";

     }




}
