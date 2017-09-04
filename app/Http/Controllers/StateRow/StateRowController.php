<?php

namespace App\Http\Controllers\StateRow;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\StateRowFormRequest;
use App\StateRow;
class StateRowController extends Controller
{
      
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staterows = StateRow::all();
        return view('staterow.index',compact('staterows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staterow.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response 
     */
    public function store(StateRowFormRequest $request)
    {
        
        $staterow = new StateRow(array(
            'descripcion' => $request->get('descripcion'),
            'hostname' => $request->getHttpHost()
        ));
        
        $staterow->save();
        
        return redirect('/staterow/create')->with('status','State row create successfuly...');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idstaterow)
    {
       $staterow = StateRow::where('idstaterow',$idstaterow)->firstOrFail();
       return view('/staterow/show',compact('staterow'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
