@extends('layouts.app')

@section('content')

<div class = "col-md-8 col-md-offset-2">
    <h1> User Profile</h1>
    <hr>
      <h4> <b>Username:</b> {{Auth::user()->name}}</h4>
      <h4> <b>Email:</b> {{Auth::user()->email}}</h4>
      <h4> <b>Address:</b> {{Auth::user()->contact}} </h4>

    </ul>
    <br>
    <h4><a href="/profile/order_history">View Order History</a> |
    <a href="/profile/update">Edit Profile</a></h4>
</div>
@endsection
