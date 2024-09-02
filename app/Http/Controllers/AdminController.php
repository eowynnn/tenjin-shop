<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(Product $product,Transaction $transaction,User $user,Contact $contact)
    {
        return view('admin.home', [
            'products'=> Product::all(),
            'transaction' => Transaction::all(),
            'user'=> User::all(),
            'contact'=> Contact::all()
        ]);
    }
    public function product()
    {
        return view('admin.add_product');
    }
}
