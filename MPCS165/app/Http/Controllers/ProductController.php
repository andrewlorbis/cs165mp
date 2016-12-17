<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Product;
use View;
use DB;
use App\User;


class ProductController extends Controller
{

        public function index()
        {
            $products = DB::table('products')->where('items_available','>',0)->orderBy('item_name')->get();
            return View::make('product.index')->with('products', $products);
        }



        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
              $user = User::find(Auth::id());
              if(!($user->is_admin)){
                return redirect('/product');
              }
              return view('product.create');
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
          $user = User::find(Auth::id());
          if(!($user->is_admin)){
            return redirect('/product');
          }
          $product = new Product;
          $product->item_name = $request->input('item_name');
          $product->description = $request->input('description');
          $product->items_available = $request->input('items_available');
          $product->status = "available";
          $product->save();
          return view('product.store');
        }

        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            //
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {

        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id)
        {
            //
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            //
        }

}
