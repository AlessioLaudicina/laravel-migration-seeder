<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $trains = Train::whereDate('created_at', '2023-05-15')->get();
        return view ('home', compact('trains'));
    }
}
