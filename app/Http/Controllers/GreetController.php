<?php

namespace App\Http\Controllers;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;

class GreetController extends Controller{
    public function greet(Request $request){
        $name = $request->input('textInput');
        $age = $request->input("ageInput");
        $validator = \Validator::make(
            $request->all(),
                [
                    "textInput" => "required",
                    "ageInput" => "required"
                ],
                [
                    "textInput.required" => "name is required",
                    "ageInput.required" => "age is required",
                ]
        );
        if ($validator->fails()) {
            throw new HttpResponseException(
                response()->json([
                    'message' => 'Validation failed',
                    'errors' => $validator->errors(),
                ], 403)
            );
        } else {
            return view('greet', ['name' => $name],["age" => $age]);
        }
    }
}
