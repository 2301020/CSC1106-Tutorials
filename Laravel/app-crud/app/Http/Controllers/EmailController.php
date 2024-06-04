<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Email;

class EmailController extends Controller
{
    public function index(){
        $emails = Email::all();
        return view('emails.index', ['emails' => $emails]);
        
    }

    public function create(){
        return view('emails.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'to' => 'required',
            'cc' => 'required',
            'bcc' => 'required',
            'subject' => 'required',
            'message' => 'nullable'
        ]);

        $newEmail = Email::create($data);

        return redirect(route('email.index'));

    }

    public function edit(Email $email){
        return view('emails.edit', ['email' => $email]);
    }

    public function view(Email $email){
        return view('emails.view', ['email' => $email]);
    }

    public function update(Email $email, Request $request){
        $data = $request->validate([
            'to' => 'required',
            'cc' => 'required',
            'bcc' => 'required',
            'subject' => 'required',
            'message' => 'nullable'
        ]);

        $email->update($data);

        return redirect(route('email.index'))->with('success', 'Email Updated Succesffully');

    }

    public function destroy(Email $email){
        $email->delete();
        return redirect(route('email.index'))->with('success', 'Email deleted Succesffully');
    }
}

