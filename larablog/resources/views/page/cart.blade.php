@if($cart != null)


<div class="cart-item">
  <table style="width: 100%">
    @foreach ($cart->products as $item)
    <tr>
      <th>
        <div class="media">
          <a class="pull-left" href="{{URL::to('/chi-tiet-san-pham/'.$item['productInfo']->id)}}"><img src="{{URL::to('public/source/img/'.$item['productInfo']->image)}}"
              alt="" style="display: inline-block"></a>
          <div class="media-body">
            <span class="cart-item-title">{{$item['productInfo']->name}}</span>
            <span class="cart-item-amount">{{$item['qty']}}*<span>{{number_format($item['productInfo']->price)}} đ</span></span>
          </div>
          <i class="far fa-times-circle remove" data-id="{{$item['productInfo']->id}}"></i>
        </div>
      </th>
    </tr>
    @endforeach
  </table>
  
</div>

<div class="cart-caption">
  <div class="cart-total text-right">Tổng tiền: <span
      class="cart-total-value"> {{number_format($cart->totalPrice)}}đ</span></div>
  <div class="clearfix"></div>

  <div class="center">
                                <div class="space10">&nbsp;</div>
                                <a href="{{route('dathang')}}" class="beta-btn primary text-center">Đặt hàng <i
                                        class="fa fa-chevron-right"></i></a>
                                {{-- {{URL::to('/thanh-toan')}} --}}
                            </div>
  @endif

  {{-- {{URL::to('public/source/img/'.$item['item']->image)}} --}}
  {{-- {{$item['item']->name}} --}}
  {{-- {{$item['qty']}} --}}
  {{-- {{number_format($item['item']->price)}} --}}
  {{-- data-id="{{$item['item']->id}}" --}}