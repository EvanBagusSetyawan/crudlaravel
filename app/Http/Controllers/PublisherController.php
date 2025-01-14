<?php

namespace App\Http\Controllers;

use App\Models\publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allpublisher = publisher::all();
        return view('publisher.index', compact('allpublisher'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('publisher.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // buat validasi
        $validateData = $request->validate([
            'nama_penerbit' => 'required|max:100',
        ]);

        // simpan data
        publisher::create($validateData);

        // redirect ke index publisher
        return redirect()->route('publisher.index'); 
    }

    /**
     * Display the specified resource.
     */
    //  

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(publisher $publisher)
    {
        return view('publisher.edit', compact('publisher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, publisher $publisher)
    {
        // buat validasi
        $validateData = $request->validate([
            'nama_penerbit' => 'required|max:100',
        ]);

        // update data
        $publisher->update($validateData);

        // redirect ke index publisher
        return redirect()->route('publisher.index'); 
    }

    /** 
     * Remove the specified resource from storage.
     */
    public function destroy(publisher $publisher)
    {
        $publisher->delete();
        // redirect ke index publisher
        return redirect()->route('publisher.index'); 

    }
}
