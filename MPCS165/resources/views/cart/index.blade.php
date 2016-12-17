@extends('layouts.app')

@section('content')
<div class="container">
  <h1> Cart </h1>
  @if($cart->count())
  <table class = "table">
    <thead>
      <tr>
        <th> Time added </th>
        <th> Quantity </th>
        <th> Candy Name </th>
        <th>  Description </th>
      </tr>
    </thead>
    <tbody>
      @foreach ($cart as $cart_item)
       <tr>
         <td> {{$cart_item->timestamp}}</td>
         <td> {{$cart_item->quantity}}</td>
         <td> {{$cart_item->item_name}}</td>
         <td> {{$cart_item->description}} </td>
         <td> <form action="/cart/remove_cart" method="post">
           {{ csrf_field() }}
           <input type="hidden" value="{{$cart_item->order_id}}" name="order_id"\>
           <input type="hidden" value="{{$cart_item->product_id}}" name="product_id"\>
           <input type="submit" value="Remove from cart" class="btn btn-raised btn-primary"/>
         </form></td>
       </tr>
       @endforeach
     </tbody>
   </table>
   <div class="row">
   <a href="/cart/check_out" class="right btn btn-raised btn-warning"> Checkout </a>
 </div>
   @else
    Your cart is empty. Buy some candies!
   @endif
   @stop
   </div>
