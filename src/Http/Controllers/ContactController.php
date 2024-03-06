<?php

namespace AkramGhaleb\Contact\Http\Controllers;

use AkramGhaleb\Contact\Mail\ContactMail;
use AkramGhaleb\Contact\Models\Contact;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
        try{
        // Validate the request.

            // php artisan make:mail ContactMail --markdown=contact.email
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

            //Session::flash('message', 'Sent successfully');
            Redirect::back()->with('message', 'Sent successfully');
        }catch(Exception $exception){
            //Session::flash('error', 'Error sending contact :( Please try again later');
            Redirect::back()->with('message', 'Error sending contact :( Please try again later');
        }


    }
}
