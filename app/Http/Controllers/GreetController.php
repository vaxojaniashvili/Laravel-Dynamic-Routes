<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetController extends Controller {
    public function greet (Request $request) {
        $name = $request->input("textInput");
        $age = $request->input("ageInput");
        $validator = \Validator(
            $request->all(),
            ["textInput" => "required","ageInput" => "required"],
            ["textInput.required" => "name is required", "ageInput.required" => "age is required"]
        );
        if($validator->fails()) {
            return response()->json([
                "errors" => $validator->errors()
            ],403);
        } else {
            return view("greet",["name" => $name, "age" => $age]);
        }
}
}
