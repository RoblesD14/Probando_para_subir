<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nota;

class NotaController extends Controller
{
    public function guardar(Request $data){
        $nota = new Nota();
        $nota->ta1 = $data["ta1"];
        $nota->ta2 = $data["ta2"];
        $nota->ta3 = $data["ta3"];
        $nota->ta4 = $data["ta4"];
        $nota->emc = $data["emc"];
        $nota->ef = $data["ef"];
        $nota->id_matricula = 1;
        $nota->save();
        return "Nota guardada";
    }

    public function mostrar(){
        $resultados = Nota::where("id_matricula",1)->get();
        return view("mostrarNotas",["resultado"=>$resultados]);
    }


}
