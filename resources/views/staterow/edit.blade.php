@extends('layouts.layout')
@section('title','Edit State Row')
@section('content')
 <div class="row">
    <div class="col-lg-12">
         <h3 class="page-header"><i class="fa fa-laptop"></i> State Row</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="{!! action('StateRow\StateRowController@index')!!}">List State Row</a></li>
            <li><i class="fa fa-laptop"></i>Edit State Row</li>						  	
        </ol>
   </div>
 </div>
 <div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
            Edit State Row
            </header>
                <div class="panel-body">
                    <form class="form-horizontal " method="post" action="{!! action('StateRow\StateRowController@update',$staterow->idstaterow) !!}" >
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
                                <input id="descripcion" name="descripcion" class="form-control" type="text" value="{!! $staterow->descripcion !!}">
                            </div>
                        </div>                       
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-primary" type="submit">Update</button>
                                <a class="btn btn-success" href="{!! action('StateRow\StateRowController@index')!!}">Backt to list</a>
                            </div>
                        </div>                                
                    </form>
                </div>
        </section>
    </div>
 </div>
@endsection
