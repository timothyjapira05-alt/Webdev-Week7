<?php

namespace App\Http\Controllers;

use App\Models\Handphone;
use App\Http\Requests\StoreHandphoneRequest;
use App\Http\Requests\UpdateHandphoneRequest;
use Illuminate\Http\Request;

class HandphoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $handphones = Handphone::all();
        return view('listHandphone', compact('handphones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("formHandphone");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Handphone::create([
            'brand' => $request->brand,
            'model' => $request->model,
            'processor' => $request->processor,
            'ram' => $request->ram,
        ]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Handphone $handphone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Handphone $handphone)
    {
        return view('edit-handphone', compact('handphone'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Handphone $handphone)
    {
    $handphone->update([
        'brand' => $request->brand,
        'model' => $request->model,
        'processor' => $request->processor,
        'ram' => $request->ram,
    ]);
    
    return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(request $request)
    {
        Handphone::destroy($request->id);
        return redirect('/');
    }
}
