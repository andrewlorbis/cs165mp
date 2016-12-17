@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create a product</div>
                <div class="panel-body">
                  <form class="form-horizontal" action="/product/store" method="post" >
                    {{csrf_field()}}
                    <div class="form-group{{$errors->has('item_name') ? ' has error' : ''}}">
                      <label for="item_name" class="col-md-4 control-label">Item name</label>
                        <div class="col-md-6">
                          <input id="item_name" type="text" class="form-control" name="item_name" value="{{ old('item_name') }}" required autofocus>
                          @if ($errors->has('item_name'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('item_name') }}</strong>
                              </span>
                          @endif
                        </div>
                      </div>

                      <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                          <label for="password" class="col-md-4 control-label">Description</label>

                          <div class="col-md-6">
                              <input id="description" type="text" class="form-control" name="description" required>

                              @if ($errors->has('description'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('description') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="items_available" class="col-md-4 control-label">Available Items</label>

                          <div class="col-md-6">
                              <input id="items_available" type="text" class="form-control" name="items_available" required>

                              @if ($errors->has('items_available'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('items_available') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-md-8 col-md-offset-4">
                              <button type="submit" class="btn btn-raised btn-primary">
                                  Create product
                              </button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
@endsection
