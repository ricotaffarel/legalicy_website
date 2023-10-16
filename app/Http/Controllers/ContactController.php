<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\About;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $contact = Contact::find($id);
        $abouts = About::all();
        $contacts = Contact::all();
        return view('admin.contact.edit', compact('contact', 'abouts', 'contacts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'iframe' => 'required',
            'maps' => 'required',
            'website' => 'required',
            'instagram' => 'required',
            'tiktok' => 'required',
            'twitter' => 'required',
            'facebook' => 'required',
            'youtube' => 'required',
            'linkedin' => 'required',
        ], [
            'address.required' => 'Address is required',
            'phone.required' => 'Phone is required',
            'email.required' => 'Email is required',
            'iframe.required' => 'Iframe is required',
            'maps.required' => 'Link Maps is required',
            'website' => 'Link Website is required',
            'instagram' => 'Link Instagram is required',
            'tiktok' => 'Link Tiktok is required',
            'twitter' => 'Link Twitter is required',
            'facebook' => 'Link Facebook is required',
            'youtube' => 'Link YouTube is required',
            'linkedin' => 'Link Linkedin is required',
        ]);

        $contact = $id;
        $data = About::find($id);
        $data->update($validate );
        return redirect('admin/about/' . $contact . '/edit')->with('message', "Data has been updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
