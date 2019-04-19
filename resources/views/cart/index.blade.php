@extends('layout.main')

@section('content')


    <h3>Cart Item</h3>


    <table class="table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Size</th>
            </tr>
        </thead>
        <tbody>
        @foreach($cartItems as $cartItem)
            <tr>
                <td>{{$cartItem->name}}</td>
                <td>{{$cartItem->price}}</td>
                <td>{{$cartItem->qty}}</td>
                <td>{{$cartItem->options->has('size')?$cartItem->options->size:''}}</td>
            </tr>
            @endforeach
        </tbody>

    </table>





         @endsection
