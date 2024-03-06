<?php

namespace AkramGhaleb\Contact\Http\Controllers;

use AkramGhaleb\Contact\Mail\ContactMail;
use AkramGhaleb\Contact\Models\Contact;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        if(isset($request->success)){
            return view('contact::contact' , [
                'success' => $request->success
            ]);
        }else if(isset($request->error)){
            return view('contact::contact' , [
                'error' => $request->error
            ]);
        }else{
            return view('contact::contact');
        }

    }

    public function send(Request $request)
    {
        try{
            Mail::to(config('contact.send_email_to'))->send(
                new ContactMail(
                        $request->message,
                        $request->name,
                        $request->subject,
                        $request->email,
                    )
            );
            // insert
            $contact = new Contact();
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->message = $request->message;
            $contact->save();


            return redirect()->route('contact', [
                'success' => 'Sent successfully'
            ]);
        }catch(Exception $exception){
            return redirect()->route('contact', [
                'error' => 'Error sending contact :( Please try again later'
            ]);
        }


    }
}
