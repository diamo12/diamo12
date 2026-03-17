<?php
 
namespace App\Http\Controllers\guestbook;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class GuestbookController extends Controller
{
    public function index(Request $request) {
        return view('guestbook.index');
    }
}