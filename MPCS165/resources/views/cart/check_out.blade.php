@extends('layouts.app')

@section('content')

<div class="container">
  <div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Success!</h3>
  </div>
  <div class="panel-body">
    <p>Your cart orders have been checked out. Thank you for shopping!</p>

    <a href="/product" class="btn btn-raised btn-primary">Back to products</a>
    <a href="/cart" class="btn btn-raised btn-primary">Back to cart</a>
  </div>
</div>
</div>
@endsection
