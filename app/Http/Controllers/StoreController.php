<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Store::all();
        return view('store',compact('products'));
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
    public function store(Request $request)
    {
        // 
        
        request()->validate([
            'title'=> 'required ',
            'price'=> 'required ',
            'category'=> 'required',
            'image'=> 'required ',
            'condition'=> 'required',
            

        ]);
        
        $image = $request->image ;
        $imageName = hash("sha256", file_get_contents($image)) . "." . $image->getClientOriginalExtension();



        $image->move(storage_path("app/public/images"), $imageName);


        Store::create(
           [
            'title'=> $request->title,
            'price'=> $request->price,
            'category'=> $request->category,
            'image'=> $imageName,
            'condition'=> $request->condition,
           ]
        );
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Store $store)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Store $store)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Store $store)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Store $store)
    {
        //
    }
}
