<?php

namespace App\Http\Controllers\Front\Devis;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DevisController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.devis.index');
    }
}
