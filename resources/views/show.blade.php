@extends("layouts.app")
@section("content")

<div class="container #e3f2fd blue lighten-5">
	<h1 class="#f48fb1 pink-text #e3f2fd blue lighten-5">{{ $product->name }}</h1>

	<div class="container flow-text col s12 card-panel" >{{ $product->description }}</div>

	<button class="white waves-effect waves-teal btn flow-text"><a class="pink-text hover:bg-violet-600 link" href="{{ url('/') }}" title="back to shop" >Back to Shop</a></button>

</div>


@endsection

