@extends('layouts.Master')
@section('content')
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
      <ol class="breadcrumb">
        <li><a href="#">
          <em class="fa fa-home"></em>
        </a></li>
        <li class="active">Panels</li>
      </ol>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Status Parkir</h1>
      </div>
    </div>
    <div class="row">
      <box-parkir></box-parkir>
      </div>
    </div>
  </div>
@endsection
