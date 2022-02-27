<?php

namespace App\Http\Controllers;

use App\Http\Request\ContactUsRequest;
use App\Services\ContactUsMailer;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use App\Services\ModelLogger;


class ContactUsController extends Controller
{
    public function view(){
        return view('contacts.contactUs');
    }


    public function send(ContactUsRequest $request, ContactUsMailer $mailer): RedirectResponse
    {
       
        $data = $request->validated();

        
        \Log::debug('test', $data);
        

        $mailer->send($data);

        return redirect()->route('contactUs')->withInput($data);
        
    }
}
