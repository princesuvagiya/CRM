<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\product;
use DB;

class ProductController extends Controller
{

    public function ProductData()
    {

        $categorie = Category::get();
        return view('admin.project', ['categorie' => $categorie]);
    }
    public function InsertProjectData(Request $req)
    {

        $ad = new product;
        $ad->categorie_id = $req->get('categorie_id');
        $ad->name = $req->get('name');
        $ad->projectmanager = $req->get('projectmanager');
        $ad->employename = $req->get('employename');
        $ad->post = $req->get('post');
        $ad->budget = $req->get('budget');
        $ad->save();
        return redirect("/project_manage")->with('msg', "Record Insert SuccesFully");
        // dd($req->toArray());
    }
    public function productdeletedata($id)
    {

        product::where('id', $id)->delete();
        return redirect('/project_view')->with('msg', "Record Deleted SuccesFully");
    }
    public function productupdatedata($id)
    {

        $categorie = Category::get();
        $data = product::where('id', $id)->first();
        return  view('admin.project', ['single' => $data], ['categorie' => $categorie]);
    }
    public function EditProjectData(Request $req)
    {

        //   dd($req->toArray());

        $id = $req->get('project_id');
        $da = product::where('id', $id)->first();
        $data = array(
            'categorie_id' => $req->get('categorie_id'), 'name' => $req->get('name'), 'projectmanager' => $req->get('projectmanager'), 'employename' => $req->get('employename'), 'post' => $req->get('post'),
            'budget' => $req->get('budget')
        );
        product::where('id',$id)->update($data);
        return redirect('/project_view')->with('msg',"Record Updated SeccesFully");
    }
}
