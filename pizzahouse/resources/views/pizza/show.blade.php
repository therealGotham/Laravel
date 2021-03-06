@extends('layouts.app')
@section('content')


<div class="wrapper pizza-details">
    <h1>Order By {{$pizza->name}}</h1>
    <p>Type--{{$pizza->type}}</p>
    <p>Base--{{$pizza->base}}</p>
    <p class="toppings">Extra Toppings:</p>
    <ul>
        @foreach($pizza->toppings as $topping)
            <li>{{$topping}}</li>
        @endforeach
    <ul>    
    <form action="/pizza/{{ $pizza->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button>Complete Order</button>
    </form>
<a href="/pizza/" class="back"><--Back to all pizzas</a>
</div>
@endsection
