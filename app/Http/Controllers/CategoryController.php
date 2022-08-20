<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    
    public function CategoryData(Request $req){
 
        //  dd($req->toArray());
        
              $ad = New Category;
               

               $ad->categoryname=$req->get('categoryname');  
               $ad->save();

               return redirect('/category_add')->with('msg',"✨✨ Record Insert SuccessFully ✨✨");
               
                    


    }


}

