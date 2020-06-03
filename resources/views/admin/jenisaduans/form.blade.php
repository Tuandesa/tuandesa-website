@extends('admin.layout')
@php
    $formTitle = !empty($jenisaduan)?'Update':'New'
@endphp
@section('headTitle',__('admin.jenisaduans').' '.$formTitle)
@section('content')
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{$formTitle}} Profile Desa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('admin/jenisaduans')}}">Jenis Aduan</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="row mt-2">
        <div class="col">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              @include('flash::message')
              @include('admin.partials.flash',['$errors' => $errors])
              @if (!empty($jenisaduan))
                  {!! Form::model($jenisaduan, ['url' => ['admin/jenisaduans',$jenisaduan->id],'method' => 'PUT']) !!}
                  {!! Form::hidden('id') !!}
              @else
                  {!! Form::open(['url' => 'admin/jenisaduans']) !!}
              @endif
              <div class="form-group">
                {!! Form::label('name', 'Name') !!}
                {!! Form::text('name', null, ['class' => 'form-control','placeholder' => 'Name']) !!}
              </div>
              <div class="form-footer pt-2 border-top">
                <button type="submit" class="btn btn-primary">Save</button>
              <a href="{{route('jenisaduans.index')}}" class="btn btn-secondary" >back</a>
              </div>
              {!! Form::close() !!}
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </section>
@endsection