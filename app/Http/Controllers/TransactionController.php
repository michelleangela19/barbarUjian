<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function store(Request $request){
        Transaction::create([
            "user" => $request->user_id,
            "book_id" => $request->book_id,
            "transaction_date" => date(now())
        ]);

        return redirect($request->user_id);
    }
}
