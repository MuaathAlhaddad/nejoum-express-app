<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store( Request $request )
    {
        $args = $request->only( [ 'name', 'email', 'phone', 'subject', 'message' ] );

        Contact::create( $args );

        $adminEmail = 'muaath2000@gmail.com';

        Mail::to( $adminEmail )->send( new ContactMail() );

        return json_encode( [
                'success' => true,
                'message' => "We received your message, thank you!"
            ]
        );
    }
}
