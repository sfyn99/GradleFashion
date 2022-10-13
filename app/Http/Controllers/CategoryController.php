<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   public function CategoryViewfunc(){

      return view('Category.Category');
   }
   public function addCategoryfunc(){

return view('Category.addCategory');



   }
   public function addCategoryPostfunc(Request $r){

    $category=new category();
    
    $category->categoryName=$r->categoryName;
    $category->save();
    return redirect('showCategory');
   }
   public function showCategoryfunc(){

      $category = category::all();
      return view ('Category.category',compact('category'));
   }
 
   public function deleteCategoryfunc($id){
      $category= category::find($id);
      $category->delete();
      return redirect()->back();
      
      }
    
}
