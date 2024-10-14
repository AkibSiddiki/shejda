<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.messages-index', compact('messages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $message = new Message;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');
        $message->save();



        // Send email to admin
        Mail::send('shared.mail', ['body' => $request->input('message'), 'name' => $request->input('name'), 'email' => $request->input('email')], function ($mail) use ($request) {
            $mail->from(env('MAIL_FROM_ADDRESS', 'support@shejda.com'));
            $mail->to('shejdadevelopment@gmail.com')->subject('Contact Us Message from ' . $request->input('name'));
            $mail->cc(['akib.siddiki@gmail.com', 'mahedi@emythmakers.com'])->subject('Contact Us Message from ' . $request->input('name'));
        });

        // Send email to user
        Mail::send('shared.mail', ['body' => 'Thank you for contacting us. We will get back to you soon.', 'name' => 'Shejda Support Team', 'email' => 'shejdadevelopment@gmail.com'], function ($mail) use ($request) {
            $mail->from(env('MAIL_FROM_ADDRESS', 'support@shejda.com'));
            $mail->to($request->input('email'))->subject('Thank you for contacting Shejda');
        });

        return redirect()->route('web.contactUs')->with('success', 'Message sent successfully');
    }

    public function messageSeen(Message $message)
    {
        $message->is_seen = 1;
        $message->save();
        return redirect()->back();
    }

    //mail body
    public function messageBody(Message $message)
    {
        return view('shared.mail', compact('message'));
    }}
