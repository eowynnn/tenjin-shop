<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactContoller extends Controller
{
    public function store(Request $request)
    {


        Contact::create([
            'email' => $request->get('email'),
            'massage' => $request->get('massage'),
        ]);

        return redirect('/',);
    }
    public function destroy(Contact $contact)
    {
        $contact->destroy($contact->id);
        return redirect('/dashboard');
    }

}
