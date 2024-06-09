<?php

namespace App\Http\Controllers\backend;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBrandRequest;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Brand::where('status','!=',0)
        ->select('id','name','image','slug','status')
        ->orderBy('created_at','desc')
        ->get();

        $htmlsortorder='';
        foreach($list as $item)
        {
            $htmlsortorder.="<option value='".($item->sort_order + 1)."'>Sau: ".$item->name."</option>";
        }
        return view("backend.brand.index",compact('list','htmlsortorder'));
    }

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
    public function store(StoreBrandRequest $request)
    {
        $brand = new Brand();

        $brand->name = $request->name;
        $brand->slug = Str::of($request->name)->slug('-');
        // $brand->image = $request->image;
        $brand->description = $request->description;
        $brand->sort_order = $request->sort_order;
        $brand->status = $request->status;
        
        $brand->created_at = date('Y-m-d H:i:s');
        $brand->created_by = Auth::id()??1;

        $brand->save();
        return redirect()->route('admin.brand.index');
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
