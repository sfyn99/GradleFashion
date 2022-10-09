<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\category;

use Illuminate\Http\Request;

class ProductController extends Controller
{
 public function addProductfunc(){
   $category = category::all();

    return view('Product.addProduct',compact('category'));
 }
 public function addProductPostfunc(Request $r){

   $Product=new Product();
   
   $Product->productName=$r->productName;
   $Product->productPrice=$r->productPrice;
   $Product->productDecript=$r->productDescript;
   $Product->categoryId=$r->categoryId;
   $Product->save();
   return redirect('showProduct');
  }
  public function showProductfunc(){

   $Product = Product::all();
   return view ('Product.Product',compact('Product'));
}
}
