<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class ContactPageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('pages.contact');
    }

    public function submit(Request $request)
    {
        // Validate
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        // You can send email or save to DB here
        Message::create($request->all());

        return redirect()->route('contact.page')->with('success', 'Message sent!');
    }
}
