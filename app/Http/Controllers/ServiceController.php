<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    function index(Request $request)
    {
        $search = $request->input('search');
        $query = Service::join('service_categories', 'service_categories.id', '=', 'services.category_id')->select('services.*', 'service_categories.title as category');
        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('service_categories.title', 'LIKE', "%$search%");
                $q->where('services.title', 'LIKE', "%$search%");
                $q->where('services.desc', 'LIKE', "%$search%");
            });
        }

        $service = $query->latest()->paginate(10);
        return view('admin.service.index', compact('service', 'search'));
    }

    //view create
    function create()
    {
        $service_category = ServiceCategory::all();
        return view('admin.service.create', compact('service_category'));
    }

    //controller create
    function store(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required|max:100',
            'desc' => 'required',
            'category_id' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'title.required' => 'Title is required',
            'desc.required' => 'Desc is required',
            'title.max' => 'Title maxsimum :max 100 caracter.',
            'image.required' => 'Image is not null',
            'category_id.required' => 'category_id is not null'
        ]);

        $data = Service::create($validate);
        if ($request->hasFile('image')) {
            $request->file('image')->move('service/', $request->file('image')->getclientOriginalName());
            $data->image = $request->file('image')->getclientOriginalName();
            $data->save();
        }

        return redirect('admin/services')->with('message', "Data has been created");

    }

    //view update
    function edit($id)
    {
        $service = Service::find($id);
        $service_category = ServiceCategory::all();
        return view('admin.service.edit', compact('service', 'service_category'));
    }

    //controller update
    function update(Request $request, $id)
    {
        $validate = $request->validate([
            'title' => 'required|max:100',
            'desc' => 'required',
            'category_id' => 'required',
            'image' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'title.required' => 'Title is required',
            'desc.required' => 'Desc is required',
            'title.max' => 'Title maxsimum :max 100 caracter.',
            'category_id.required' => 'category_id is not null'
        ]);

        $data = Service::find($id);
        $data->update($validate );

        if ($request->hasFile('image')) {
            $request->file('image')->move('service/', $request->file('image')->getclientOriginalName());
            $data->image = $request->file('image')->getclientOriginalName();
            $data->save();
        }
        return redirect('admin/services')->with('message', "Data has been updated");;
    }

    //delete
    function destroy($id)
    {
        try {
            $destroy = Service::find($id);
            $destroy->delete();
            return redirect('admin/services')->with('message', "Data has been deleted");
            ;
        } catch (\Exception $th) {
            return redirect('admin/services');
        }
    }
}