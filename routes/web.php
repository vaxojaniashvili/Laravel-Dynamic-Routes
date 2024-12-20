<?php

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

Route::get("/jobs/{id}", function ($id) {
        $jobs = [
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
        ];
    $job = \Illuminate\Support\Arr::first($jobs, fn($job) => $job["id"] === (int)$id);
    if(!$job) {
        abort(404,"Not found");
    }
    return view("job",["jobs" => $job]);
});

Route::post("/greet", [GreetController::class,"greet"]);
