<?php
 
namespace App\Http\Controllers\falloutRandomizer;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FalloutRandomizerController extends Controller
{
    public function index(Request $request) {
        return view('falloutRandomizer.index');
    }
}