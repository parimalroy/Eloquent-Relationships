<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //get all Students with contact

    public function getContact(){
        $contact=Contact::with('student')->get();
        return $contact;
    }

}
