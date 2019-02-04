@extends('layout')

@section('content')

  <div class="col-sm-8">
    
    <h2>
      {{ $products->name }}
      <a href="{{ route('products.index') }}" class="btn btn-default pull-right">Listado</a>
    </h2>

    @include('products.partials.error')
    
    {!! Form::model($products, ['route' => ['products.update', $products->id], 'method' => 'PUT']) !!}
      @include('products.partials.form')
    {!! Form::close() !!}
    
  </div>

  <div class="col-sm-4">
    @include('products.partials.aside')
  </div>

@endsection