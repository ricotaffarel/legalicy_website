<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Discount;
use App\Models\Service;
use App\Models\About;
use App\Models\Contact;
use App\Models\Config;

class DiscountController extends Controller
{
    function index(Request $request)
    {
        $search = $request->input('search');
        $query = Discount::join('services', 'services.id', '=', 'discounts.service_id')->select('discounts.*', 'services.title as category');
        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('service_id.title', 'LIKE', "%$search%");
                $q->where('discount.start_at', 'LIKE', "%$search%");
                $q->where('discount.end_at', 'LIKE', "%$search%");
            });
        }

        $discounts = $query->latest()->paginate(10);
        $abouts = About::all();
        $contacts = Contact::all();
        $configs = Config::all();
        return view('admin.discount.index', compact('discounts', 'search', 'abouts', 'contacts', 'configs'));
    }

    //view create
    function create()
    {
        $service_category = Service::all();
        $abouts = About::all();
        $contacts = Contact::all();
        $configs = Config::all();
        return view('admin.discount.create', compact('service_category', 'abouts', 'contacts', 'configs'));
    }

    //controller create
    function store(Request $request)
    {
        $validate = $request->validate([
            'start_at' => 'required',
            'end_at' => 'required',
            'service_id' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'start_at.required' => 'Title is required',
            'end_at.required' => 'Desc is required',
            'image.required' => 'Image is not null',
            'service_id.required' => 'service_id is not null'
        ]);

        $data = Discount::create($validate);
        if ($request->hasFile('image')) {
            $request->file('image')->move('discounts/', $request->file('image')->getclientOriginalName());
            $data->image = $request->file('image')->getclientOriginalName();
            $data->save();
        }

        return redirect('admin/discount')->with('message', "Data has been created");

    }

    //view update
    function edit($id)
    {
        $discount = Discount::find($id);
        $service_category = Service::all();
        $abouts = About::all();
        $contacts = Contact::all();
        $configs = Config::all();
        return view('admin.discount.edit', compact('discount', 'service_category', 'abouts', 'contacts', 'configs'));
    }

    //controller update
    function update(Request $request, $id)
    {
        $validate = $request->validate([
            'start_at' => 'required',
            'end_at' => 'required',
            'service_id' => 'required',
            'image' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'start_at.required' => 'Start at is required',
            'end_at.required' => 'End at is required',
            'service_id.required' => 'Service is required',
        ]);

        $data = Discount::find($id);
        $data->update($request->all());

        if ($request->hasFile('image')) {
            $request->file('image')->move('discounts/', $request->file('image')->getclientOriginalName());
            $data->image = $request->file('image')->getclientOriginalName();
            $data->save();
        }

        return redirect('/admin/discount')->with('message', "Data has been updated");
        
    }

    //delete
    function destroy($id)
    {
        try {
            $destroy = Discount::find($id);
            $destroy->delete();
            return redirect('admin/discount')->with('message', "Data has been deleted");
            ;
        } catch (\Exception $th) {
            return redirect('admin/discount');
        }
    }
}
