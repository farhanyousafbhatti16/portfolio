<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    //

    public function index()
    {
        return view('index');
    }

    public function submit(Request $request)
    {
       
        // Example: Sending an email with the contact form data
        $details = [
            'full_name' => $request->input('full_name'),
            'email' => $request->input('email'),
            'mobile_number' => $request->input('mobile_number'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ];

        // You can send an email or store details in the database here
        Mail::raw("Message: {$details['message']}", function ($message) use ($details) {
            $message->to('farhanbhatti644@gmail.com') // Replace with your email
                ->subject($details['subject'])
                ->from($details['email'], $details['full_name']);
        });

        return back()->with('success', 'Your message has been sent successfully!');
    }


    public function sendMail(Request $request)
{
    

    // Use Laravel's Mail functionality to send an email
    Mail::send([], [], function ($message) use ($request) {
        $message->to('recipient@example.com') // Replace with actual recipient email
            ->subject($request->subject)
            ->setBody('Name: ' . $request->name . '<br>Email: ' . $request->email . '<br>Mobile: ' . $request->mobile . '<br>Message: ' . $request->message, 'text/html');
        $message->from($request->email, $request->name);
    });

    return response()->json(['message' => 'Mail sent successfully']);
}
    
}
