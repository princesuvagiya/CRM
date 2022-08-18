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
     
          
    
    }
}
