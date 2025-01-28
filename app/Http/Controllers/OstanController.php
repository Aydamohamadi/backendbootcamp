<?php

namespace App\Http\Controllers;
use App\Models\Ostan;

use Illuminate\Http\Request;

class OstanController extends Controller
{
    public function getOstan(){
     $result= Ostan::all();
     return response()->json(['result' => $result], 200);

    }

}
