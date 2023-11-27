<?php

namespace App\Http\Controllers;

use App\Models\Dodo;
use Illuminate\Http\Request;

class DodoController extends Controller
{
    public function dodos()
    {
        return view('catalogue',[
            'dodos'=>Dodo::all(),
        ]);
    }
}
