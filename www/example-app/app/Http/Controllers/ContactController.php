<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Mail\Contact;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\Response;

class ContactController extends Controller
{
    public function index()
    {
        // retourner la vue du formulaire
        return view('contact');
    }

    public function sendMail(Request $request)
    {
        $recipient = 'ceciestuntest@mailo.com';
        $mailInfo = $request->except('_token');
        $mailInfo["destinataire"]=$recipient;
        // TODO: Vérifier que tous les champs sont renseignés
        Mail::to($recipient)->queue(new Contact($mailInfo));


        return redirect()->back()->with('success', 'Mail was sent!');


        $input = $request->all();

        return response()->json([
            'message' => 'Mail was sent !',
            'request' => $input,
        ], Response::HTTP_OK);
    }
}
