@extends('pages.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Tổng kết đơn hàng</span>
            <span class="badge badge-secondary badge-pill">{{$cart->totalQty}}</span>
          </h4>
          <ul class="list-group mb-3">
        @foreach($product_cart as $product)
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">{{$product['item']['name']}}</h6>
                <small class="text-muted">{{$product['qty']}}</small>
              </div>
              <span class="text-muted">{{number_format($product['price'])}} VND</span>
            </li>
        @endforeach
            <!-- <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Promo code</h6>
                <small>EXAMPLECODE</small>
              </div>
              <span class="text-success">-$5</span>
            </li> -->
            <li class="list-group-item d-flex justify-content-between">
              <span>Total</span>
              <strong>{{number_format($cart->totalPrice)}} VND</strong>
            </li>
          </ul>

          <!-- <form class="card p-2">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Promo code">
              <div class="inputs-group-append">
                <button type="submit" class="btn btn-secondary">Redeem</button>
              </div>
            </div>
          </form> -->
        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Thanh toán</h4>
          <form class="needs-validation" novalidate="">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>
            <div class="mb-3">
              <label for="email">Email <span class="text-muted"></span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Địa chỉ</label>
              <input type="text" class="form-control" id="address" placeholder="Đường, phường, quận, thành phố" required="">
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>
            <div class="mb-3">
              <label for="address2">Số điện thoại <span class="text-muted"></span></label>
              <input type="text" class="form-control" id="address2" placeholder="@123456789">
            </div>
            <h4 class="mb-3">Phương thức thanh toán</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="" onclick="show()">
                <label class="custom-control-label" for="credit">&nbsp&nbsp&nbsp&nbsp&nbsp Credit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required=""onclick="hiddens()">
                <label class="custom-control-label" for="debit">&nbsp&nbsp&nbsp&nbsp&nbsp Nhận tiền khi giao hàng</label>
              </div>
            </div>
              <div class="creditcard">
              <div class="row creditcard">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Name on card</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                <small class="text-muted">Full name as displayed on card</small>
                <div class="invalid-feedback">
                  Name on card is required
                </div>
              </div>
              <div class="col-md-6 mb-3 ">
                <label for="cc-number">Credit card number</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                <div class="invalid-feedback">
                  Credit card number is required
                </div>
              </div>
            </div>
              </div>
            
              <div class="creditcard">
              <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Expiration</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                <div class="invalid-feedback">
                  Expiration date required
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-cvv">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                <div class="invalid-feedback">
                  Security code required
                </div>
              </div>
            </div>
              </div>
            
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Tiến hành thanh toán</button>
          </form>
        </div>
      </div>
 </div>
     <script>
        function show(){
        var x = document.getElementsByClassName('creditcard');
        var i;
        for(i=0;i<x.length;i++){
            x[i].style.display = 'block';
            }
        }
        function hiddens(){
        var x = document.getElementsByClassName('creditcard');
        var i;
        for(i=0;i<x.length;i++){
            x[i].style.display = 'none';
            }
        }
    </script>
@endsection