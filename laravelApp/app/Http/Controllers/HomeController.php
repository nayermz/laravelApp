<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {

        $cat01 = DB:: connection('mariadb01')->table('categorias')->get();
        $cat02 = DB:: connection('mariadb02')->table('categorias')->get();
        $cat03 = DB:: connection('mariadb03')->table('categorias')->get();
        $categorias = $cat01->merge($cat02)->merge($cat03);
        return view('index', ['categorias' => $categorias]);
        
        
    }
}
