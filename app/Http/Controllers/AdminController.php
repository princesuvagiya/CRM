<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;


class AdminController extends Controller
{

    public function InsertData(Request $req)
    {

        $req->validate([

            'name' => 'required',
            'email' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'webside' => 'required'

        ]);
        $imageName = time() . '.' . $req->image->extension();
        $req->image->move(public_path('images'), $imageName);
        //dd($req->toArray());
        $ad = new Admin;
        $ad->name = $req->get('name');
        $ad->email = $req->get('email');
        $ad->image = $imageName;
        $ad->webside = $req->get('webside');
        $ad->save();
        return redirect('admin_form')->with('msg', " ✨✨ Insert Record SuccesFully ✨✨");
    }
    public function viewData(){
     
         $data = Admin::all();
         return view('admin.view',['record'=>$data]);
        //  dd($data->toArray());      
    
    }
    public function DeleteData($id){


           $data =Admin::where('id',$id)->first();
           $path =public_path('images')."/".$data->image;
           if($path){
                      
                unlink($path);    

           } 

         $data =Admin::where('id',$id)->delete();
        //  dd($data->toArray());
         return redirect('/admin_view')->with('msg',"Delete Record SuccesFully"); 


    }
    public function UpdateData($id){
          
        $data = Admin::where('id',$id)->first();
        return view('admin.form',['single'=>$data]);   
         
    }
    public function EditData(Request $req){
        //   dd($req->toArray());
 
         $id = $req->get('admin_id');
          
         $image = '';
         if($req->file('image')){
         
            //  New Image Uplode mate 
            $image = time() . '.' . $req->image->extension();
            $req->image->move(public_path('images'), $image); 
    
              
            // Old Image Uplode mate
            $da =Admin::where('id',$id)->first();
            $path =public_path('images')."/".$da->image;
            if($path){

                @unlink($path);
                
            }

         }else{

            $da =Admin::where('id',$id)->first();
            $image=$da->image;


        }
        $data =array('name' =>$req->get('name'),'email' =>$req->get('email'),'image'=>$image,'webside'=>$req->get('webside'));
        Admin::where('id',$id)->update($data);

         return redirect('/admin_view')->with('msg'," ✨✨ Record Updated SuccesFully ✨✨");                  



    }
}
