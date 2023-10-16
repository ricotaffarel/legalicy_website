<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\About;
use App\Models\Contact;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $query = Testimonial::query();
        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'LIKE', "%$search%");
                $q->where('job', 'LIKE', "%$search%");
                $q->where('testimony', 'LIKE', "%$search%");
            });
        }

        $testimonials = $query->latest()->paginate(10);
        $abouts = About::all();
        $contacts = Contact::all();
        return view('admin.testimonial.index', compact('testimonials', 'abouts', 'contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $abouts = About::all();
        $contacts = Contact::all();
        return view('admin.testimonial.create', compact('abouts', 'contacts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|max:100',
            'job' => 'required',
            'testimony' => 'required',
            'image' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'name.required' => 'Name is required',
            'job.required' => 'Job is required',
            'job.max' => 'Job maxsimum :max 100 caracter.',
            'testimony.required' => 'Testimony is not null'
        ]);

        $data = Testimonial::create($validate);
        if ($request->hasFile('image')) {
            $request->file('image')->move('testimonials/', $request->file('image')->getclientOriginalName());
            $data->image = $request->file('image')->getclientOriginalName();
            $data->save();
        }

        return redirect('admin/testimonial')->with('message', "Data has been created");
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
        $testimonials = Testimonial::find($id);
        $abouts = About::all();
        $contacts = Contact::all();
        return view('admin.testimonial.edit', compact('testimonials', 'abouts', 'contacts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'name' => 'required|max:100',
            'job' => 'required',
            'testimony' => 'required',
            'image' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'name.required' => 'Name is required',
            'job.required' => 'Job is required',
            'job.max' => 'Job maxsimum :max 100 caracter.',
            'testimony.required' => 'Testimony is not null'
        ]);

        $data = Testimonial::find($id);
        $data->update($validate );

        if ($request->hasFile('image')) {
            $request->file('image')->move('testimonials/', $request->file('image')->getclientOriginalName());
            $data->image = $request->file('image')->getclientOriginalName();
            $data->save();
        }
        return redirect('admin/testimonial')->with('message', "Data has been updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $destroy = Testimonial::find($id);
            $destroy->delete();
            return redirect('admin/testimonial')->with('message', "Data has been deleted");
            ;
        } catch (\Exception $th) {
            return redirect('admin/testimonial');
        }
    }
}
