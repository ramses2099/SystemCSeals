@extends('layouts.layout')
@section('title','Vessel Visits Show')
@section('content')
 <div class="row">
    <div class="col-lg-12">
       <h3 class="page-header"><i class="fa fa-laptop"></i>Vessel Visits</h3>
       <ol class="breadcrumb">
         <li><i class="fa fa-home"></i><a href="{!! action('VesselVisits\VesselVisitController@index') !!}">List Seals Process</a></li>
         <li><i class="fa fa-laptop"></i>Vessel Visits Show</li>						  	
       </ol>
    </div>
 </div>
 <div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
            Vessel Visits Show
            </header>
            <div class="panel-body">
                <table class="table table-condensed">
                    <thead>
                        <tr>
                           <th>Column</th>
                           <th>Data</th>
                        </tr>
                    </thead>
                        <tbody>
                            <tr>
                             <td><b>Id Vessel Visits:</b></td>
                             <td>{!!$vesselvisits->idvesselvisits!!}</td>
                            </tr>
                            <tr>
                             <td><b>Visits:<b/></td>
                             <td>{!!$vesselvisits->visits!!}</td>
                            </tr>                            
                            <tr>
                             <td><b>Voyage:<b/></td>
                             <td>{!!$vesselvisits->voyage!!}</td>
                            </tr>
                            <tr>
                             <td><b>Vessel Name:<b/></td>
                             <td>{!!$vesselvisits->vesselname!!}</td>
                            </tr>                            
                            <tr>
                             <td><b>Status:<b/></td>
                             @if($vesselvisits->idstaterow == 1)
                              <td>Active</td>
                             @else
                              <td>InActive</td>
                             @endif
                            </tr>
                            <tr>
                             <td><b>Host Name:<b/></td>
                             <td>{!!$vesselvisits->hostname!!}</td>
                            </tr>
                            <tr>
                             <td><b>Fecha Creacion:<b/></td>
                             <td>{!!$vesselvisits->created_at!!}</td>
                            </tr>
                            <tr>
                             <td><b>Fecha Actualizacion:<b/></td>
                             <td>{!!$vesselvisits->updated_at!!}</td>
                            </tr>
                            <tr>
                                <td>
                                   <div class="form-group">
                                     <div class="col-lg-12 text-right">
                                        <a class="btn btn-primary" href="{!! action('VesselVisits\VesselVisitController@edit', $vesselvisits->idvesselvisits)!!}">Edit Seals Process</a>
                                        <a class="btn btn-success" href="{!! action('VesselVisits\VesselVisitController@index')!!}">Backt to list</a>
                                     </div>
                                    </div>     
                                </td>
                                <td>
                                </td>
                            </tr>
                        </tbody>
                </table>
                </div>
        </section>
    </div>
 </div>
@endsection
