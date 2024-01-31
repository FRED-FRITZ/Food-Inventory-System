<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{

    public function index()
    {
        $transaction = Transaction::orderBy('created_at', 'DESC')->get();

        return view('transaction.index', compact('transaction'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('transaction.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Transaction::create($request->all());

        return redirect()->route('transaction')->with('success', 'Transaction added successfully');
    }


    public function show(string $id)
    {
        $transaction = Transaction::findOrFail($id);

        return view('transaction.show', compact('transaction'));
    }


    public function edit(string $id)
    {
        $transaction = Transaction::findOrFail($id);

        return view('transaction.edit', compact('transaction'));
    }


    public function update(Request $request, string $id)
    {
        $transaction = Transaction::findOrFail($id);

        $transaction->update($request->all());

        return redirect()->route('transaction')->with('success', 'transaction updated successfully');
    }


    public function destroy(string $id)
    {
        $transaction = Transaction::findOrFail($id);

        $transaction->delete();

        return redirect()->route('transaction')->with('success', 'transaction deleted successfully');
    }
}
