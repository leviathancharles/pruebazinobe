<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function listar( $data)
    {
        $informacion = User::where('nombre', $data)
                            ->orWhere('email', $data)
                            ->get();

        
        $valor=count($informacion);
                            
        if($informacion  && $valor !=0){
            
            $registro = [
                'code'   =>200,
                'message'=>'success',
                'data'   =>$informacion
                    
            ];
        }else{

            $registro = [
                'code'   =>200,
                'message'=>'empty'
            ];
        }
        
        return response()->json( $registro, $registro['code'] );

    }
}
