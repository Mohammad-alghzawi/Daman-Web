<?php

namespace App\Http\Controllers;

use App\Models\Clinet;
use Illuminate\Http\Request;

class ClinetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = Clinet::all();
        return view('dashboard.clients.index',compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $photo = new Clinet();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName); 
            $photo->image = $imageName;
        }

        $photo->save();
       
        return redirect()->route('clients.index')->with('status','Add successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Clinet $clinet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Clinet::find($id);
        return view('dashboard.clients.edit')->with('data', $data);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $photos = Clinet::find($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName); 
            $photos->image = $imageName;
        }

        $photos->save();
       
        return redirect()->route('clients.index')->with('status','Add successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Clinet::destroy($id);
        return redirect()->route('clients.index')->with('status','Delete successfully');
    }
}
