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
    public function CategoryView(){

            
        $data =Category::all();
        return view('/admin.category_view',['record'=>$data]);

    }
    public function CategoryDeleteData($id){
 
        Category::where('id',$id)->delete();
        return redirect('/category_view')->with('msg',"Record Deleted SuccesFully");

    }
    public function CategoryUpdateData($id){
      
         $data = Category::where('id',$id)->first();
         return view('/admin.category',['single'=>$data]);  

    }
    public function EditCategory(Request $req){
          //dd($req->toArray()); 
          $id =$req->get('category_id');
          $da =Category::where('id',$id)->first();
          $data =array('categoryname'=>$req->get('categoryname'));
          Category::where('id',$id)->update($data);
          return redirect('/category_view')->with('msg',"✨✨ Record Updated SuccessFully ✨✨");    
    }

}


