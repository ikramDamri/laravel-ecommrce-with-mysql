@extends('layouts.app')

@section('content')

    <div class="container px-6 mx-auto">
        <h3 class="text-2xl product container font-medium text-gray-50">Product List</h3>
        <div class="row">
            @foreach ($products as $product)

            <div class="col-4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="materialboxed" height="400px" src='img/{{$product->image}}' alt="{{$product->image}}">
                    </div>

                    <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">{{$product->name}}</span>
                    <p class="price">{{$product->price}} MAD</p>
                    <form  method="POST" action="{{  route('cart.store')}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $product->id }}" name="id">
                        <input type="hidden" value="{{ $product->name }}" name="name">
                        <input type="hidden" value="{{ $product->price }}" name="price">
                        <input type="hidden" value="{{ $product->image }}"  name="image">


                        <input type="number" name="quantity" value=1
                               class="text-sm sm:text-base px-2 pr-2 rounded-lg border border-gray-400 py-1 focus:outline-none focus:border-blue-400 "
                               style="width: 50px"/>

                        <input type="hidden" id="id" name="id" value="{{ $product->id }}">
                        <button type="submit" class="ml-9 waves-effect waves-pink btn">
                            Add to Cart
                        </button>
                    </form>
                    </div>
{{--                     <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Product description:<i class="material-icons right">close</i></span>
                    <p>{{$product->description}}</p>
                    </div> --}}
{{--                     <a href="{{ route('products.show', $product) }}" title="show description" >Show</a> --}}


                            <a class="white waves-effect waves-teal btn flow-text detail" href="{{ route('products.show', $product) }}" title="show description" >
                                Detail</a>


                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection
