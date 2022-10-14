<?php

namespace App\Http\Controllers;
use App\Models\subProduct;

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
   if($r->hasfile('image'))
{

$file = $r->file('image');
$ext=$file->getClientOriginalExtension();
$fileimage=time().".".$ext;
$file->move('image',$fileimage);
$Product->productImage=$fileimage;
 

}
   $Product->save();
   
   $subProductImage = $r->file("subProductImageInput");
   foreach($subProductImage as $sub)
   {
       $ext = rand().".".$sub->getClientOriginalName();
       $sub->move("subProductImages/",$ext);

       Product::create([
           'subProductImage'=>$ext,
           'productId'=>$Product->id
       ]);
   }
   return redirect('showProduct');
  }
  public function showProductfunc(){

   $Product = Product::all();
   return view ('Product.Product',compact('Product'));
}

public function deleteProductfunc($id){
  $product= product::find($id);
  $product->delete();
  return redirect()->back();
  
  }
  public function fetch_subcategory($id)
    {
        $Product = products::find($id);
        $pro_id = $Product->id;
     $subProduct = products::where("productId",$pro_id)->get();
     return View("subProduct",compact("subProduct","Product"));   
    }


}
