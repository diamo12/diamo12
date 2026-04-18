<?php
 
namespace App\Http\Controllers\guestbook;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Guestbook;

class GuestbookController extends Controller
{
    public function index(Request $request) {
        return view('guestbook.index');
    }

    public function create(Request $request) {
        return view('guestbook.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'website_url' => 'required',
            'message' => 'required',
        ]);

        $guestbook = new Guestbook;

        $guestbook->name = $request->name;
        $guestbook->website_url = $request->website_url;
        $guestbook->message = $request->message;

        $guestbook->save();

        if($guestbook->id) {
            $this->success .= 'Guestbook entry was created.';
        } else {
            $this->error .= 'Guestbook entry was not created.';
        }

        return redirect()->route('guestbook.index', ['guestbook' => $guestbook->id])->with('success', $this->success)->with('error', $this->error);
    }
}