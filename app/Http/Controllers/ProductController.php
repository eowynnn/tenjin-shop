<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
    public function index()
    {
        $data = Product::orderBy('created_at','desc');
        return view('home.home')->with('data',$data);
    }
    public function add(Request $request)
    {
        // ddd($request);
        // return $request->file('image')->store('assets/img/new');
        $validator = $request->validate([
            'name_product' => 'required|max:255',
            'short_name' => 'required|max:255',
            'deskripsi' => 'required|max:255',
            'slug' => 'required|max:255',
            'image' => 'mimes:jpeg,png,jpg|max:10024',
            'price' => 'required|max:255',
            'stok' => 'required|max:255',
        ]);
        if($request->file('image')){
            $validator['image']= $request->file(['image'])->store('assets/img/new');
        }
        // @dd($validator);
        // $photo = $request->file(['image','mockup_1','mockup_2']);
        // $path = 'assets/img/new';
        // Storage::disk('public')->put($path,file_get_contents($photo));
        Product::create($validator);
        return redirect('/dashboard');
    }
    public function destroy(Product $product)
    {
        if($product->image){
            Storage::delete($product->image);
        }
        $product->destroy($product->id);
        return redirect('/dashboard');
    }
    public function edit(Product $product)
    {
        return view('admin.edit',[
            'product' => $product,
        ]);
    }
    public function update(Request $request,Product $product)
    {
        $rules = [
            'name_product' => 'required|max:255',
            'short_name' => 'required|max:255',
            'deskripsi' => 'required|max:255',
            'image' => 'mimes:jpeg,png,jpg|max:10024',
            'price' => 'required|max:255',
            'stok' => 'required|max:255',
        ];
        if($request->slug != $product->slug){
            $rules['slug'] = 'required|max:255';
        }
        $validator = $request->validate($rules);
        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validator['image']= $request->file(['image'])->store('assets/img/new');
        }
        Product::where('id',$product->id)
                ->update($validator);
        return redirect('dashboard');

    }
}
