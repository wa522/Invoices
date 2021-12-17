<?php

namespace App\Http\Controllers;

use App\Invioces;
use App\sections;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InviocesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('invoices.invoices');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sections = sections::all();
        return view('invoices.add_invoice',compact('sections'));
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
     * @param  \App\Invioces  $invioces
     * @return \Illuminate\Http\Response
     */
    public function show(Invioces $invioces)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Invioces  $invioces
     * @return \Illuminate\Http\Response
     */
    public function edit(Invioces $invioces)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Invioces  $invioces
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invioces $invioces)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Invioces  $invioces
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invioces $invioces)
    {
        // 
    }

    public function getproducts($id){
        $products = DB::table('products')->where('section_id',$id)->public('product_name','id');
        return json_encode($products);
    }
}
