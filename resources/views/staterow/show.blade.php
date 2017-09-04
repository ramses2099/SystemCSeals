@extends('layouts.layout')
@section('title','State Row Show')
@section('content')
 <div class="row">
    <div class="col-lg-12">
       <h3 class="page-header"><i class="fa fa-laptop"></i> State Row</h3>
       <ol class="breadcrumb">
         <li><i class="fa fa-home"></i><a href="{!! action('StateRow\StateRowController@index')!!}">List State Row</a></li>
         <li><i class="fa fa-laptop"></i>Show State Row</li>						  	
       </ol>
    </div>
 </div>
 <div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Show State Row
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
                             <td><b>Id State Row:</b></td>
                             <td>{!!$staterow->idstaterow!!}</td>
                            </tr>
                            <tr>
                             <td><b>Descripcion:<b/></td>
                             <td>{!!$staterow->descripcion!!}</td>
                            </tr>
                            <tr>
                             <td><b>Host Name:<b/></td>
                             <td>{!!$staterow->hostname!!}</td>
                            </tr>
                            <tr>
                             <td><b>Fecha Creacion:<b/></td>
                             <td>{!!$staterow->created_at!!}</td>
                            </tr>
                            <tr>
                             <td><b>Fecha Actualizacion:<b/></td>
                             <td>{!!$staterow->updated_at!!}</td>
                            </tr>
                            <tr>
                                <td>
                                   <div class="form-group">
                                     <div class="col-lg-12 text-right">
                                        <a class="btn btn-primary" href="{!! action('StateRow\StateRowController@index')!!}">Edit State Row</a>
                                        <a class="btn btn-success" href="{!! action('StateRow\StateRowController@index')!!}">Backt to list</a>
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
