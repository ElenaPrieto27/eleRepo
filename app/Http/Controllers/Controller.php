<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Support\Facades\DB;
use App\elena2;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
        public function matcha(){
                return json_encode(elena2::all());
        }

        public function add(Request $R){
                $Kito = new elena2();
                $Kito->nombre = $R->nombre;
                $Kito->apellido = $R->apellido;
                $Kito->id = $R->id;
                $Kito->origen = $_SERVER["SERVER_ADDR"];
                $Kito->save();

                return elena2::all();
        }
}
