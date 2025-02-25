<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allCategory = Category::all();
        return view('category.index', compact('allCategory'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // buat validasi
        $validateData = $request->validate([
            'name_category' => 'required|max:100',
        ]);

        // simpan data
        category::create($validateData);

        // redirect ke index category
        return redirect()->route('category.index'); 
    }

    /**
     * Display the specified resource.
     */
    // public function show(category $category)
    // {
    //     return view('category.show', compact('category'));
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(category $category)
    {
        return view('category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, category $category)
    {
        // buat validasi
        $validateData = $request->validate([
            'name_category' => 'required|max:100',
        ]);

        // update data
        $category->update($validateData);

        // redirect ke index category
        return redirect()->route('category.index'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category)
    {
        $category->delete();
        // redirect ke index category
        return redirect()->route('category.index'); 

    }
}
