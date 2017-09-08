@extends('layouts.layout')
@section('title','Edit Seals Process')
@section('content')
 <div class="row">
    <div class="col-lg-12">
         <h3 class="page-header"><i class="fa fa-laptop"></i> Seals Process</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="{!! action('SealsProcess\SealsProcessController@index')!!}">List Seals Process</a></li>
            <li><i class="fa fa-laptop"></i>Edit Seals Process</li>						  	
        </ol>
   </div>
 </div>
 <div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
            Edit Seals Process
            </header>
                <div class="panel-body">
                    <form class="form-horizontal " method="post" action="{!! action('SealsProcess\SealsProcessController@update',$sealsprocess->idsealsprocess) !!}" >
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
                            <label class="col-sm-2 control-label">process</label>
                            <div class="col-sm-10">
                                <input id="process" name="process" class="form-control" type="text" value="{!! $sealsprocess->process !!}">
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
                                <a class="btn btn-success" href="{!! action('SealsProcess\SealsProcessController@index')!!}">Backt to list</a>
                            </div>
                        </div>                                
                    </form>
                </div>
        </section>
    </div>
 </div>
@endsection
