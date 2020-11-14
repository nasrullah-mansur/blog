<?php

namespace App\Http\Controllers;

use App\Mail\QuickMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function quickMail(Request $request) {
        
        $this->validate($request, array(
            'email' => 'required|email|max:255',
            'subject' => 'required|max:255',
            'content' => 'required'
        ));

        Mail::to($request->email)->send(new QuickMail($request));
        return redirect()->back();
    }
}
