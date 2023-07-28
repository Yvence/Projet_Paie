<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departement;
use App\Models\Employé;

class defautController extends Controller
{
    public function index()
    {
        $totalDepartement=Departement::all()->count();
        $totalEmployé=Employé::all()->count();
        return view('welcome',compact('totalDepartement','totalEmployé'));
    }
    
}
