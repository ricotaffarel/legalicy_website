<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\Config;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $query = Faq::query();
        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('question', 'LIKE', "%$search%");
                $q->where('answer', 'LIKE', "%$search%");
            });
        }

        $faqs = $query->latest()->paginate(10);
        $abouts = About::all();
        $contacts = Contact::all();
        $configs = Config::all();
        return view('admin.faq.index', compact('faqs', 'search', 'abouts', 'contacts', 'configs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $abouts = About::all();
        $contacts = Contact::all();
        $configs = Config::all();
        return view('admin.faq.create', compact('abouts', 'contacts', 'configs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|max:255',
            'answer' => 'required',
        ], [
            'question.required' => 'Question is required',
            'question.max' => 'Question maxsimum :max 255 caracter.',
            'answer.required' => 'Answer is required',
        ]);

        $create = new Faq();
        $create->question = $request->question;
        $create->answer = $request->answer;
        $create->save();

        return redirect('admin/faq')->with('message', "Data has been created");
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
        $abouts = About::all();
        $contacts = Contact::all();
        $faq = Faq::find($id);
        $configs = Config::all();
        return view('admin.faq.edit', compact('abouts', 'contacts', 'faq', 'configs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'question' => 'required|max:255',
            'answer' => 'required',
        ], [
            'question.required' => 'Question is required',
            'question.max' => 'Question maxsimum :max 255 caracter.',
            'answer.required' => 'Answer is required',
        ]);

        $update = Faq::find($id);
        $update->question = $request->question;
        $update->answer = $request->answer;
        $update->save();

        return redirect('admin/faq')->with('message', "Data has been update");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $destroy = Faq::find($id);
            $destroy->delete();
            return redirect('admin/faq')->with('message', "Data has been deleted");
            ;
        } catch (\Exception $th) {
            return redirect('admin/faq');
        }
    }
}
