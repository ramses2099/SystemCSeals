<?php

namespace App\Http\Controllers\SealsCategory;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\SealsCategoryFormRequest;
use App\StateRow;
use App\SealsCatogory;
class SealsCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sealscatogorys = SealsCatogory::all();
        return view('sealscategory.index',compact('sealscatogorys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $staterows = StateRow::all(['idstaterow','descripcion']);
        return view('sealscategory.create',compact('staterows',$staterows));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SealsCategoryFormRequest $request)
    {
        $sealscatogory = new SealsCatogory(array(
            'descripcion' => $request->get('descripcion'),
            'idstaterow' => $request->get('idstaterow'),
            'hostname' => $request->getHttpHost()
        ));
        
        $sealscatogory->save();
        
        return redirect('/sealscatogorys/create')->with('status','Seals Category create successfuly...');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idsealscatogory)
    {
        $sealscatogory = SealsCatogory::where('idsealscatogory',$idsealscatogory)->firstOrFail();
        return view('sealscategory.show',compact('sealscatogory',$sealscatogory));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idsealscatogory)
    {
        $staterows = StateRow::all(['idstaterow','descripcion']);
        $sealscatogory = SealsCatogory::where('idsealscatogory',$idsealscatogory)->firstOrFail();
        return view('sealscategory.edit',compact('sealscatogory',$sealscatogory),
                    compact('staterows',$staterows));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SealsCategoryFormRequest $request, $idsealscatogory)
    {
        SealsCatogory::where('idsealscatogory',$idsealscatogory)->update(array(
            'descripcion' => $request->get('descripcion'),
            'idstaterow' => $request->get('idstaterow'),
        )); 

        return redirect('/sealscatogorys/'.$idsealscatogory.'/edit')->with('status','Seals Category update successfuly...');

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
