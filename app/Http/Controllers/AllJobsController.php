<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllJobsController extends Controller
{
    public function allJobs () {
        return response()->json([
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
    }
}
