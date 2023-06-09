<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function __construct()
    {
        
    }

    public function index()
    {
        $contacts = Contact::all();
        
        return view('contacts/index', compact('contacts')); 
    }

    public function create()
    {
        return view('contacts/create'); 
    }

    public function store(ContactRequest $request)
    {
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->contact = $request->contact;
        $contact->email = $request->email;
        $contact->save();

        if ($contact) {
            return redirect()->route('contact.index');
        }
    }

    public function show($id)
    {
        $contact = Contact::find($id);

        return view('contacts/show', compact('contact'));
    }

    public function edit($id)
    {
        $contact = Contact::find($id);

        return view('contacts/edit', compact('contact'));
    }

    public function update(ContactRequest $request)
    {
        $contact = Contact::find($request->id);
        $contact->name = $request->name;
        $contact->contact = $request->contact;
        $contact->email = $request->email;
        $contact->save();

        if ($contact) {
            return redirect()->route('contact.index');
        }
    }

    public function delete($id)
    {
        $contact = Contact::find($id);
        $contact->delete();

        return redirect()->route('contact.index');
    }
}
