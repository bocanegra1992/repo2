<?php

namespace App\Http\Controllers;

use App\Aeropuerto;
use Illuminate\Http\Request;

class aeropuertoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aeropuertos = Aeropuerto::latest()->paginate(5);
  
        return view('aeropuertos.index',compact('aeropuerto'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aeropuertos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
  
        Aeropuerto::create($request->all());
   
        return redirect()->route('aeropuertos.index')
                        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(aeropuerto $aeropuerto)
    {
        return view('aeropuertos.show',compact('aeropuerto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(aeropuerto $aeropuerto)
    {
        return view('aeropuertos.edit',compact('aeropuerto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $aeropuerto)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
  
        $aeropuertos->update($request->all());
  
        return redirect()->route('aeropuertos.index')
                        ->with('success','aeropuerto updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $aeropuertos
     * @return \Illuminate\Http\Response
     */
    public function destroy(aeropuerto $aeropuertos)
    {
        $aeropuertos->delete();
  
        return redirect()->route('aeropuertos.index')
                        ->with('success','aeropuerto deleted successfully');
    }
}
