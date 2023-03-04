<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function Skills(){
        $data = DB::table('skills')->get();
        return response()->json($data);
    }
    public function Experience(){
        $data = DB::table('experiences')->get();
        return response()->json($data);
    }
    public function Testimonials(){
        $data = DB::table('testimonials')->get();
        return response()->json($data);
    }
}
