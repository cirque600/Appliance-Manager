<?php

namespace App\Http\Controllers;

use App\Models\Appliance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreApplianceRequest;
use App\Http\Requests\UpdateApplianceRequest;
use App\Models\Serial;
use Illuminate\Support\Facades\App;

class ApplianceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $appliances = Appliance::where('user_id', auth()->id())->get();

       return view('appliances.index', compact('appliances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('appliances.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreApplianceRequest $request)
    {   
        
        $appliance = Appliance::create($request->validated() + ['user_id' => auth()->id()]);


        $serial = Serial::updateOrCreate(['serial' => $appliance->serial_num ],['appliance_id' => $appliance->id, 'is_used' => 1 ]);

    
        
        return redirect()->route('appliances.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Appliance $appliance)
    {
        return view('appliances.show', compact('appliance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Appliance $appliance)
    {
        return view('appliances.edit', compact('appliance'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateApplianceRequest $request, Appliance $appliance)
    {
        $appliance->update($request->validated());

        

        return redirect()->route('appliances.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appliance $appliance)
    {
        $appliance->delete();

        return redirect()->route('appliances.index');
    }
}
