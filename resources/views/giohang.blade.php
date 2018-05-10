@extends('pages.master')
@section('content')
<div id="between">
    <div class="row container-fluid linedown">
      <div class="row container-fluid col-8">
        <div class="row container-fluid frame text-uppercase  align-items-center">
            <div class="col-2 linedown"></div>
              <div class="col-4 linedown">
                <p>Tên sản phẩm</p>
              </div>
              <div class="col-3 linedown">
                <p>Giá</p>
              </div>
              <div class="col-3 linedown">
                <p>Số lượng</p>
              </div>
          </div>
        @if(Session::has('cart'))
        @foreach($product_cart as $product)
        <div class="row container-fluid">
          <div class="col-2 linedown">
            <img src="../images/{{$product['item']['image']}}" alt="Logo" height="70" width="90"> </div>
          <div class="col-4 linedown">
            <p>{{$product['item']['name']}}</p>
          </div>
          <div class="col-3 linedown">
            <p>{{number_format($product['item']['price']) }} VND</p>
          </div>
          <div class="col-3 linedown">
            <p>{{$product['qty']}}</p>
          </div>
        </div>
        @endforeach
        @endif
      </div>
      <div class="col-4 text-uppercase bg-secondary text-light">
        <p>Thông tin đơn hàng: </p>
        <p>Tông giá: {{number_format(Session('cart')->totalPrice)}} VND </p>
        <button class="btn btn-primary" onclick="javascript:location.href='{{route('thanhtoan')}}'">Thanh toán</button>
      </div>
    </div>
  </div>
@endsection