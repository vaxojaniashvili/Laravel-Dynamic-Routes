<?php

use App\Http\Controllers\AllJobsController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;
Route::get("/", function () {
    return view("home");
});

Route::get("/register", function () {
    return view("welcome");
});

Route::get("/jobs", function () {
    return view("jobs",[
        "jobs" => [
            [
                "id" => 1,
                "title" => "Web Developer",
                "salary" => "30,000$",
                "location" => "Georgia",
            ],
            [
                "id" => 2,
                "title" => "UI/UX Designer",
                "salary" => "10,000$",
                "location" => "Bangladesh",
            ],
            [
                "id" => 3,
                "title" => "Cyber Security",
                "salary" => "60,000$",
                "location" => "Russia",
            ],
        ]
    ]);
});

//es ar mushaaobs da unda gavfixo controlershi gavitane ://
//Route::get("/jobs", function () {
//    return view("jobs",[AllJobsController::class,"allJobs"]);
//});

Route::get("/jobs/{id}", [JobsController::class,"jobsById"]);

Route::get("/pages/{category}/{id}",[PagesController::class,"validationPages"])->where([
    "category" => "[a-zA-z]+",
    "id" => "[0-9]+"
]);

Route::get("/test/{id}/{name}", function ($id,$name) {
    echo "id ".$id . " name ".$name;
})->where([
    "id" => "[0-9]+",
    "name" => "[a-zA-Z]+"
]);

Route::fallback(function () {
   echo "გვერდი ვერ მოიძებნა :/";
});
Route::get("/ip", function (Request $request) {
    echo $request->ip();
});

//Route::resource("posts",PostController::class);


Route::post("/greet", [GreetController::class,"greet"]);
