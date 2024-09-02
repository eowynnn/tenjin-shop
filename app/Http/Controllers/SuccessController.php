<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Transaction;

use Illuminate\Http\Request;

class SuccessController extends Controller
{
    public function index()
    {
        return view('home.pay');
    }
}
