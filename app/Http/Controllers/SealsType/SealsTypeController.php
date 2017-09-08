<?php

namespace App\Http\Controllers\SealsType;

use App\Http\Requests\SealsTypeFormRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\StateRow;
use App\SealsType;


class SealsTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sealstype = SealsType::all();
        return view('sealstype.index',compact('sealstype'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $staterows = StateRow::all(['idstaterow','descripcion']);
        return view('sealstype.create',compact('staterows',$staterows));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\SealsTypeFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SealsTypeFormRequest $request)
    {
        $sealstype = new SealsType(array(
            'descripcion' => $request->get('descripcion'),
            'idstaterow' => $request->get('idstaterow'),
            'hostname' => $request->getHttpHost()
        ));
        
        $sealstype->save();
        
        return redirect('/sealstypes/create')->with('status','Seals Type create successfuly...');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idsealstype)
    {
        $sealstype = SealsType::where('idsealstype',$idsealstype)->firstOrFail();
        return view('sealstype.show',compact('sealstype',$sealstype));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $idsealstype
     * @return \Illuminate\Http\Response
     */
    public function edit($idsealstype)
    {
        $staterows = StateRow::all(['idstaterow','descripcion']);
        $sealstype = SealsType::where('idsealstype',$idsealstype)->firstOrFail();
        return view('sealstype.edit',compact('sealstype',$sealstype),
                    compact('staterows',$staterows));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $idsealstype
     * @return \Illuminate\Http\Response
     */
    public function update(SealsTypeFormRequest $request, $idsealstype)
    {
        SealsType::where('idsealstype',$idsealstype)->update(array(
            'descripcion' => $request->get('descripcion'),
            'idstaterow' => $request->get('idstaterow'),
        )); 

        return redirect('/sealstypes/'.$idsealstype.'/edit')->with('status','Seals Type update successfuly...');

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
