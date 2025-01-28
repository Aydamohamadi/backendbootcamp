<?php

namespace App\Http\Controllers;

use App\Models\MainGroup;
use Illuminate\Http\Request;
class MainGroupController extends Controller
{
    //
    public function addGroup(Request $request)
    {



        $group = MainGroup::create([
            'name' => $request->name,
        ]);
        
        return response()->json($group, 201);
    }

    public function allGroup()
{
    $groups = MainGroup::all(); 

    return response()->json($groups);
}

}
