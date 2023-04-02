<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class category extends Controller
{
    public function index()
    {
        $data =  DB::table("category")->get();
        return view("category.category",compact("data"));
    }

    public function create() {
        return view("category.create");
    }

    public function store(Request $Request)
    {
        $Request->validate([
            "category"=>"required|min:3|max:6"
        ]);
        DB::table('category')->insert([
            "name"=>$Request->category
        ]);

        return redirect("/");
    }


    public function delete($id){
        DB::table("category")->delete($id);
        return redirect("/");
    }

    public function edit($id)
    {
        $category =   DB::table("category")->find($id);
        return view("category.update",compact("category"));
    }

    public function update(Request $Request)
    {
        DB::table("category")->where("id",$Request->id)->update([
            "name"=>$Request->category
        ]);

        return redirect("/");
    }
}
