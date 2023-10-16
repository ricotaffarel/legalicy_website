<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Contact;

class AboutController extends Controller
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
        $about = About::find($id);
        $abouts = About::all();
        $contacts = Contact::all();
        return view('admin.about.edit', compact('about', 'abouts', 'contacts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'title' => 'required|max:100',
            'desc' => 'required',
            'experience' => 'required',
            'client' => 'required',
            'project' => 'required',
            'image' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'title.required' => 'Name is required',
            'desc.required' => 'Job is required',
            'experience.required' => 'Experience is required',
            'client.required' => 'Client is required',
            'project.required' => 'Project is required',
        ]);

        $about = $id;
        $data = About::find($id);
        $data->update($validate );

        if ($request->hasFile('image')) {
            $request->file('image')->move('abouts/', $request->file('image')->getclientOriginalName());
            $data->image = $request->file('image')->getclientOriginalName();
            $data->save();
        }
        return redirect('admin/about/' . $about . '/edit')->with('message', "Data has been updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
