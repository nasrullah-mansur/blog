<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Mail\ReplyMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function index() {
        $contacts = Contact::all();
        return view('contact.index', compact('contacts'));
    }

    public function store(Request $request) {

    $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'content' => 'required',
        ], [
            'name.required' => 'Please write your name',
            'email.required' => 'Please give me your email',
            'subject.required' => 'Please write subject',
            'content.required' => 'Please write massage',
        ]);





        $this->validate($request, array(
            
        ));

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->content = $request->content;
        $contact->status = 0;
        $contact->save();
        return redirect()->back();
    }

    public function show($id) {
        $contact = Contact::findOrFail($id);
        Contact::where('id', $id)->update(['status'=>1]);
        $info = Contact::where('id', $id)->first();
        return view('contact.show', compact('info'));
    }

    public function reply($id) {
        $contact = Contact::findOrFail($id);
        Contact::where('id', $id)->update(['status'=>1]);
        $info = Contact::where('id', $id)->first();
        return view('contact.reply', compact('info'));
    }

    public function sendreply(Request $request) {
        $this->validate($request, array(
            'subject' => 'required|string|max:255',
            'content' => 'required|string'
        ));

        Mail::to($request->email)->send(new ReplyMail($request));
        return redirect()->route('contact.index');
    }

    public function destroy(Request $request, $id) {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect()->back();
    }
}
