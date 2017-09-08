@extends('layouts.layout')
@section('title','Vessel Visits')
@section('content')
 <div class="row">
    <div class="col-lg-12">
         <h3 class="page-header"><i class="fa fa-laptop"></i> Vessel Visits</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="">List Vessel Visits</a></li>           					  	
        </ol>
   </div>
 </div>
 <div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                List Vessel Visits
            </header>
                <div class="panel-body">
                <div class="row">
                     <div class="col-lg-10"> 
                       <a class="btn btn-primary" href="{!! action('VesselVisits\VesselVisitController@create')!!}"><i class="icon_plus_alt2"></i> New Vessel Visits</a>                     
                    </div>
                    <div class="col-lg-2">
                     
                    </div>
                </div>
                <div class="row">
                  &nbsp;
                </div>
                <div class="row">
                  <div class="col-lg-12"> 
                    <table class="table table-striped table-advance table-hover">
                            <tbody>
                                <tr>
                                    <th>Id Vessel Visits</th>
                                    <th>Visits</th>
                                    <th>Voyage</th>
                                    <th>Vessel Name</th>                                    
                                    <th>Estado</th>
                                    <th>Fecha Actualizacion</th>
                                    <th>Action</th>
                                </tr>
                                @if($vesselvisits->isEmpty())
                                    <tr>   
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                    </tr>
                                    @else
                                    @foreach($vesselvisits as $vesselvis)
                                        <tr>   
                                            <td>{!!$vesselvis->idvesselvisits!!}</td>
                                            <td>{!!$vesselvis->visits!!}</td>
                                            <td>{!!$vesselvis->voyage!!}</td>
                                            <td>{!!$vesselvis->vesselname!!}</td>
                                            @if($vesselvis->idstaterow == 1)
                                                <td>Active</td>
                                            @else
                                               <td>InActive</td>
                                            @endif                                            
                                            <td>{!!$vesselvis->updated_at!!}</td>
                                            <td>
                                            <div class="btn-group">                                                
                                                <a class="btn btn-success" href="{!! action('VesselVisits\VesselVisitController@show', $vesselvis->idvesselvisits)!!}"><i class="fa fa-search-plus"></i></a>                                               
                                            </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                @endif                                                        
                            </tbody>
                        </table>
                      </div>  
                    </div>                 
                </div>
        </section>
    </div>
 </div>
@endsection
