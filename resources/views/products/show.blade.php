@extends('layout')

@section('content')

  <div class="col-sm-8">
    
    <h2>
      {{ $products->name }}
      <a href="{{ route('products.edit', $products->id) }}" class="btn btn-default pull-right">editar</a>
    </h2>

    <p>{{ $products->short }}</p>

    {!! $products->body !!}
    
  </div>

  <div class="col-sm-4">
    @include('products.partials.aside')
  </div>

@endsection