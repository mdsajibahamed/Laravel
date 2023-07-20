<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(){
        $users = User::all();  
        return view("home")->with("users", $users);
    }
    public function home(){
        return view("home");
    }
    public function about(){
        return view("about");
    }
    public function product(){
        return view("product");
    }
}
