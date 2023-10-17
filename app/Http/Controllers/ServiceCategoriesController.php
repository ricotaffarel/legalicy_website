<?php

namespace App\Http\Controllers;

use App\Models\ServiceCategory;
use App\Models\About;
use App\Models\Contact;
use App\Models\Config;
use Illuminate\Http\Request;

class ServiceCategoriesController extends Controller
{
    function index(Request $request)
    {
        $search = $request->input('search');
        $query = ServiceCategory::query();
        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'LIKE', "%$search%");
            });
        }

        $service_category = $query->latest()->paginate(10);
        $abouts = About::all();
        $contacts = Contact::all();
        $configs = Config::all();
        return view('admin.service_categories.index', compact('service_category', 'search', 'abouts', 'contacts', 'configs'));
    }

    //view create
    function create()
    {
        $abouts = About::all();
        $contacts = Contact::all();
        $configs = Config::all();
        return view('admin.service_categories.create', compact('abouts', 'contacts', 'configs'));
    }

    //controller create
    function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
        ], [
            'name.required' => 'Category name is required',
            'name.max' => 'Category name maxsimum :max 100 caracter.',
        ]);

        $create = new ServiceCategory();
        $create->title = $request->name;
        $create->save();

        return redirect('admin/service-category')->with('message', "Data has been created");

    }

    //view update
    function edit($id)
    {
        $service_category = ServiceCategory::find($id);
        $abouts = About::all();
        $contacts = Contact::all();
        $configs = Config::all();
        return view('admin.service_categories.edit', compact('service_category', 'abouts', 'contacts', 'configs'));
    }

    //controller update
    function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:100',
        ], [
            'name.required' => 'Category name is required',
            'name.max' => 'Category name maxsimum :max 100 caracter.',
        ]);

        $update = ServiceCategory::find($id);
        $update->title = $request->name;
        $update->save();

        return redirect('admin/service-category')->with('message', "Data has been update");
        ;

    }

    //delete
    function destroy($id)
    {
        try {
            $destroy = ServiceCategory::find($id);
            $destroy->delete();
            return redirect('admin/service-category')->with('message', "Data has been deleted");
            ;
        } catch (\Exception $th) {
            return redirect('admin/service-category');
        }
    }
}