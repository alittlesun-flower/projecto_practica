<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comida;
class AController extends Controller
{
    public function getMarca(){
        $marca = array(); 
        $marca[] = "colun";
        $marca[] = "yoguyogu";
        $marca[] = "lais";

        return $marca;
    }
    public function getComidas(){
        $comidas = Comida::all();
        return $comidas;
    }
    public function crearComidas(){
        $comida = new Comida();
        $comida->nombre="Papas fritas";
        $comida->marca="lais";
        $comida->anio=2001;

        $comida->save();
        return $comida;
    }
}

