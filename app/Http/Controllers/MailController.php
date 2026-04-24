<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;

class MailController extends Controller
{
    public function sendMail() {
        $to = "selfworthless130@gmail.com";
        $subject = "Test Email from Laravel server.";
        $body = "Hello! How are you? This is a test email...";

        Mail::raw($body, function($body) use ($to, $subject) {
            $body->to($to)->subject($subject);
        });
        
        return "Email sent successfully!";
    }
}
