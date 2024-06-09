<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Category::where('status','!=',0)
        ->select('id','name','image','slug','status')
        ->orderBy('created_at','desc')
        ->get();

        $htmlparentid='';
        $htmlsortorder='';
        foreach($list as $item)
        {
            $htmlparentid.="<option value='".$item->id."'>".$item->name."</option>";
            $htmlsortorder.="<option value='".($item->sort_order + 1)."'>Sau: ".$item->name."</option>";
        }

        return view("backend.category.index",compact('list','htmlparentid','htmlsortorder'));
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
    public function store(StoreCategoryRequest $request)
    {
        $category = new Category();

        $category->name = $request->name;
        $category->description = $request->description;
        $category->parent_id = $request->parent_id;
        $category->sort_order = $request->sort_order;
        // $category->image = $request->image;
        $category->status = $request->status;
        
        $category->created_at = date('Y-m-d H:i:s');
        $category->created_by = Auth::id()??1;
        $category->slug = Str::of($request->name)->slug('-');

        $category->save();
        return redirect()->route('admin.category.index');
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