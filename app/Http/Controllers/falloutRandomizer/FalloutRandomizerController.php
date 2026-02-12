<?php
 
namespace App\Http\Controllers\falloutRandomizer;

use App\Http\Controllers\Controller;

class FalloutRandomizerController extends Controller
{
    public function index(Request $request) {
        return view('falloutRandomizer.index');
    }
}