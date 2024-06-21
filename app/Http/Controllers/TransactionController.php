<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TransactionController extends Controller
{
    public function index(Request $request)
    {
        $transactions = Transaction::with('user')
            ->when($request->input('name'), function ($query, $name) {
                return $query->where('name', 'like', '%' . $name . '%');
            })
            ->orderBy('id', 'desc')
            ->paginate(5);

        return view('dashboard.transaction.index', compact('transactions'));
    }

    public function create()
    {
        $transactions = Transaction::all();
        $users = User::role('user')->get();
        return view('dashboard.transaction.create', compact('transactions', 'users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'transaction_type' => 'required|string',
            'amount' => 'required|numeric',
            'transaction_date' => 'required|date',
            'status' => 'required|string',
        ]);

        $data = $request->all();
        Transaction::create($data);
        return redirect()->route('transaction.index')->with('success', 'Transaction successfully created');
    }

    public function edit($id)
    {
        $transaction = \App\Models\Transaction::findOrFail($id);
        $users = User::role('user')->get();
        return view('dashboard.transaction.edit', compact('transaction', 'users'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'transaction_type' => 'required|string',
            'amount' => 'required|numeric',
            'transaction_date' => 'required|date',
            'status' => 'required|string',
        ]);

        $transaction = \App\Models\Transaction::findOrFail($id);
        $transaction->update($request->all());

        return redirect()->route('transaction.index')->with('success', 'Transaction successfully updated');
    }

    public function destroy($id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->delete();

        return redirect()->route('transaction.index')->with('success', 'Transaction successfully deleted');
    }
}
