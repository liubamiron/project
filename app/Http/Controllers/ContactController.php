<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\View;

class ContactController extends Controller
{
public function view(): View
{
    return view('contacts.contactUs');
}

// public function send(Request $request): RedirectResponse 
// {
//     dd($request->all());

//     return redirect()->route('contactUs');
// }
}