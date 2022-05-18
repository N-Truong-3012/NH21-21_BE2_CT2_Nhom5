<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Products;
//use database\seeders\products;
class MyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function index()
    {
        return view('index');
        
    }

    function goto($id)
    {
        return view($id);
    }

    public function getProducts(){
        $product = Products::all();
        $feature = Products::where("Feature",'1')-> get()->take(10);
        $featurePhone = Products::where("Feature",'1')->where("Type_ID", '1')-> get()->take(3);
        $featureTivi = Products::where("Feature",'1')->where("Type_ID", '3')-> get()->take(3);
        $featureLaptop = Products::where("Feature",'1')->where("Type_ID", '2')-> get()->take(3);
        return view('index',[
            'product'=>$product,
            'feature' => $feature,
            'featurePhone' => $featurePhone,
            'featureLaptop' => $featureLaptop,
            'featureTivi' => $featureTivi,
        ]);
    }
    public function getProductByTypeID($id){
        $productByID = Products::where('type_id',$id)->get();
        return view('product',[
            'productByID'=>$productByID,
        ]);
    }
    public function getDetailProduct($id){
        $detailProduct = Products::where('Product_ID',$id)->get();
        return view('detail',[
            'detailProduct'=>$detailProduct,
        ]);
    }
    public function showProductBySearch($key){
        $productSearch = Products::where('Product_Name', 'Like', '%' . $key . '%')->get();
        return $productSearch;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
