@extends('layouts.app')
@section('content') 
<div class="container"> 
<div class="row">
 <div class="col-md-12"> 
 <nav aria-label="breadcrumb primary">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('/home') }}">Dashboard</a> </li> 
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('books.index') }}">Buku</a></li> 
                    <li class="breadcrumb-item active" aria-current="page">Tambah Buku</li>
                </ol>
            </nav>
            <div class="card">
                <div class="card-header">Tambah Data Buku</div>
                <br>
               <div class="card-body">
<div class="tab-content">
   <div role="tabpanel" class="tab-pane active" id="form">
      <ul class="nav nav-tabs" role="tablist">
  <li role="presentation" class="active">
    <a href="#form" aria-controls="form" role="tab" data-toggle="tab">
    <i class="fa fa-pencil-square-o"></i> Isi Form
    </a>
  </li>
  <li role="presentation">
    <a href="#upload" aria-controls="upload" role="tab" data-toggle="tab">
    <i class="fa fa-cloud-upload"></i> Upload Excel
    </a>
  </li>
</ul>
<div class="tab-content">
  <div role="tabpanel" class="tab-pane active" id="form">
    {!! Form::open(['url' => route('books.store'),
    'method' => 'post', 'files'=>'true', 'class'=>'form-horizontal']) !!}
    @include('books._form')
    {!! Form::close() !!}
  </div>
  <div role="tabpanel" class="tab-pane" id="upload">
    {!! Form::open(['url' => route('import.books'),
    'method' => 'post', 'files'=>'true', 'class'=>'form-horizontal']) !!}
    @include('books._import')
    {!! Form::close() !!}
  </div>
</div>
   </div>
</div> 
 </div>
  </div> 
  </div>
   </div>
    </div>
     @endsection
