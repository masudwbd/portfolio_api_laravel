<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ContactController extends Controller
{
    public function Store(Request $request){
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        );

        DB::table('contact_messages')->insert($data);
        return response()->json('success');
    }
}
