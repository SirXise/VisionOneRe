<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function postMessage(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        try {

            Mail::raw(
                "You have a new message from your contact form:\n\n" .
                "Name: {$data['name']}\n" .
                "Email: {$data['email']}\n" .
                "Subject: {$data['subject']}\n" .
                "Message:\n{$data['message']}",
                function($message) use ($data) {
                    $message->to('faiz@visionone.com.my')  // Replace with your email
                            ->subject('Contact Form Message');
                    $message->from($data['email'], $data['name']);
                }
            );

            return back()->with('success', 'Thanks for contacting us! We will get back to you soon.');
        } catch (\Exception $e) {
            return back()->with('error', 'There was an error sending your message. Please try again later.');
        }
    }
}
