<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;


class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $descriptions = AboutUs::all();
        return view('dashboard.aboutUs.index', compact('descriptions'));
    }
    
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.aboutUs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'who_we_are' => ['required'],
            'why_daman' => ['required'],
            'our_vision' => ['required'],
        ]);


        $descriptions = new AboutUs;
        $descriptions->who_we_are = $request->who_we_are;
        $descriptions->why_daman = $request->why_daman;
        $descriptions->our_vision = $request->our_vision;
        $descriptions->save();
        return redirect()->route('about-us.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(AboutUs $aboutUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = AboutUs::find($id);
        return view('dashboard.aboutUs.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'who_we_are' => 'required',
            'why_daman' => 'required',
            'our_vision' => 'required',
        ]);

        
        $desc = AboutUs::find($id);

        $desc->who_we_are = $request->input('who_we_are');
        $desc->why_daman = $request->input('why_daman');
        $desc->our_vision = $request->input('our_vision');

        $desc->save();

        return redirect()->route('about-us.index')->with('status','Edit successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        AboutUs::destroy($id);
        return redirect()->route('about-us.index')->with('status','Delete successfully');
    }
}
