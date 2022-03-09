<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Condidat;
use App\Models\Grade;

class CondidatController extends Controller
{
    public function getCondidat(){
        return response()->json(Condidat::all(), 200);
    }

    public function addCondidat(Request $request){
         $condidat = Condidat::create($request->all());
         return response($condidat, 201);
         $grade = Grade::create($request->all());
         return response($grade, 201);
    }

    public function deleteCondidat(Request $request, $id){
        $condidat = Condidat::find($id);
        if(is_null($condidat)){
            return response()->json(['message' => 'Condidat nest pas trouve'], 404);
        }
        $condidat->delete();
        return response()->json(null, 204);
    }
}