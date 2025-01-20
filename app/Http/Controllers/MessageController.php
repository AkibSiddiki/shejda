<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;




class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.messages-index', compact('messages'));
    }

    public function store(Request $request)
    {
        $recaptcha = $request->input('g-recaptcha-response');

        if (is_null($recaptcha)) {
            return redirect()->route('web.contactUs')->with('error', 'Please check the reCAPTCHA box.');
        }

        $response = Http::get("https://www.google.com/recaptcha/api/siteverify",[
            'secret' => config('services.recaptcha.secret'),
            'response' => $recaptcha
        ]);

        $data = $response->json();

        if (!$data['success']) {
            return redirect()->route('web.contactUs')->with('error', 'Please check the reCAPTCHA box.');
        }

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
    }
}
