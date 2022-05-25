<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Protypes;
use App\Models\Manufactures;

class AdminController extends Controller
{
    public function dashboard(){
        $product_count = Products::count();
        $protype_count = Protypes::count();
        $manu_count = Manufactures::count();
        return view('dashboard',['product_count'=>$product_count,'protype_count'=>$protype_count,'manu_count'=>$manu_count]);
    }
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


    //Hiển thị loại sản phẩm
    function hienthitype(){
        $protype = Protypes::all(); 
        return view('protypes',['protype'=>$protype]);
    }

    //
    function addtype()
    {
        $protype = Protypes::all();
        return view('/addtype',['allprotype'=>$protype]);
    }

    
    //Post thêm loại sản phâm lên:
    function post_addtype(Request $request){
        $this -> validate($request,[
            'Type_Name' => 'required|unique:protypes,type_name'
        ],['Type_Name.required' => 'Tên danh mục không được để trống'
        , 'Type_Name.unique' => 'Tên danh mục đã có trong CSDL'
        ]);
        $request -> offsetUnset('_token');
        Protypes::create($request->all());
        return redirect()->route('protypes')->with('success','Thêm danh mục thành công');
    }


    //Sửa loại sản phẩm:
    function edittype($id)
    {
       $typebyid = Protypes::find($id);
       return view('/edittype',['typebyid'=>$typebyid]);
    }
   
    //Post sửa loại sản phâm lên:
    function post_edittype($id,Request $request){
        $this -> validate($request,[
            'Type_Name' => 'required'
        ],['Type_Name.required' => 'Tên danh mục không được để trống']);
        $request -> offsetUnset('_token');
        Protypes::where(['id'=>$id])->update($request->all());
        return redirect()->route('protypes')->with('success','Sửa danh mục thành công');
    }

    
    //xóa loại sản phẩm:
    function deletetype($id)
    {
        $product = Products::where('Type_ID',$id)->get();
        if($product->count() == 0 ){
            Protypes::find($id)->delete();
             //Quay lại trang trước đó
            return redirect()->back()->with('success','Xóa danh mục thành công');
        }else{
            return redirect()->back()->with('error','Không thể xóa danh mục vì vẫn còn sản phẩm');
        }     
    }
    
     //Hiển thị hang sản phẩm
     function hienthimanu(){
        $manu = Manufactures::all(); 
        return view('manufactures',['manu'=>$manu]);
    }

    //
    function addmanu()
    {
        $manu = Manufactures::all();
        return view('/addmanu',['allmanu'=>$manu]);
    }

    
    //Post thêm hang sản phâm lên:
    function post_addmanu(Request $request){
        $this -> validate($request,[
            'Manu_Name' => 'required|unique:protypes,type_name'
        ],['Manu_Name.required' => 'Tên hãng không được để trống'
        , 'Manu_Name.unique' => 'Tên hãng đã có trong CSDL'
        ]);
        $request -> offsetUnset('_token');
        Manufactures::create($request->all());
        return redirect()->route('manu')->with('success','Thêm hãng thành công');
    }


    //Sửa hang sản phẩm:
    function editmanu($id)
    {
       $manubyid = Manufactures::find($id);
       return view('/editmanu',['manubyid'=>$manubyid]);
    }
   
    //Post sửa hãng sản phâm lên:
    function post_editmanu($id,Request $request){
        $this -> validate($request,[
            'Manu_Name' => 'required'
        ],['Manu_Name.required' => 'Tên hãng không được để trống']);
        $request -> offsetUnset('_token');
        Manufactures::where(['id'=>$id])->update($request->all());
        return redirect()->route('manu')->with('success','Sửa hãng thành công');
    }

    
    //xóa loại sản phẩm:
    function deletemanu($id)
    {
        $product = Products::where('Manu_ID',$id)->get();
        if($product->count() == 0 ){
            Manufactures::find($id)->delete();
             //Quay lại trang trước đó
            return redirect()->back()->with('success','Xóa danh mục thành công');
        }else{
            return redirect()->back()->with('error','Không thể xóa danh mục vì vẫn còn sản phẩm');
        }     
    } 
}
