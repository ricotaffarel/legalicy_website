<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChoiseUs;
use App\Models\About;
use App\Models\Contact;

class ChoiseUsController extends Controller
{
    function index(Request $request)
    {
        $search = $request->input('search');
        $query = ChoiseUs::query();
        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'LIKE', "%$search%");
                $q->where('desc', 'LIKE', "%$search%");
            });
        }

        $choises = $query->latest()->paginate(10);
        $abouts = About::all();
        $contacts = Contact::all();
        return view('admin.choiseUs.index', compact('choises', 'abouts', 'contacts'));
    }

    //view create
    function create()
    {
        $abouts = About::all();
        $contacts = Contact::all();
        return view('admin.choiseUs.create', compact('abouts', 'contacts'));
    }

    //controller create
    function store(Request $request)
    {
        $messages = [
            'title.required' => 'Nama Keunggulan harus diisi',
            'desc.required' => 'Deskripsi Keunggulan harus diisi',
            'image.required' => 'Deskripsi Keunggulan harus diisi',
        ];

        $validateData = $request->validate(
            [
                'title' => 'required',
                'desc' => 'required',
                'image' => 'required',
            ],
            $messages
        );

        $data = ChoiseUs::create($validateData);

        if ($request->hasFile('image')) {
            $request->file('image')->move('choisesUs/', $request->file('image')->getclientOriginalName());
            $data->image = $request->file('image')->getclientOriginalName();
            $data->save();
        }

        return redirect('/admin/choiseus')->with('message', "Data has been created");
        
    }

    //view update
    function edit(string $id)
    {
        $choises = ChoiseUs::find($id);
        $abouts = About::all();
        $contacts = Contact::all();
        return view('admin.choiseUs.edit', compact('choises', 'abouts', 'contacts'));
    }

    //controller update
    function update(Request $request, string $id)
    {
        $data = ChoiseUs::find($id);
        $data->update($request->all());

        if ($request->hasFile('image')) {
            $request->file('image')->move('choisesUs/', $request->file('image')->getclientOriginalName());
            $data->image = $request->file('image')->getclientOriginalName();
            $data->save();
        }

        return redirect('/admin/choiseus')->with('message', "Data has been updated");
        ;
    }

    //delete
    function destroy(string $id)
    {
        ChoiseUs::destroy($id);
        return redirect('/admin/choiseus')->with('message', "Data has been deleted");
        ;
    }
}