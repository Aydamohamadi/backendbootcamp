<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\MainGroup;
use Illuminate\Http\Request;

class CourseController extends Controller
{   
    
    public function addCourse(Request $request)
    {



        $group = Course::create([
            'name' => $request->name,
            'main_group_id' => $request->main_group_id
        ]);

        return response()->json($group, 201);
    }

    public function allCourse()
    {
        $course = Course::all(); 
    
        return response()->json($course);
    }
    
}
