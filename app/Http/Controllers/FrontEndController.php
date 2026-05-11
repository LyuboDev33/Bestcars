<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use App\Models\Car;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontEndController extends Controller
{
    /** Return Home View */
    public function home()
    {
        return view('FrontEnd.welcome', [
            'cars' => Car::take(10)->get()
        ]);
    }
    /** Return Contact View */
    public function contact()
    {
        return view('FrontEnd.contact');
    }

    /** Return About View */
    public function about(){
        return view('FrontEnd.about');
    }

    /** Return the service view */
    public function service () {
        return view('FrontEnd.service');
    }

    /** Return the terms */
    public function terms () {
        return view('FrontEnd.legal.terms');
    }

      public function conditions () {
        return view('FrontEnd.legal.conditions');
    }



    /** Send the email from the contact form
     * @param Request
     * @return RedirectResponse
     */
    public function sendContactForm(Request $request)
    {
        $request->validate([
            'first_name' => ['required', 'string'],
            'last_name'  => ['required', 'string'],
            'email'      => ['required', 'email'],
            'phone'      => ['required', 'numeric'],
            'message'    => ['required', 'string'],
        ]);

        Mail::to('bestcarslog@gmail.com')->send(
            new ContactForm(
                $request->first_name,
                $request->last_name,
                $request->email,
                $request->phone,
                $request->message
            )
        );

        return back()->with('successMessageSent', 'Вашето запитване беше изпратено успешно! Ще се свържем с вас скоро!');
    }
}
