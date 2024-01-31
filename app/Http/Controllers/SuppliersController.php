<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suppliers;

class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suppliers = Suppliers::orderBy('created_at', 'DESC')->get();

        return view('suppliers.index', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Suppliers::create($request->all());

        return redirect()->route('suppliers')->with('success', 'Suppliers added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $suppliers = Suppliers::findOrFail($id);

        return view('suppliers.show', compact('suppliers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $suppliers = Suppliers::findOrFail($id);

        return view('suppliers.edit', compact('suppliers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $suppliers = Suppliers::findOrFail($id);

        $suppliers->update($request->all());

        return redirect()->route('suppliers')->with('success', 'suppliers updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $suppliers = Suppliers::findOrFail($id);

        $suppliers->delete();

        return redirect()->route('suppliers')->with('success', 'suppliers deleted successfully');
    }
}
