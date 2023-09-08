<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function _construct(Request $request){
        // if($request->is('category')){
        //     echo 'hello';
        // }
        // $path = $request->path();
        // echo $path;
        //$url = $request ->url();
        //echo $url
        //$method = $request->method();
        //echo $method;
        //$ip = $request->ip();
        //echo 'IP là:'.$ip;
       
    }

    //hiển thị danh sách(GET)
    public function index( Request $request){
        //$path = $request->path();
        //echo $path;
         //$server = $request->server();
        //dd($server);
        //$header = $request->header();
        //dd ($header);
        //$id = $request->input('id');
        //echo $id;
        // $id  = $request->id;
        // $name = $request->name;
        // dd($name);
        // $id = $request('id');
        // dd($id);
        // $id = $request->query('id');
        // dd($id);
        return view('category/list');
    }

    //lấy ra chuyên mụ ctheo id(GET)
    public function getCategory($id){
        return view('category/edit');
    }

    //sửa(POST)
    public function uppdate($id){
        return 'Submit sửa chuyên mục:'.$id;
    }

    //show-form dữ liệu(GET)
    public function add(Request $request){
        //$path = $request->path();
        //echo $path;
        $old = $request->old('category_name');
        echo $old;
        return view('category/add');
    }

    //thêm dữ liệu(POST)
    public function handleAddCategory(){
        //return 'submit thêm chuyên mục';
        //if($request->isMethod('POST')){
            //echo 'phương thức post';
        //}
        // if($request->has('category_name')){
        //     $cateName = $request->category_name;
        //     dd($cateName);
        // }else{
        //     return 'hello';
        // }
    }

    //xoá dữ liệu
    public function delete($id){
        return 'submit xoá';
    }
}
