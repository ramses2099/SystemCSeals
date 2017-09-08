<?php

namespace App\Http\Controllers\VesselVisits;

use App\Http\Requests\VesselVisitFormRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\StateRow;
use App\VesselVisit;

class VesselVisitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vesselvisits = VesselVisit::all();
        return view('vesselvisit.index',compact('vesselvisits', $vesselvisits));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $staterows = StateRow::all(['idstaterow','descripcion']);
        return view('vesselvisit.create',compact('staterows',$staterows));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VesselVisitFormRequest $request)
    {
        $vesselvisits = new VesselVisit(array(
            'visits' => $request->get('visits'),
            'voyage' => $request->get('voyage'),
            'vesselname' => $request->get('vesselname'),
            'idstaterow' => $request->get('idstaterow'),
            'hostname' => $request->getHttpHost()
        ));
        
        $vesselvisits->save();
        
        return redirect('/vesselvisits/create')->with('status','Vessel Visit create successfuly...');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $idvesselvisits
     * @return \Illuminate\Http\Response
     */
    public function show($idvesselvisits)
    {
        $vesselvisits = VesselVisit::where('idvesselvisits',$idvesselvisits)->firstOrFail();
        return view('vesselvisit.show',compact('vesselvisits',$vesselvisits));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $idvesselvisits
     * @return \Illuminate\Http\Response
     */
    public function edit($idvesselvisits)
    {
        $staterows = StateRow::all(['idstaterow','descripcion']);
        $vesselvisits = VesselVisit::where('idvesselvisits',$idvesselvisits)->firstOrFail();
        return view('vesselvisit.edit',compact('vesselvisits',$vesselvisits),
                    compact('staterows',$staterows));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VesselVisitFormRequest $request, $idvesselvisits)
    {
        VesselVisit::where('idvesselvisits',$idvesselvisits)->update(array(
            'visits' => $request->get('visits'),
            'voyage' => $request->get('voyage'),
            'vesselname' => $request->get('vesselname'),
            'idstaterow' => $request->get('idstaterow'),
        )); 

        return redirect('/vesselvisits/'.$idvesselvisits.'/edit')->with('status','Vessel Visit update successfuly...');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
