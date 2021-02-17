<?php

namespace App\Http\Controllers;

use App\Models\grafikData;
use Illuminate\Http\Request;

class grafikDatas extends BaseController
{
    
    public function index(Request $request)
    {
        $gd = grafikDatas::all();
        return view('dashboard', compact('gd'));
    }

}
