<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Appoinment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('welcome');
    }
    public function store(Request $request)
    {
        $data = $request->all();
        Appoinment::create($data);

        
    }
}

