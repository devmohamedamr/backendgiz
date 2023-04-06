<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\category as ModelsCategory;
use Illuminate\Http\Request;

class category extends Controller
{
    // /categories   -get
    public function index(){
        $data = ModelsCategory::all();
        return response()->json($data);
    }
    // /categories/{id}   -get
    public function show($id){
        $data = ModelsCategory::find($id);
        return response()->json($data);
    }

    // /caregories -post
    public function store(Request $request){
        ModelsCategory::create($request->only("name"));
        return response()->json(["msg"=>"create new category"]);
    }
    // /catgories/{id}   -delete
    public function destroy($id)
    {
        $row = ModelsCategory::find($id);
        $row->delete();
        return response()->json(["msg"=>"delete category"]);
    }
    // /categories/{id}     -put
    public function update(Request $request){
      $row =   ModelsCategory::find($request->id);
      $row->update($request->except("id"));
      return response()->json(["msg"=>"category updated"]);
    }
}
