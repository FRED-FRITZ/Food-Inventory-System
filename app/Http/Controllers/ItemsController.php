<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items;

class ItemsController extends Controller
{

    public function index()
    {
        $items = Items::orderBy('created_at', 'DESC')->get();

        return view('items.index', compact('items'));
    }


    public function create()
    {
        return view('items.create');
    }


    public function store(Request $request)
    {
        Items::create($request->all());

        return redirect()->route('items')->with('success', 'Items added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $items = Items::findOrFail($id);

        return view('items.show', compact('items'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $items = Items::findOrFail($id);

        return view('items.edit', compact('items'));
    }


    public function update(Request $request, string $id)
    {
        $items = Items::findOrFail($id);

        $items->update($request->all());

        return redirect()->route('items')->with('success', 'items updated successfully');
    }


    public function destroy(string $id)
    {
        $items = Items::findOrFail($id);

        $items->delete();

        return redirect()->route('items')->with('success', 'items deleted successfully');
    }
}
