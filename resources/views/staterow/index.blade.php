@extends('layouts.layout')
@section('title','State Row')
@section('content')
 <div class="row">
    <div class="col-lg-12">
         <h3 class="page-header"><i class="fa fa-laptop"></i> State Row</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="">List State Row</a></li>           					  	
        </ol>
   </div>
 </div>
 <div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                List State Row 
            </header>
                <div class="panel-body">
                <div class="row">
                     <div class="col-lg-10"> 
                       <a class="btn btn-primary" href="{!! action('StateRow\StateRowController@create')!!}"><i class="icon_plus_alt2"></i> New State Row</a>                     
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
                                    <th>Id State Row</th>
                                    <th>Descripcion</th>
                                    <th>Fecha Creacion</th>
                                    <th>Fecha Actualizacion</th>
                                    <th>Action</th>
                                </tr>
                                @if($staterows->isEmpty())
                                    <tr>   
                                    <td collespan="5">no row</td>
                                    </tr>
                                    @else
                                    @foreach($staterows as $staterow)
                                        <tr>   
                                            <td>{!!$staterow->idstaterow!!}</td>
                                            <td>{!!$staterow->descripcion!!}</td>
                                            <td>{!!$staterow->created_at!!}</td>
                                            <td>{!!$staterow->updated_at!!}</td>
                                            <td>
                                            <div class="btn-group">                                                
                                                <a class="btn btn-success" href="{!! action('StateRow\StateRowController@show', $staterow->idstaterow)!!}"><i class="fa fa-search-plus"></i></a>                                               
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
