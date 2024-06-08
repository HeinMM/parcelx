<?php

namespace App\Http\Controllers;

use App\Models\DeliveryMan;
use App\Http\Requests\StoreDeliveryManRequest;
use App\Http\Requests\UpdateDeliveryManRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DeliveryManController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $delivery_men = DeliveryMan::query()
        ->latest('id')
        ->paginate(10);
        return view('delivery.index',compact('delivery_men'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('delivery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDeliveryManRequest $request)
    {
        $deliveryMan = new DeliveryMan();
        $deliveryMan->name = $request->name;
        $deliveryMan->email = $request->email;
        $deliveryMan->phone = $request->phone;
        
        $deliveryMan->password = Hash::make($request->password);

        $userDeliveryMan = new User();
        $userDeliveryMan->name = $request->name;
        $userDeliveryMan->email = $request->email;
        $userDeliveryMan->phone = $request->phone;
        $userDeliveryMan->role = $request->role;
        $userDeliveryMan->password = Hash::make($request->password);


        $deliveryMan->save();
        $userDeliveryMan->save();

        $message = $deliveryMan->email . ' Delivery Man Created!';

        return redirect()->back()->with('success',$message);
    }

    /**
     * Display the specified resource.
     */
    public function show(DeliveryMan $deliveryMan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DeliveryMan $deliveryMan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDeliveryManRequest $request, DeliveryMan $deliveryMan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DeliveryMan::destroy($id);
        return redirect()->back()->with('success',"Delivery Man Deleted!");
    }
}
