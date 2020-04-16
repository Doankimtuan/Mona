<header id="navbar" class="flex-row">
    <div class="logo">
      <a href=""><img src="{{('/source/img/logo-new.png')}}" alt="MonaLogo"></a>
      {{-- {{URL::to('/trang-chu')}} --}}
    </div>
    <nav>
      <ul class="nav-items">
        <li class="nav-link"><a class="home" href="">trang chủ</a></li>
        {{-- {{URL::to('/trang-chu')}} --}}
        <li class="nav-link"><a href="">giới thiệu</a></li>
        {{-- {{URL::to('/gioi-thieu')}} --}}
        <li class="nav-link">
          <a href="">cửa hàng</a>
          {{-- {{URL::to('/cua-hang')}} --}}
          <ul class="dropdown-menu">
            <li class="item-sub-menu"><a href="#">Rau củ</a></li>
            <li class="item-sub-menu"><a href="#">Trái cây</a></li>
            <li class="item-sub-menu"><a href="#">đồ uống</a></li>
            <li class="item-sub-menu"><a href="#">đồ khô</a></li>
          </ul>
        </li>
        <li class="nav-link"><a href="">kiến thức</a></li>
        {{-- {{URL::to('/kien-thuc')}} --}}
        <li class="nav-link"><a href="#">liên hệ</a></li>
      </ul>
    </nav>

    <div class="nav-icon">
      <!-- open nav-icon class-->
      <ul>
        <li style="display: inline-block;"><i class="fas fa-search" id="search"></i></li>
        
        
        @guest
            {{-- <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif --}}
            <li style="display: inline-block;">
                <a href="{{ route('login') }}"><i class="fas fa-user" id="user">aaaaa</i></a>
            </li>
        @else
        <li style="display: inline-block;">
            <a href="#"><i class="fas fa-user" id="user"><div style="padding-left:5px">{{ Auth::user()->name }} </div></i></a>
                
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
        </li>
        @endguest
        
        
        
        
        
        <li style="display: inline-block;" class="lala">

          <i class="fas fa-shopping-cart" id="cart" onclick="shopCart()"></i>
          <div class="cart-body" id="beta-dropdown" style="width:20%;">
            <div id="change-item-cart">
              {{-- @if(Session::has("Cart") != null) --}}
              {{-- open cart-item --}}
              <div class="cart-item">
                {{-- <table style="width: 100%">
                  @foreach (Session::get('Cart')->products as $item)
                  <tr>
                    <th>
                      <div class="media">
                        <a class="pull-left" href="#"><img
                            src="{{URL::to('/source/img/'.$item['productInfo']->image)}}" alt=""
                            style="display: inline-block"></a>
                        <div class="media-body">
                          <span class="cart-item-title">{{$item['productInfo']->name}}</span>
                          <span
                            class="cart-item-amount">{{$item['qty']}}*<span>{{number_format($item['productInfo']->price)}}
                              đ</span></span>
                        </div>
                        <i class="far fa-times-circle remove" data-id="{{$item['productInfo']->id}}"></i>
                      </div>
                    </th>
                  </tr>
                  @endforeach
                </table> --}}

              </div>
              {{-- close cart-item  --}}
              {{-- open cart-caption --}}
              <div class="cart-caption">
                <div class="cart-total text-right">Tổng tiền: <span
                    class="cart-total-value"> đ</span></div>
                    {{-- {{number_format(Session::get('Cart')->totalPrice)}} --}}
                <div class="clearfix"></div>
                {{-- @endif --}}
              </div>
              {{-- close cart-caption  --}}
              <div class="center">
                <div class="space10">&nbsp;</div>
                <a href="" class="beta-btn primary text-center">Đặt hàng <i
                    class="fa fa-chevron-right"></i></a>
                    {{-- {{URL::to('/thanh-toan')}} --}}
              </div>
            </div>

          </div>
        </li>
      </ul>
    </div> <!-- finish nav-icon class-->
  </header>