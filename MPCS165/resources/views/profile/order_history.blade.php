@extends('layouts.app')

@section('content')
<div class="col-md-8 col-md-offset-2">
  <h1> Order History </h1>
  <hr>
  @if($cart->count())
  <div class = "card">
  <table class = "table">
    <thead>
      <tr>
        <th> Time added </th>
        <th> No. of Available Items </th>
        <th> Item Name </th>
        <th> Description </th>
      </tr>
    </thead>
    <tbody>
      @foreach ($cart as $cart_item)
       <tr>
         <td> {{$cart_item->timestamp}}</td>
         <td> {{$cart_item->items_available}}</td>
         <td> {{$cart_item->item_name}}</td>
         <td> {{$cart_item->description}} </td>
       </tr>
       @endforeach
     </tbody>
   </table>
 </div>
   @else
    <h3>Your order history is empty!</h3>
   @endif
   <br>
   <center><h4><a href="{{ URL::previous() }}">Back</a></h4></center>
   @stop
 </div>
