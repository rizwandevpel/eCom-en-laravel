@extends('master')

@section('content')
    <div class="custom-product">
        <div class="col-sm-4">
            <a href="#">Filter</a>
        </div>
        <div class="col-sm-4">
            <div class="trending-wrapper">
                <h3>Result for Product</h3>
                @foreach ($product as $product)
                    <div class="searched-item">
                        <a href="detail/{{ $product['id'] }}">
                        <img class="trending-image" src="{{ $product['gallery'] }}" alt="Chania">
                        <div class="">
                            <h2>{{ $product['name'] }}</h2>
                            <h5>{{ $product['description'] }}</h5>
                        </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection
