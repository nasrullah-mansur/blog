<?php

namespace App\Http\Controllers;

use App\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function store(Request $request) {
        $this->validate($request, array(
            'email' => 'required|email|max:255'
        ));

       $dataSub = Subscriber::where('email', $request->email)->first();
        if($dataSub == '') {
            $subscriber = new Subscriber();
            $subscriber->email = $request->email;
            $subscriber->save();
        } else {
            return 'no';
        }

        return redirect()->back();
    }
}
