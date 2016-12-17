<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\User;
use App\Product;
use Carbon;
use View;
use DB;
use Form;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;

class ProfileController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }

    public function index(){
      $users = DB::table('users')->get();
      return View::make('profile.index')->with('users', $users);
    }

    public function order_history(){
      $user = User::find(Auth::id());
      $cart = $user->orders()->select('timestamp', 'orders.id as order_id',
      'orders.product_id','products.id as product_id', 'items_available','item_name','description')->where('orders.status','sold')->
      join('products','orders.product_id','=','products.id')->get();
      $cart->toarray();
      return View::make('profile.order_history')->with('cart', $cart);
    }

    public function update(){
      return view('profile.update');
    }

    public function store(Request $request){
      $user = User::find(Auth::id());
      $name = $request->input('name');
      $contact = $request->input('contact');
      $user->name = $name;
      $user->contact = $contact;

      $user->save();

      return View::make('profile.store');


    }
}
