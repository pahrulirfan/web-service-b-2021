<?php

namespace App\Http\Controllers;

use App\Midsemester;
use Illuminate\Http\Request;

class UtsController extends Controller
{
    public function index()
    {
        $data = Midsemester::all();
//        dd($data);
        return view('mid.index', compact('data'));
    }
}
