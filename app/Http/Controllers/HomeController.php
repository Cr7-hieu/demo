<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Validator;
use  App\Rules\Uppercase;
class HomeController extends Controller
{   
   public $data = [];
    public function index(){
        //  $this->data['welcome'] = 'hello';
        //  $this->data['content'] = '<h3>chương trình</h3>
        //  <p>học1</p>
        //  <p>học1</p>
        //  <p>học1</p>';
        //  $this->data['index'] = 1;
        //  $this->data['dataArr'] = [
        //  'item1 ',
        //     'item1',
        //     'item1'
        // ]; 
        //  $this->data['number'] = 9;
        $this->data ['title'] = 'trang chủ';
        return view('clients.home', $this->data);
    }

    public function getAdd(){
        $this->data ['title'] = 'thêm sản phẩm';
        return view('clients.add', $this->data);
    }
    public function postAdd(Request $request){
        $rules  = [
            ''=>['','', new Uppercase]
        ];
        $validator =  Validator::make($request ->all(),$rules,$messages,$attribute);
        $attribute->validate();
        // if($validator->fails()){
        //     return 'validate thất bại';
        // }else{
        //     return 'validate';
        // }
        // $rules = [
        //     'product_name'=>'required|min:6',
        //     'product_price'=>'required|integer'
        // ];
        // $messages = [
        //     'product_name.required'=>':attribute gdjfgsdjf',
        //     'product_name.min'=>'đâsdasdasd',
        // ];

       //$request->validate();
    }

    // public function download(Request $request){
    //     if(!empty($request->image)){
    //         $fileName = 'image_'.uniqid()'_jpg';
    //         return response()->streamDownload(function() use ($image){
    //             $imageContent = file_get_content($image);
    //             echo $imageContent;
    //         },$fileName);
    //     }
    // }
}
