<?php

namespace App\Http\Controllers;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;

class GreetController extends Controller{
    public function greet(Request $request){
        $name = $request->input('textInput');
        $validator = \Validator::make(
            $request->all(),
            ["textInput" => "required"],
            ["textInput.required" => "Name is required"]
        );
        if ($validator->fails()) {
            throw new HttpResponseException(
                response()->json([
                    'message' => 'Validation failed',
                    'errors' => $validator->errors(),
                ], 400)
            );
        } else {
            return view('greet', ['name' => $name]);
        }
    }
}
