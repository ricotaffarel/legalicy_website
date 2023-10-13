<?php

namespace App\Http\Controllers;

use App\Models\ServiceCategory;
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
        return view('admin.service_categories.index', compact('service_category', 'search'));
    }

    //view create
    function create()
    {
        return view('admin.service_categories.create');
    }

    //controller create
    function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|max:100',
            ], [
                'name.required' => 'Category name is required',
                'name.max' => 'Category name maxsimum :max 100 caracter.',
            ]);

            $create = new ServiceCategory();
            $create->title = $request->name;
            $create->save();

            return redirect('admin/service-category');
        } catch (\Exception $e) {
            return redirect('admin/service-category');
        }
    }

    //view update
    function edit($id)
    {
        $service_category = ServiceCategory::find($id);
        return view('admin.service_categories.edit', compact('service_category'));
    }

    //controller update
    function update(Request $request, $id)
    {
        try {
            $request->validate([
                'name' => 'required|max:100',
            ], [
                'name.required' => 'Category name is required',
                'name.max' => 'Category name maxsimum :max 100 caracter.',
            ]);

            $update = ServiceCategory::find($id);
            $update->title = $request->name;
            $update->save();

            return redirect('admin/service-category');
        } catch (\Exception $e) {
            return redirect('admin/service-category');
        }
    }

    //delete
    function destroy($id)
    {
        try {
            $destroy = ServiceCategory::find($id);
            $destroy->delete();
            return redirect('admin/service-category');
        } catch (\Exception $th) {
            return redirect('admin/service-category');
        }
    }
}