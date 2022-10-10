<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   public function CategoryViewfunc(){

      return view('Category');
   }
   public function addCategoryfunc(){

return view('addCategory');



   }
   public function addCategoryPostfunc(Request $r){

    $category=new category();
    
    $category->categoryName=$r->categoryName;
    $category->save();
    return redirect('showCategory');
   }
   public function showCategoryfunc(){

      $category = category::all();
      return view ('category',compact('category'));
   }
 

}
