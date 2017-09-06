@extends('layouts.layout')
@section('title','Seals Category')
@section('content')
 <div class="row">
    <div class="col-lg-12">
         <h3 class="page-header"><i class="fa fa-laptop"></i> Seals Category</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="">List Seals Category</a></li>           					  	
        </ol>
   </div>
 </div>
 <div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                List Seals Catogory 
            </header>
                <div class="panel-body">
                <div class="row">
                     <div class="col-lg-10"> 
                       <a class="btn btn-primary" href="{!! action('SealsCategory\SealsCategoryController@create')!!}"><i class="icon_plus_alt2"></i> New Seals Category</a>                     
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
                                    <th>Id Seals Catogory</th>
                                    <th>Descripcion</th>
                                    <th>Estado</th>
                                    <th>Fecha Creacion</th>
                                    <th>Fecha Actualizacion</th>
                                    <th>Action</th>
                                </tr>
                                @if($sealscatogorys->isEmpty())
                                    <tr>   
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                    </tr>
                                    @else
                                    @foreach($sealscatogorys as $scatogory)
                                        <tr>   
                                            <td>{!!$scatogory->idsealscatogory!!}</td>
                                            <td>{!!$scatogory->descripcion!!}</td>
                                            @if($scatogory->idstaterow == 1)
                                                <td>Active</td>
                                            @else
                                               <td>InActive</td>
                                            @endif
                                            <td>{!!$scatogory->created_at!!}</td>
                                            <td>{!!$scatogory->updated_at!!}</td>
                                            <td>
                                            <div class="btn-group">                                                
                                                <a class="btn btn-success" href="{!! action('SealsCategory\SealsCategoryController@show', $scatogory->idsealscatogory)!!}"><i class="fa fa-search-plus"></i></a>                                               
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
