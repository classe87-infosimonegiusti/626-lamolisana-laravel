@extends('layouts.app')

@section('page-title', 'I nostri prodotti')

@section('content')
    <h1>Elenco dei prodotti</h1>

    <div class="row">
        @foreach ($products as $product)
            <div class="col-3">
                <div class="card">
                    <img src="{{$product['src']}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$product['titolo']}}</h5>
                      <p class="card-text">{!! substr($product['descrizione'], 0, 100 )!!}</p>
                    </div>
                  </div>
            </div>
        @endforeach
    </div>
@endsection
