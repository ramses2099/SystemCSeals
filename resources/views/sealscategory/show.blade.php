@extends('layouts.layout')
@section('title','Seals Category Show')
@section('content')
 <div class="row">
    <div class="col-lg-12">
       <h3 class="page-header"><i class="fa fa-laptop"></i>Seals Category</h3>
       <ol class="breadcrumb">
         <li><i class="fa fa-home"></i><a href="{!! action('SealsCategory\SealsCategoryController@index') !!}">List Seals Category</a></li>
         <li><i class="fa fa-laptop"></i>Seals Category Show</li>						  	
       </ol>
    </div>
 </div>
 <div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
               Seals Category Show
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
                             <td><b>Id Seals Catogory:</b></td>
                             <td>{!!$sealscatogory->idsealscatogory!!}</td>
                            </tr>
                            <tr>
                             <td><b>Descripcion:<b/></td>
                             <td>{!!$sealscatogory->descripcion!!}</td>
                            </tr>
                            <tr>
                             <td><b>Status:<b/></td>
                             @if($sealscatogory->idstaterow == 1)
                              <td>Active</td>
                             @else
                              <td>InActive</td>
                             @endif
                            </tr>
                            <tr>
                             <td><b>Host Name:<b/></td>
                             <td>{!!$sealscatogory->hostname!!}</td>
                            </tr>
                            <tr>
                             <td><b>Fecha Creacion:<b/></td>
                             <td>{!!$sealscatogory->created_at!!}</td>
                            </tr>
                            <tr>
                             <td><b>Fecha Actualizacion:<b/></td>
                             <td>{!!$sealscatogory->updated_at!!}</td>
                            </tr>
                            <tr>
                                <td>
                                   <div class="form-group">
                                     <div class="col-lg-12 text-right">
                                        <a class="btn btn-primary" href="{!! action('SealsCategory\SealsCategoryController@edit', $sealscatogory->idsealscatogory)!!}">Edit Seals Category</a>
                                        <a class="btn btn-success" href="{!! action('SealsCategory\SealsCategoryController@index')!!}">Backt to list</a>
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
