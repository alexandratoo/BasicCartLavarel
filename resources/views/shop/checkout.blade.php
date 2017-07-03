@extends('layouts.master')

@section('title')
Shopping Cart
@endsection

@section('content')
<div class="row">
  <div class="col-sm-6 col-md-4 cold-md-offset-4 col-sm-offset-3">
    <h1>Checkout</h1>
    <h4>Total: ${{ $total }}</h4>
 <form action=" {{route('checkout')}}" method="post">
      <div class="row">
        <div class="col-xs-12">
          <div class="form-group">
            <label for='name'>Name</label>
            <inout type="text" id="name" class="form-control" required>
            </div>
          </div>
          <div class="col-xs-12">
            <div class="form-group">
              <label for='address'>Address</label>
              <inout type="text" id="address" class="form-control" required>
              </div>
            </div>
            <div class="col-xs-12">
              <div class="form-group">
                <label for='card-name'>Cardholder Name</label>
                <inout type="text" id="card-name" class="form-control" required>
                </div>
              </div>
              <div class="col-xs-12">
                <div class="form-group">
                  <label for='card-number'>Credit Card Number</label>
                  <inout type="text" id="card-number" class="form-control" required>
                  </div>
                </div>
                <div class="col-xs-12">
                  <div class="row">
                    <div class='col-xs-6'>
                  <div class="form-group">
                    <label for='card-expiry-month'>Expiration Month</label>
                    <inout type="text" id="card-expiry-month" class="form-control" required>

      </div>
    </div>
                <div class="col-xs-6">
                  <div class="form-group">
                    <label for='card-expiry-year'>Expiration Date</label>
                    <inout type="text" id="card-expiry-year" class="form-control" required>
                    </div>
                  </div>
                </div>
              </div>
                  <div class="col-xs-12">
                    <div class="form-group">
                      <label for='card-cvc'>CVC</label>
                      <inout type="text" id="card-cvc" class="form-control" required>
                      </div>
        </div>
      </div>
{{ csrf_field()}}
<button type='submit' class='btn btn-success'>Purchase Now</button>
    </form>
  </div>
</div>
@endsection
@section('scripts)
<script type='text/javascript' src="https://js.stripe.com/v2/"></script>
<script type='text/javascript' src="{{ URL::to('src/js/checkout.js') }}"></script>
@endsection
