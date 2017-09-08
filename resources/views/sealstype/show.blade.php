@extends('layouts.layout')
@section('title','Seals Type Show')
@section('content')
 <div class="row">
    <div class="col-lg-12">
       <h3 class="page-header"><i class="fa fa-laptop"></i> Seals Type</h3>
       <ol class="breadcrumb">
         <li><i class="fa fa-home"></i><a href="{!! action('SealsType\SealsTypeController@index') !!}">List Seals Type</a></li>
         <li><i class="fa fa-laptop"></i>Seals Type Show</li>						  	
       </ol>
    </div>
 </div>
 <div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
            Seals Type Show
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
                             <td><b>Id Seals Type:</b></td>
                             <td>{!!$sealstype->idsealstype!!}</td>
                            </tr>
                            <tr>
                             <td><b>Descripcion:<b/></td>
                             <td>{!!$sealstype->descripcion!!}</td>
                            </tr>
                            <tr>
                             <td><b>Status:<b/></td>
                             @if($sealstype->idstaterow == 1)
                              <td>Active</td>
                             @else
                              <td>InActive</td>
                             @endif
                            </tr>
                            <tr>
                             <td><b>Host Name:<b/></td>
                             <td>{!!$sealstype->hostname!!}</td>
                            </tr>
                            <tr>
                             <td><b>Fecha Creacion:<b/></td>
                             <td>{!!$sealstype->created_at!!}</td>
                            </tr>
                            <tr>
                             <td><b>Fecha Actualizacion:<b/></td>
                             <td>{!!$sealstype->updated_at!!}</td>
                            </tr>
                            <tr>
                                <td>
                                   <div class="form-group">
                                     <div class="col-lg-12 text-right">
                                        <a class="btn btn-primary" href="{!! action('SealsType\SealsTypeController@edit', $sealstype->idsealstype)!!}">Edit Seals Type</a>
                                        <a class="btn btn-success" href="{!! action('SealsType\SealsTypeController@index')!!}">Backt to list</a>
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
