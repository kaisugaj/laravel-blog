<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'min:3',
            'email' => 'required|email',
            'subject' => 'min:10',
            'description' => 'min:20'
        ]);

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'description' => $request->description
        );

        Mail::send('contact.index', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to($data['jaga664@gmail.com']);
            $message->subject($data['subject']);
        });

        return redirect('/');
    }

}
