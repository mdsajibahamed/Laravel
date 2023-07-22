<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $cats =category::paginate(config("idb.perpage"));
        return view("category.index")->with('cats', $cats);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view("category.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        category::create($request->all());
        return redirect("category")->with("success", "Successfully created");
    }

    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
       return view("category.single")->with('cat',$category);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(category $category)
    {
        return view("category.edit")->with('cat',$category);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, category $category)
    {
    //    $category->name = $request->name;
    //    $category->description = $request->description;
    //    if($category->save()){
    //     return redirect("category")->with("info","updated successfully" .$category->id);
    //    }

    $category->name = $request->name;
    $category->description = $request->description;
    if($category->save()){
        return redirect("category")->with("info", "Successfully Updated category, ID: " . $category->id);
    }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category)
    {
        if($category->delete()){
            return redirect("category")->with("info","delete successfully".$category->id);

        }
    }
    public function showcat($id){
        $cat = Category::find($id);
        return view("category.single")->with('cat',$cat);
    }

}