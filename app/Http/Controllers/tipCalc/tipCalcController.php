<?php
 
namespace App\Http\Controllers\tipCalc;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class tipCalcController extends Controller
{
    public function index(Request $request) {
        return view('tipCalc.index');
    }
}