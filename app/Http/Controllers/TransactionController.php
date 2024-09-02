<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function show(){
        return view('home.pay');
    }
    public function transaction(Request $request,Product $product)
    {
        $data = $request->validate([
            'product' => 'required|max:255',
            'name' => 'required|max:255',
            'payment_method' => 'required|max:255',
            'no_hp' => 'required|max:255',
            'alamat' => 'required|max:255',
            'jumlah' => 'required|max:255',
        ]);
        Transaction::create($data);
        // @dd($data);
        return redirect('/pay');
        // Transaction::create([
        //     'product' => $request->get('product'),
        //     'name' => $request->get('name'),
        //     'payment_method' => $request->get('payment_method'),
        //     'no_hp' => $request->get('no_hp'),
        //     'alamat' => $request->get('alamat'),
        //     'jumlah' => $request->get('jumlah'),
        // ]);
        // return redirect()->anchor();
            // Product::update([
            //     'stok' => 'stok' - $request->get('quantity'),
            // ]);
    }
    public function destroy(Transaction $transaction)
    {
        $transaction->destroy($transaction->id);
        return redirect('/dashboard');
    }
}
