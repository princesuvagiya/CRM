<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\product;
use DB;


class ProductController extends Controller
{
  
    public function ProductData(){

        $categorie = Category::get();
        return view('admin.project',['categorie'=>$categorie]);

    }
    public function InsertProjectData(Request $req){
 
           $ad = New product;
           
           $ad->categorie_id =$req->get('categorie_id'); 
           $ad->name =$req->get('name'); 
           $ad->projectmanager =$req->get('projectmanager'); 
           $ad->employename =$req->get('employename'); 
           $ad->post =$req->get('post'); 
           $ad->budget =$req->get('budget'); 
           $ad->save();
           return redirect("/project_manage")->with('msg',"Record Insert SuccesFylly");
        // dd($req->toArray());

                            
      

    }

}
