@extends('layouts.layout')
@section('title','Seals Process Show')
@section('content')
 <div class="row">
    <div class="col-lg-12">
       <h3 class="page-header"><i class="fa fa-laptop"></i>Seals Process</h3>
       <ol class="breadcrumb">
         <li><i class="fa fa-home"></i><a href="{!! action('SealsProcess\SealsProcessController@index') !!}">List Seals Process</a></li>
         <li><i class="fa fa-laptop"></i>Seals Process Show</li>						  	
       </ol>
    </div>
 </div>
 <div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
            Seals Process Show
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
                             <td><b>Id Seals Process:</b></td>
                             <td>{!!$sealsprocess->idsealsprocess!!}</td>
                            </tr>
                            <tr>
                             <td><b>Process:<b/></td>
                             <td>{!!$sealsprocess->process!!}</td>
                            </tr>
                            <tr>
                             <td><b>Status:<b/></td>
                             @if($sealsprocess->idstaterow == 1)
                              <td>Active</td>
                             @else
                              <td>InActive</td>
                             @endif
                            </tr>
                            <tr>
                             <td><b>Host Name:<b/></td>
                             <td>{!!$sealsprocess->hostname!!}</td>
                            </tr>
                            <tr>
                             <td><b>Fecha Creacion:<b/></td>
                             <td>{!!$sealsprocess->created_at!!}</td>
                            </tr>
                            <tr>
                             <td><b>Fecha Actualizacion:<b/></td>
                             <td>{!!$sealsprocess->updated_at!!}</td>
                            </tr>
                            <tr>
                                <td>
                                   <div class="form-group">
                                     <div class="col-lg-12 text-right">
                                        <a class="btn btn-primary" href="{!! action('SealsProcess\SealsProcessController@edit', $sealsprocess->idsealsprocess)!!}">Edit Seals Process</a>
                                        <a class="btn btn-success" href="{!! action('SealsProcess\SealsProcessController@index')!!}">Backt to list</a>
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
