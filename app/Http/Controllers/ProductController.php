<?php

namespace App\Http\Controllers;
use App\Models\ProductModel;

use Illuminate\Http\Request;

class ProductController extends Controller
{
     public function index(){
        return view('backend.index');
    }
    public function Product(){
         $products = ProductModel::all();
        return view('backend.product', compact('products'));
    }
    public function add_product(){
        return view('backend.add_product');
    }

    public function store(Request $request){
       $product = new ProductModel();
  
        if ($request->hasFile('product_image')) {
            $image = $request->file('product_image');
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('upload/product_image'),$imageName);
            $product->product_image = $imageName;
        }

       
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        // $product->product_image = $imageName;
        $product->product_description = $request->product_description;
        $product->product_category = $request->product_category;
        $product->product_brand = $request->product_brand;
        $product->product_quantity = $request->product_quantity;
        $product->product_status = $request->product_status;
        $product->product_rating = $request->product_rating;
        $product->product_discount = $request->product_discount;
        $product->product_discount_price = $request->product_discount_price;
        $product->save();
        return redirect()->route('product');
    }

    public function update_product(ProductModel $id){
        // $product = ProductModel::find($id);
        // return view('backend.update_product', compact('product'));
        echo $id;
    }

    public function update(Request $request){
        $product = ProductModel::find($request->id);
        if ($request->hasFile('product_image')) {
            $image = $request->file('product_image');
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('upload/product_image'),$imageName);
            $product->product_image = $imageName;
        }
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_description = $request->product_description;
        $product->product_category = $request->product_category;
        $product->product_brand = $request->product_brand;
        $product->product_quantity = $request->product_quantity;
        $product->product_status = $request->product_status;
        $product->product_rating = $request->product_rating;
        $product->product_discount = $request->product_discount;
        $product->product_discount_price = $request->product_discount_price;
        $product->save();
        return redirect()->route('product');
    }

    public function delete($id){
        $product = ProductModel::find($id);
        $product->delete();
        return redirect()->route('product');
    }

    public function product_edit($id){
        $product2 = ProductModel::findOrFail($id);
        dd($product2);
        // return view('backend.edit_product', compact('product'));
    }
}