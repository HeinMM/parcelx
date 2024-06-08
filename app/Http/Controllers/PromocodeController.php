<?php

namespace App\Http\Controllers;

use App\Models\Promocode;
use App\Http\Requests\StorePromocodeRequest;
use App\Http\Requests\UpdatePromocodeRequest;

class PromocodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $codes = Promocode::query()
        ->latest('id')
        ->paginate(10);
        return view('promotion.index',compact('codes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('promotion.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePromocodeRequest $request)
    {
        $promoData = new Promocode();
        $promoData->name = $request->name;
        $promoData->code = $request->code;
        $promoData->price = $request->price;
        $promoData->count = 0;
        $promoData->limit = $request->limit;
        $promoData->save();

        $message = $promoData->name . ' Prmotion Code Created!';

        return redirect()->back()->with('success',$message);
    }

    /**
     * Display the specified resource.
     */
    public function show(Promocode $promocode)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Promocode $promocode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePromocodeRequest $request, Promocode $promocode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        Promocode::destroy($id);
        return redirect()->back()->with('success',"Promotion Code Deleted!");
    }
}
