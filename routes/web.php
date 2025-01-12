<?php

use App\Http\Controllers\PagesController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;
use App\Models\Job;

Route::get("/", function () {
    return view("home");
});

Route::get("/register", function () {
    return view("welcome");
});

Route::get("/jobs", function () {
    return view("jobs",[
        "jobs" => Job::all()
    ]);
});

Route::get("/users", function () {
    return view("users", [
        "users" => User::all()
    ]);
});

//Route::get("/jobs", function () {
//    return view("jobs",[AllJobsController::class,"allJobs"]);
//});

Route::get("/jobs/{id}", function($id) {
    $job = Job::find($id);
    return view("job",["jobs" => $job]);
});

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
