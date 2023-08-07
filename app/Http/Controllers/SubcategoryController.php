<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sc =Subcategory::with('category')->paginate(config('idb.perpage'));
     return view('subcategory.index')->with("subcategories",$sc);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $c = category::pluck("name","id");
        return view("subcategory.create")->with('categories',$c);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    //    $this->validate($request,[
    //      'category_id'=>"required",
    //     'name'=>"required|min:2|max:255"
    //    ]);
    //   if(Subcategory::create($request->all())){
    //     return redirect("subcategory")->with("info","Subcategory Created");
    //    };
    Subcategory::create($request->all());
    return redirect("subcategory")->with("success","successfully create");
    }

    /**
     * Display the specified resource.
     */
    public function show(Subcategory $subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subcategory $subcategory)
    {
       $c = category::pluck("name","id");
       return view('subcategory.edit')->with("categories",$c)->with("subcategory",$subcategory);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subcategory $subcategory)
    {
        if($subcategory->update($request->all())){
            return redirect("subcategory")->with("info","updated successfully");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subcategory $subcategory)
    {
        //
    }
}
