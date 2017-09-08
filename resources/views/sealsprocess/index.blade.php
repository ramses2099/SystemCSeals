@extends('layouts.layout')
@section('title','Seals Process')
@section('content')
 <div class="row">
    <div class="col-lg-12">
         <h3 class="page-header"><i class="fa fa-laptop"></i> Seals Process</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="">List Seals Process</a></li>           					  	
        </ol>
   </div>
 </div>
 <div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                List Seals Process
            </header>
                <div class="panel-body">
                <div class="row">
                     <div class="col-lg-10"> 
                       <a class="btn btn-primary" href="{!! action('SealsProcess\SealsProcessController@create')!!}"><i class="icon_plus_alt2"></i> New Seals Process</a>                     
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
                                    <th>Id Seals Process</th>
                                    <th>Process</th>
                                    <th>Estado</th>
                                    <th>Fecha Creacion</th>
                                    <th>Fecha Actualizacion</th>
                                    <th>Action</th>
                                </tr>
                                @if($sealsprocess->isEmpty())
                                    <tr>   
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                    </tr>
                                    @else
                                    @foreach($sealsprocess as $sprocess)
                                        <tr>   
                                            <td>{!!$sprocess->idsealsprocess!!}</td>
                                            <td>{!!$sprocess->process!!}</td>
                                            @if($sprocess->idstaterow == 1)
                                                <td>Active</td>
                                            @else
                                               <td>InActive</td>
                                            @endif
                                            <td>{!!$sprocess->created_at!!}</td>
                                            <td>{!!$sprocess->updated_at!!}</td>
                                            <td>
                                            <div class="btn-group">                                                
                                                <a class="btn btn-success" href="{!! action('SealsProcess\SealsProcessController@show', $sprocess->idsealsprocess)!!}"><i class="fa fa-search-plus"></i></a>                                               
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
