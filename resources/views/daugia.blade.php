@extends('pages.master')

@section('content')
<div id="between">
	<div  style="margin-left: 70px">
		<div class="row container-fluid linedown">
			<div class="col-6 linedown">
				<center><p><b>Trình lịch sử đấu giá</b></p></center>	
			</div>
	        <div class="col-6 linedown">
	            <center><b>Sản phẩm đấu giá</b></center>
	        </div>
		</div>   
		<div class="row container-fluid ">
			<div class="row col-6 border1" style="text-align: center;min-height: 400px; ">
				<div class="table-responsive">
				    <table class="table table-hover">
				      <thead>
				        <tr>
				          <th>#</th>
				          <th>Tên</th>
				          <th>Giá đấu</th>
				          <th>Thời gian đấu giá</th>
				        </tr>
				      </thead>
				      <tbody>
				      	<?php  $i = 0; ?>
				      	@foreach($bidders as $bidder)
				    		<?php  $i++;?>
				        <tr>
				          <td><?php  echo $i; ?></td>
				          <td>{{$bidder->name}}</td>
				          <td>{{number_format($bidder->bid_price)}}VND</td>
				          <td>{{$bidder->created_at}}</td>
				        </tr>
				        @endforeach
				    </table>
				  </div>     
			</div>
			<div class="col-5 border1 putright">
				<div>
					<div style="margin: 10px 0 0 10px;float: left">
						<img src="../images/{{$getsp->image}}" alt="Logo" height="150" width="130">
					</div>
					<div style=" margin: 30px 10px 0 0px">
						<div style="position: relative;left: 20px">
							<p>Thời gian</p>
							<p>Người thắng hiện tại:  <span style="color: blue;"> {{$bidders[0]->name}}&nbsp({{$bidders[0]->username}})</span></p>
							<p>Giá đấu hiện tại :<span style="color: blue;"> {{number_format($bidders[0]->bid_price)}} VND </span></p>
							<p> Giá đấu tiếp theo <span style="color: blue;">
								@if($bidders[0]->bid_price <= 100000)
								{{number_format($bidders[0]->bid_price+10000)}}
								@else 	{{number_format($bidders[0]->bid_price+$bidders[0]->bid_price*0.2)}}@endif VND</span></p>
							@if(Session::has('dangnhap'))
							<div style=""><button class="btn btn-success" type="button" onclick="javascript:location.href='{{route('postdaugia',$getsp->id)}}'">Đấu giá ngay</button> </div>
							@else
							<div style=""><button class="btn btn-success" type="button"  onclick="javascript:location.href='{{route('dangnhap')}}'">Đấu Giá</button> </div>
							
							@endif
						</div>
					</div>
				</div>
				<div style="position: relative;left: 30px">
					 <p><b> Thông tin sản phẩm</b></p>
					<p>{{$getsp->name}}</p>
					<p>{{$getsp->description}}</p>
					<div > <p>Giá mua ngay : {{number_format($getsp->price)}}&nbsp VND</p></div>
					<div > <button class="btn btn-success" type="button" onclick="javascript:location.href='{{route('themgiohang',$getsp->id)}}'">Mua ngay</button> </div>
					
							 
				</div>
			</div>
		</div>
	</div>
</div>
@endsection