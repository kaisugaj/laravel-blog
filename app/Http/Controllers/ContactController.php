<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact.index');
    }

    public function store()
    {
        request()->validate([
            'email' => 'required|email',
            'subject' => 'required|min:10',
            'description' => 'required|min:20'
        ]);

        $data = array(
            'email' => request()->email,
            'subject' => request()->subject,
            'description' => request()->description
        );

       Mail::send('contact.index', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to($data['przykład@pp.com']);
            $message->subject($data['subject']);
        });

        return redirect('/contact');
    }

}
