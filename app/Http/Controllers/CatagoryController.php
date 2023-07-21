<?php

namespace App\Http\Controllers;

use App\Models\catagory;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class CatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cats =catagory::paginate(config("idb.perpage"));
        return view("catagory.index")->with('cats', $cats);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view("catagory.create");
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
    public function show(catagory $catagory)
    {
       return view("catagory.single")->with('cat',$catagory);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(catagory $catagory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, catagory $catagory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(catagory $catagory)
    {
        //
    }
}
