@extends('welcome')
@section('checkout')


<section class="section-checkout">
    @if(!Auth::check())
    <div class="out-up">  
        <div class="up">
            Bạn đã có tài khoản?
            <a href="{{route('login')}}">Ấn vào đây để đăng nhập</a>
        </div>

        <div class="gachchan">
            <h1></h1>
        </div>
    </div>
    @endif

        <form action="{{route('dathang')}}" method="post" class="row">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            
            <div class="row-1">  

                <h1>Thông Tin Thanh Toán</h1>
                <div> @if(Session::has('thongbao'))
                    {{Session::get('thongbao')}}
                    @endif</div>
                <div>
                    <h4>Tên *</h4>
                    <input class="outline-name" name="name" type="text" @if(Auth::check())value="{{Auth::user()->name }}"@endif style="width: 100%; height: 40px">
                </div>

                <div>
                    <h4>Địa chỉ *</h4>
                    <input class="outline" type="text" name="address" placeholder="Địa chỉ">
                </div>
                <div>
                    <h4>Số điện thoại *</h4>
                    <input class="outline" type="text" name="phone_number">
                </div>
                <div>
                    <h4>Địa chỉ email *</h4>
                    <input class="outline" type="text" @if(Auth::check())value="{{Auth::user()->email }}"@endif name="email">
                </div>
    
                <div class="end-checkout">
                    <h4>Ghi chú đơn hàng (tuỳ chọn)</h4>
                    <input class="ghi-chu" type="text"
                      class="intext" name="note"  placeholder="Ghi chú đơn hàng,ví dụ:thời gian hay chỉ dẫn địa điểm giao hàng chi tiết hơn">
                </div>
            </div>
    
            <div class="row-2">
                <div class="outline-row-2">
                    <div class="text-header">
                        <h1>ĐƠN HÀNG CỦA BẠN</h1>
                        @if(Session::has('Cart'))
                        <table style="width: 100%;">
                            <tr>
                                <th class="left">SẢN PHẨM</th>
                                <th class="right">TỔNG</th>
                            </tr>
                           
                            @foreach (Session::get('Cart')->products as $item)
                            <tr>
                                <td>{{$item['productInfo']->name}} &#215;{{$item['qty']}}</td>
                                <td class="right">
                                    <p>{{number_format($item['productInfo']->price)}} &#8363;</p>
                                </td>
                            </tr>
                            @endforeach
                            
                            <tr>
                                <th class="left">Tổng giá sản phẩm</th>
                                <td class="right">
                                    <p>{{number_format(Session::get('Cart')->totalPrice)}} &#8363;</p>
                                </td>
                            </tr>
    
                            <tr>
                                <td class="left">Giao hàng</td>
                                <td class="right">Giao hàng miễn phí</td>
                            </tr>
    
                            <tr>
                                <th class="left">Tổng</th>
                                <td class="right">
                                    <p>{{number_format(Session::get('Cart')->totalPrice)}} &#8363;</p>
                                </td>
                            </tr>

                        </table>
                        
                    </div>
    
                    <div>
                        <input type="radio" name="pay" id="tra-tien" value="COD" checked>
                        <label for="tra-tien">Trả tiền mặt khi nhận hàng</label>
                        <br> <br>
                        <input type="radio" name="pay" id="chuyen-khoan" value="ATM">
                        <label for="chuyen-khoan">Chuyển khoản ngân hàng</label>
                        <br> <br>
                        <input class="dat-hang" type="submit" value="Đặt Hàng">
                    </div>
                    @endif
                </div>
            </div>
        </form>

    
</section>

@endsection