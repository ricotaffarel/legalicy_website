<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Config;
use App\Models\About;
use App\Models\Contact;

class ConfigController extends Controller
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
        $config = Config::find($id);
        $abouts = About::all();
        $configs = Config::all();
        $contacts = Contact::all();
        return view('admin.config.edit', compact('configs', 'config', 'abouts', 'contacts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'title' => 'required',
            'promo' => 'required',
            'service' => 'required',
            'service_detail' => 'required',
            'about' => 'required',
            'faq' => 'required',
            'contact' => 'required',
            'keyword' => 'required',
            'desc' => 'required',
            'favicon' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'title' => 'Home Title is required',
            'promo' => 'Promo title is required',
            'service' => 'Service title is required',
            'service_detail' => 'Detail Service title is required',
            'about' => 'About title is required',
            'faq' => 'FaQ title is required',
            'contact' => 'Contact title is required',
            'keyword' => 'Keyword is required',
            'desc' => 'Description is required',
        ]);

        $about = $id;
        $data = Config::find($id);
        $data->update($validate );

        if ($request->hasFile('favicon')) {
            $request->file('favicon')->move('favicon/', $request->file('favicon')->getclientOriginalName());
            $data->favicon = $request->file('favicon')->getclientOriginalName();
            $data->save();
        }
        return redirect('admin/config/' . $about . '/edit')->with('message', "Data has been updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
