@extends('layouts.layout')
@section('title','Seals Type')
@section('content')
 <div class="row">
    <div class="col-lg-12">
         <h3 class="page-header"><i class="fa fa-laptop"></i> Seals Type</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="">List Seals Type</a></li>           					  	
        </ol>
   </div>
 </div>
 <div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                List Seals Type
            </header>
                <div class="panel-body">
                <div class="row">
                     <div class="col-lg-10"> 
                       <a class="btn btn-primary" href="{!! action('SealsType\SealsTypeController@create')!!}"><i class="icon_plus_alt2"></i> New Seals Type</a>                     
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
                                    <th>Id Seals Type</th>
                                    <th>Descripcion</th>
                                    <th>Estado</th>
                                    <th>Fecha Creacion</th>
                                    <th>Fecha Actualizacion</th>
                                    <th>Action</th>
                                </tr>
                                @if($sealstype->isEmpty())
                                    <tr>   
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                    </tr>
                                    @else
                                    @foreach($sealstype as $stype)
                                        <tr>   
                                            <td>{!!$stype->idsealstype!!}</td>
                                            <td>{!!$stype->descripcion!!}</td>
                                            @if($stype->idstaterow == 1)
                                                <td>Active</td>
                                            @else
                                               <td>InActive</td>
                                            @endif
                                            <td>{!!$stype->created_at!!}</td>
                                            <td>{!!$stype->updated_at!!}</td>
                                            <td>
                                            <div class="btn-group">                                                
                                                <a class="btn btn-success" href="{!! action('SealsType\SealsTypeController@show', $stype->idsealstype)!!}"><i class="fa fa-search-plus"></i></a>                                               
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
