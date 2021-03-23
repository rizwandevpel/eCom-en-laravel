@extends('master')

@section('content')
    <div class="custom-product">

        <div class="col-sm-10">
            <div class="trending-wrapper">
                <h3>Result for Product</h3>
                @foreach ($product as $product)
                    <div class="row searched-item cart-list-devider">
                        <div class="col-sm-4">
                            <a href="detail/{{ $product->id }}">
                                <img class="trending-image" src="{{ $product->gallery }}" alt="Chania">
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <h2>{{ $product->name }}</h2>
                            <h5>{{ $product->description }}</h5>
                        </div>
                        <div class="col-sm-4">
                            <button class="btn btn-warning">Remove to Cart</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection
