@extends('layouts.layout')
@section('title','Edit Seals Category')
@section('content')
 <div class="row">
    <div class="col-lg-12">
         <h3 class="page-header"><i class="fa fa-laptop"></i> Seals Category</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="{!! action('SealsCategory\SealsCategoryController@index')!!}">List State Row</a></li>
            <li><i class="fa fa-laptop"></i>Edit Seals Category</li>						  	
        </ol>
   </div>
 </div>
 <div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
            Edit Seals Category
            </header>
                <div class="panel-body">
                    <form class="form-horizontal " method="post" action="{!! action('SealsCategory\SealsCategoryController@update',$sealscatogory->idsealscatogory) !!}" >
                        @foreach ($errors->all() as $error)
                        <div class="alert alert-block alert-danger fade in">
                            <button class="close close-sm" type="button" data-dismiss="alert">
                               <i class="icon-remove"></i>
                            </button>
                               <strong>Error!</strong> {{ $error }}
                        </div>
                        @endforeach
                        @if (session('status'))
                        <div class="alert alert-success fade in">
                            <button class="close close-sm" type="button" data-dismiss="alert">
                               <i class="icon-remove"></i>
                            </button>
                            <strong>Well done!</strong> {{ session('status')}}
                        </div>
                        @endif
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Description</label>
                            <div class="col-sm-10">
                                <input id="descripcion" name="descripcion" class="form-control" type="text" value="{!! $sealscatogory->descripcion !!}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Status</label>
                            <div class="col-sm-10">
                                 <select id="idstaterow" name="idstaterow" class="form-control m-bot15">
                                 @foreach($staterows as $staterow)
                                     <option value="{{$staterow->idstaterow}}">{{$staterow->descripcion}}</option>
                                 @endforeach
                                 </select>
                            </div>
                        </div>  
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-primary" type="submit">Update</button>
                                <a class="btn btn-success" href="{!! action('SealsCategory\SealsCategoryController@index')!!}">Backt to list</a>
                            </div>
                        </div>                                
                    </form>
                </div>
        </section>
    </div>
 </div>
@endsection
