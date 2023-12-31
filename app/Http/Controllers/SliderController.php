<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Pagination\Paginator;

class SliderController extends Controller
{
    function index(Request $request)
    {
        $search = $request->input('search');
        $query = Slider::query();
        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'LIKE', "%$search%");
                $q->where('desc', 'LIKE', "%$search%");
            });
        }

        $sliders = $query->latest()->paginate(10);
        return view('admin.slider.index', compact('sliders'));
    }

    //view create
    function create()
    {
        return view('admin.slider.create');
    }

    //controller create
    function store(Request $request)
    {
        $messages=[
            'title.required' => 'Nama Keunggulan harus diisi',
            'desc.required' => 'Deskripsi Keunggulan harus diisi',
            'image.required' => 'Deskripsi Keunggulan harus diisi',
        ];

        $validateData = $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'image' => 'required',
        ], $messages
        );

        $data = Slider::create($validateData);

        if($request->hasFile('image')){
            $request->file('image')->move('sliders/', $request->file('image')->getclientOriginalName());
            $data->image = $request->file('image')->getclientOriginalName();
            $data->save();
        }
 
        return redirect('/admin/slider')->with('message', "Data has been created");;
    }

    //view update
    function edit(string $id)
    {
        $sliders = Slider::find($id);
        return view('admin.slider.edit', compact('sliders'));
    }

    //controller update
    function update(Request $request, string $id)
    {
        $data = Slider::find($id);
        $data->update($request->all());

        if($request->hasFile('image')){
            $request->file('image')->move('sliders/', $request->file('image')->getclientOriginalName());
            $data->image = $request->file('image')->getclientOriginalName();
            $data->save();
        }

        return redirect('/admin/slider')->with('message', "Data has been updated");;
    }

    //delete
    function destroy(string $id)
    {
        Slider::destroy($id);
        return redirect('/admin/slider')->with('message', "Data has been deleted");;
    }
}
