<?php

namespace App\Http\Controllers;
use App\Models\subProduct;
use App\Models\product;
use Illuminate\Http\Request;
use App\Models\category;
class ProductController extends Controller
{
 public function addProductfunc(){
   $category = category::all();

    return view('Product.addProduct',compact('category'));
 }
 public function addProductPostfunc(Request $r){

   $Product=new Product();
   
   $productName=$r->productName;
   $productPrice=$r->productPrice;
   $productDescript=$r->productDescript;
  $categoryId=$r->categoryId;
   
   $productImage = $r->file("image");
        $ext = rand().".".$productImage->getClientOriginalName();
        $productImage->move("image/",$ext);
        $Product=product::create([
            'productName'=>$productName,
            'productPrice'=>$productPrice,
            'productDecript'=>$productDescript,
            'categoryId'=>$categoryId,
            'productImage'=>$ext
        ]);
  
   
   $subProductImage = $r->file("subProductImageInput");
   foreach($subProductImage as $sub)
   {
       $ext = rand().".".$sub->getClientOriginalName();
       $sub->move("subProductImages/",$ext);

       subProduct::create([
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
  public function fetch_subProduct($id)
    {
        $Product = product::find($id);
        $pro_id = $Product->id;
     $subProduct = subProduct::where("productId",$pro_id)->get();
     return View("Product.subProduct",compact("subProduct","Product"));   
    }


}
