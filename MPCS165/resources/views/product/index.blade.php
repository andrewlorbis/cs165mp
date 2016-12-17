@extends('layouts.app')

@section('content')
<div class="container">
  <h1> Products </h1>
  @if(count($products))
  <table class = "table">
    <thead>
      <tr>
        <th> Beer </th>
        <th> Description </th>
        <th> Available Items </th>
      </tr>
    </thead>
    <tbody>
      @foreach ($products as $product)
       <tr>
         <td> {{$product->item_name}}</td>
         <td> {{$product->description}}</td>
         <td> {{$product->items_available}}</td>
         <td> <form action="/product/add_cart" method="post">
           {{ csrf_field() }}
           <input type="hidden" value="{{$product->id}}" name="id"\>
           <input type="submit" value="Add to cart" class="btn btn-raised btn-warning"/>
         </form></td>
       </tr>
       @endforeach
     </tbody>

  </table>
  @else
    There are no users
  @endif
  @stop
</div>
