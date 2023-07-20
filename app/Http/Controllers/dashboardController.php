<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function dash(){
        $days = ["Sunday","Monday","Thuesday","Wednesday","Thursday","Friday","Saturday"];
        return view("dashboard.dash",['Days'=>$days]);
    }
 }
    
