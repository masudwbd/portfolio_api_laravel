<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class WorksController extends Controller
{
    public function WebDesigns(){
        $data = DB::table('webdesigns')->get();
        return response()->json($data);
    }
}
