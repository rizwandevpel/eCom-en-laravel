@extends('master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="detail-img" src="{{ $product['gallery'] }}" alt="">
            </div>
            <div class="col-sm-6">
                <a href="/">Go Back</a>
                <h2>{{ $product['name'] }}</h2>
                <h3>{{ $product['price'] }}</h3>
                <h4>Detail: {{ $product['description'] }}</h4>
                <h5>Detail: {{ $product['category'] }}</h5>
                <br><br>
                <button class="btn btn-primary">Add to Cart</button>
                <br><br>
                <button class="btn btn-success">Buy Now</button>
            </div>
        </div>
    </div>
@endsection
