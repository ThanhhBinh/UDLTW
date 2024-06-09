<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Order::where('order.status','!=',0)
        ->join('user','order.user_id','user.id')
        ->select('order.id','order.delivery_name','order.delivery_gender','order.delivery_email','order.delivery_phone','order.delivery_address','order.note','order.type','user.name as username')
        ->orderBy('order.created_at','desc')->get();
        return view("backend.order.index",compact('list'));
    }
    // $list=Product::where('product.status','!=',0)
    // ->join('category','product.category_id','category.id')
    // ->join('brand','product.brand_id','brand.id')
    // ->orderBy('product.created_at','DESC')
    // ->select("product.id","product.image","product.name","category.name as categoryname","brand.name as brandname")
    // ->get();
    // return view("backend.product.index",compact('list'));
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
