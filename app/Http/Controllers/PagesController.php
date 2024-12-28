<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PagesController extends Controller{
    public function validationPages($cat,$id){
        return view("category",["category" => $cat,"id" => $id]);
    }
}
