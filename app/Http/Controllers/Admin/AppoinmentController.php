<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appoinment;

class AppoinmentController extends Controller
{
    public function index()
    {
        
        $appoinment = Appoinment::orderBy('id','desc')->get();

        dd($appoinment);
        
        // return view('admin.appointment.index',['menu' => 'appoinment', 'appoinment' => $appoinment]);
    }
}
