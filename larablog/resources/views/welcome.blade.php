<!-- 
                    Author Name     : Doan Kim Tuan
                    Author Email    : Doantuan21101999@hmail.com 
                 -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mona</title>

    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/1fa75c7674.js" crossorigin="anonymous"></script>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <!-- Owl Carousel -->'
    <link rel="stylesheet" href="{{asset('/source/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('/source/css/owl.theme.default.min.css')}}">

    <!--  Custom style -->
    <link rel="stylesheet" href="{{asset('/source/css/stylessss.css')}}">
    <link rel="stylesheet" href="{{asset('/source/css/introduces.css')}}">
    <link rel="stylesheet" href="{{asset('/source/css/knowledges.css')}}">
    <link rel="stylesheet" href="{{asset('/source/css/checkout.css')}}">
    <link rel="stylesheet" href="{{asset('/source/css/Store.css')}}">
    <link rel="stylesheet" href="{{asset('/source/css/productDetails.css')}}">
    <link rel="stylesheet" href="{{asset('/source/css/contactx.css')}}">


    <!-- Jquery -->
    <script src="{{asset('/source/js/jquery-350.min.js')}}"></script>
    <!-- owl carousel js -->
    <script src="{{asset('/source/js/owl.carousel.min.js')}}"></script>

    <style>
        #beta-dropdown {
            display: none;
        }
        .lala:hover #beta-dropdown .center{
            display: block;
        }

        .lala:hover #beta-dropdown {
            display: block;
        }

        .cart-item {
            padding: 5px 0
        }

        .cart-item .media {
            width: 100%;
        }

        .section-detail .row .row-1 img {
            width: 90%
        }

        .socail_login i {
            width: 20px;
            height: auto;
        }

        .pagination li{
            display: inline-block;
            padding: 1rem;
            font-size: 1rem;
        }
    </style>

</head>

<body>

    <!-- ---------------------------------Navigation------------------------------ -->
    <header id="navbar" class="flex-row">
        <div class="logo">
            <a href="{{URL::to('/home')}}"><img src="{{('/source/img/logo-new.png')}}" alt="MonaLogo"></a>
            {{-- {{URL::to('/trang-chu')}} --}}
        </div>
        <nav>
            <ul class="nav-items">
                <li class="nav-link"><a class="home" href="{{URL::to('/home')}}">trang chủ</a></li>
                {{-- {{URL::to('/trang-chu')}} --}}
                <li class="nav-link"><a href="{{URL::to('/gioi-thieu')}}">giới thiệu</a></li>
                {{-- {{URL::to('/gioi-thieu')}} --}}
                <li class="nav-link">
                    <a href="{{URL::to('/cua-hang')}}">cửa hàng</a>
                    {{-- {{URL::to('/cua-hang')}} --}}
                </li>
                <li class="nav-link"><a href="{{URL::to('/kien-thuc')}}">kiến thức</a></li>
                {{-- {{URL::to('/kien-thuc')}} --}}
                <li class="nav-link"><a href="{{URL::to('/lien-lac')}}">liên hệ</a></li>
            </ul>
        </nav>

        <div class="nav-icon">
            <!-- open nav-icon class-->
            <ul>
                <li style="display: inline-block;"><i class="fas fa-search" id="search"></i></li>

                @guest
                <li style="display: inline-block;">
                    <a href="{{ route('login') }}"><i class="fas fa-user" id="user"></i></a>
                </li>
                @else
                <li style="display: inline-block;">
                    <a href="#"><i class="fas fa-user" id="user">
                            <div style="padding-left:5px; display:inline-block">{{ Auth::user()->name }} </div>
                        </i></a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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
                            @if(Session::has("Cart") != null) 
                            {{-- open cart-item --}}
                            <div class="cart-item">
                                <table style="width: 100%">
                                    @foreach (Session::get('Cart')->products as $item)
                                    <tr>
                                        <th>
                                            <div class="media">
                                                <a class="pull-left" href="#"><img
                                                        src="{{URL::to('/source/img/'.$item['productInfo']->image)}}"
                                                        alt="" style="display: inline-block"></a>
                                                <div class="media-body">
                                                    <span class="cart-item-title">{{$item['productInfo']->name}}</span>
                                                    <span class="cart-item-amount">{{$item['qty']}}*<span>{{number_format($item['productInfo']->price)}}
                                                            đ</span></span>
                                                </div>
                                                <i class="far fa-times-circle remove"
                                                    data-id="{{$item['productInfo']->id}}"></i>
                                            </div>
                                        </th>
                                    </tr>
                                    @endforeach
                                </table>

                            </div>
                            {{-- close cart-item  --}}
                            {{-- open cart-caption --}}
                            <div class="cart-caption">
                                <div class="cart-total text-right">Tổng tiền: <span
                                        class="cart-total-value">{{number_format(Session::get('Cart')->totalPrice)}}
                                        đ</span></div>

                                <div class="clearfix"></div>
                                @endif
                            </div>
                            {{-- close cart-caption  --}}
                            @if(Auth::check())
                            <div class="center">
                                <div class="space10">&nbsp;</div>
                                <a href="{{route('dathang')}}" class="beta-btn primary text-center">Đặt hàng <i
                                        class="fa fa-chevron-right"></i></a>
                                {{-- {{URL::to('/thanh-toan')}} --}}
                            </div>
                            @else
                            <div class="center">
                                <div class="space10">&nbsp;</div>
                                <a href="{{route('login')}}" class="beta-btn primary text-center">Đặt hàng <i
                                        class="fa fa-chevron-right"></i></a>
                                {{-- {{URL::to('/thanh-toan')}} --}}
                            </div>
                            @endif
                        </div>
                        
                    </div>
                </li>
            </ul>
        </div> <!-- finish nav-icon class-->
    </header>
    

    @yield('content')
    @yield('introduce')
    @yield('store')
    @yield('knowledge')
    @yield('productDetail')
    @yield('checkout')
    @yield('contact')
   
    @include('page.search')

    <!-- Footter -->



    @include('page.footer')







    



    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!-- Custom js -->
    
    <script src="{{asset('/source/js/product.js')}}"></script>
    <script src="{{asset('/source/js/main.js')}}"></script>

    <script>
        $('#change-item-cart table tr th .media').on("click", ".remove", function () {
            url = 'Delete-Item-Cart/' + $(this).data('id');
            axios.get(url).then(function (res) {
                renderCart(res);
                alertify.success('Xóa hàng thành công');
            });
        });

        function AddCart(id) {
            url = 'Add-Cart/' + id;
            axios.get(url).then(function (res) {
                renderCart(res);
                alertify.success('Đặt hàng thành công');
            })
        }

        $('#tab-discount').on("click", "#tab-discoun", function (){
            url = 'discount';
            
        })

        function SaveCart() {
            url = 'save-cart';
            axios.get(url).then(function (res) {
                renderCart(res);
                alertify.success('Đặt hàng thành công');
            })
        }

        function renderCart(response) {
            $("#change-item-cart").empty();
            $("#change-item-cart").html(response.data);
        }


        $("form input").keypress(function (e) {
            if ((e.which && e.which == 13) || (e.keyCode && e.keyCode == 13)) {
                $('input[type=submit]').click();
                return false;
            } else {
                return true;
            }
        });
    </script>

</body>