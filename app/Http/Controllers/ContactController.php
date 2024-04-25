<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = new contact;
        $contacts = $contacts->paginate(5);
        return view ('Villa.admin.contact.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $contacts = new contact;
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                
                'subject' => 'required',
                'message' => 'required',
            ]
        );
        
        $contacts->name =  $request->name;
        $contacts->email = $request->email;
        $contacts->subject = $request->subject;
        $contacts->message = $request->message;
        $contacts->save();

        return redirect('/contact')->with('message', 'Your message have been submitted succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $contact = new contact;
        $contact = $contact->where('id', $id)->first();
        return view('Villa.Admin.contact.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $contacts = new contact;
        $contacts = $contacts->where('id', $id)->first();
        $contacts->delete();
       
        return redirect('admin/contacts')->with('delete', 'Your message have been removed');
    }
}
