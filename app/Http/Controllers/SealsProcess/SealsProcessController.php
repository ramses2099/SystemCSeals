<?php

namespace App\Http\Controllers\SealsProcess;

use App\Http\Requests\SealsProcessFormRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\StateRow;
use App\SealsProcess;

class SealsProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sealsprocess = SealsProcess::all();
        return view('sealsprocess.index',compact('sealsprocess'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $staterows = StateRow::all(['idstaterow','descripcion']);
        return view('sealsprocess.create',compact('staterows',$staterows));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SealsProcessFormRequest $request)
    {
        $sealsprocess = new SealsProcess(array(
            'process' => $request->get('process'),
            'idstaterow' => $request->get('idstaterow'),
            'hostname' => $request->getHttpHost()
        ));
        
        $sealsprocess->save();
        
        return redirect('/sealsprocess/create')->with('status','Seals Process create successfuly...');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $idsealsprocess
     * @return \Illuminate\Http\Response
     */
    public function show($idsealsprocess)
    {
        $sealsprocess = SealsProcess::where('idsealsprocess',$idsealsprocess)->firstOrFail();
        return view('sealsprocess.show',compact('sealsprocess',$sealsprocess));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $idsealsprocess
     * @return \Illuminate\Http\Response
     */
    public function edit($idsealsprocess)
    {
        $staterows = StateRow::all(['idstaterow','descripcion']);
        $sealsprocess = SealsProcess::where('idsealsprocess',$idsealsprocess)->firstOrFail();
        return view('sealsprocess.edit',compact('sealsprocess',$sealsprocess),
                    compact('staterows',$staterows));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $idsealsprocess
     * @return \Illuminate\Http\Response
     */
    public function update(SealsProcessFormRequest $request, $idsealsprocess)
    {
        SealsProcess::where('idsealsprocess',$idsealsprocess)->update(array(
            'process' => $request->get('process'),
            'idstaterow' => $request->get('idstaterow'),
        )); 

        return redirect('/sealsprocess/'.$idsealsprocess.'/edit')->with('status','Seals Process update successfuly...');

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
