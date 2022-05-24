<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Protypes;
use App\Models\Manufactures;

class AdminController extends Controller
{
    //
    //Hiển thị 5 sản phẩm
    function index(){
        $product = Products::orderBy('id','DESC')->get(); 
        return view('/products',['data'=>$product]);
    }

    //Xoa san pham
    function delete($id)
    {
        Products::find($id)->delete();
        return redirect()->back()->with('success','Xóa sản phẩm thành công'); //Quay lại trang trước đó
    }

     //Thêm sản phẩm:
     function add()
     {
         $protype = Protypes::all();
         $manufacture = Manufactures::all();
         return view('/addproduct',['allprotype'=>$protype,'allmanu'=>$manufacture]);
     }
 
     //Post thêm sản phâm lên:
     function post_add(Request $request){
    
         $this->validate($request,[
             'Product_Name' => 'required|unique:products,Product_Name',
             'Type_ID' => 'required',
             'Manu_ID' => 'required',
             'Price' => 'required|numeric|min:0|not_in:0',
             'Image' =>'required',
         ],[
             'Product_Name.required' => 'Tên sản phẩm không được để trống',
             'Product_Name.unique' => 'Tên sản phẩm đã có trong CSDL',
             'Type_ID.required' => 'Vui lòng chọn tên danh mục',
             'Manu_ID.required' => 'Vui lòng chọn tên hang4',
             'Price.required' => 'Giá sản phẩm không được để trống',
             'Price.min' => 'Giá sản phẩm phải > 0',
             'Price.not_in' => 'Giá sản phẩm không được = 0',
             'Image.required' => 'Vui lòng chọn ảnh sản phẩm',
         ]);
        
         $img = str_replace(url('img').'/','',$request-> Image);
         $request->merge(['Image' => $img]);
         Products::create($request->all());
         return redirect()->route('products')->with('success','Thêm sản phẩm thành công');;
     }

     //Sửa sản phẩm
    function edit($id)
    {
        $protype = Protypes::all();
        $manufacture = Manufactures::all();
        $products = Products::find($id);
        return view('editproduct',['suasp'=>$products,'allprotype'=>$protype,'allmanu'=>$manufacture]);
    }

    //Post sửa sản phâm lên:
    function post_editproduct($id,Request $request){
        $this->validate($request,[
            'Product_Name' => 'required',
            'Type_ID' => 'required',
            'Manu_ID' => 'required',
            'Price' => 'required|numeric|min:0|not_in:0',
            'Image' =>'required',
        ],[
            'Product_Name.required' => 'Tên sản phẩm không được để trống',
            'Type_ID.required' => 'Vui lòng chọn tên danh mục',
            'Manu_ID.required' => 'Vui lòng chọn tên hang4',
            'Price.required' => 'Giá sản phẩm không được để trống',
            'Price.min' => 'Giá sản phẩm phải > 0',
            'Price.not_in' => 'Giá sản phẩm không được = 0',
            'Image.required' => 'Vui lòng chọn ảnh sản phẩm',
        ]);
        $img = str_replace(url('img').'/','',$request-> Image);
        $request->merge(['Image' => $img]);
        $request -> offsetUnset('_token');
        Products::where(['id'=>$id])->update($request->all());
        return redirect()->route('products');
    }

    //
    function addtype()
    {
        $protype = Protypes::all();
        return view('/addtype',['allprotype'=>$protype]);
    }
}
