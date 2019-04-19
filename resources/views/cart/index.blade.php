@extends('layout.main')

@section('content')

    <div class="row">

        <h3>Cart Item</h3>


        <table class="table table-hover">
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
                    <td>
                        {{$cartItem->qty}}
                        {!! Form::open(['route' => ['cart.update',$cartItem->rowId], 'method' => 'post'])  !!}
                        <input name="qty" type="text" value="{{$cartItem->qty}}">
                        <input type="button" class="btn btn-sm btn-default" value="Ok">
                        {!! Form::close() !!}
                    </td>
                    <td>{{$cartItem->options->has('size')?$cartItem->options->size:''}}</td>
                </tr>
            @endforeach

            <tr>
                <td></td>
                <td>Grand Total: $ {{$totalAmount}}</td>
                <td>Item: {{$totalCount}}</td>
            </tr>
            </tbody>

        </table>

        <a href="#" class="button">Checkout</a>

    </div>





         @endsection
