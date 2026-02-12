<?php
 
namespace App\Http\Controllers\falloutRandomizer;

class FalloutRandomizerController extends Controller
{
    public function index(Request $request) {
        return view('falloutRandomizer.index');
    }
}