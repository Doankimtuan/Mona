@extends('welcome')

@section('content')
<section class="section">
    <div class="carousel-container">
      <!-- 1468*650 -->
      <div class="carousel-slide fade" style="display:block">
        <div class="roư">

          <div class="carousel-content">
            <h4 class="green">Content</h4>
            <h2>100% tự nhiên</h2>
            <p>Giảm giá khi đặt mua ngay hôm nay</p>
            <a href="#" class="btn">mua ngay</a>
          </div>

          <div class="carousel-img">
            <img src="{{('/source/img/occho.png')}}" alt="slide1">
          </div>
        </div>
        <img src="{{('/source/img/slider26.jpg')}}" alt="SLide background 1">
      </div>

      <div class="carousel-slide fade">
        <div class="roư">
          <div class="carousel-content">
            <h4 class="green">Content</h4>
            <h2>100% tự nhiên</h2>
            <p>Giảm giá khi đặt mua ngay hôm nay</p>
            <a href="#" class="btn">mua ngay</a>
          </div>
          <div class="carousel-img">
            <img src="{{('/source/img/occho.png')}}" alt="slide1">
          </div>
        </div>
        <img src="{{('/source/img/slider28.jpg')}}" alt="SLide background 2">
      </div>


      <button class="prevBtn" onclick="plusSlide(-1)"><i class="fas fa-chevron-left"></i></button>
      <button class="nextBtn" onclick="plusSlide(1)"><i class="fas fa-chevron-right"></i></button>
    </div>
  </section>

  <!-- ----------------X----------------slide--------------------X--------- -->

  <!-- ---------------------------------Banner------------------------------ -->
  <section class="section">
    <div class="banner">
      <div class="wrapper">
        <div class="banner-img">
          <div>
            <a href="#"><img src="{{('/source/img/banner36.jpg')}}" alt="banner-1"></a>
          </div>
        </div>
        <div class="banner-img">
          <div>
            <a href="#"><img src="{{('/source/img/banner35.jpg')}}" alt="banner-2"></a>
          </div>
        </div>
        <div class="banner-img">
          <div>
            <a href="#"><img src="{{('/source/img/banner34.jpg')}}" alt="banner-3"></a>
          </div>
        </div>
        <div class="banner-img">
          <div>
            <a href="#"><img src="{{('/source/img/banner28.jpg')}}" alt="banner-4"></a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- ---------------X----------------Banner--------------------X--------- -->

  <!-- ---------------------------------Featured products------------------------------ -->
  <section class="section featured-products">
    <div class="products-content">
      <h1 class="text-center">Sản phẩm nổi bật</h1>
      <div class="table-content">
        <ul class="nav-content">
          <li><a href="#tab-new" id="new">mới nhất</a></li>
          <li><a href="#tab-discount" id="discount">giảm giá</a></li>
          <li><a href="#tab-selling" id="selling">bán chạy</a></li>
        </ul>

        <div class="product" id="tab-new">

          @foreach ($products as $prd)
          <div class="product-details">
            <div class="product-img">
              <div>
                <a href="{{URL::to('/chi-tiet-san-pham/'.$prd->id)}}" class="img-re">
                  <img src="{{URL::to('/source/img/'.$prd->image)}}" alt="new product">
                </a>
              <div class="shopping-cart-icon"><a onclick="AddCart({{$prd->id}})" href="javascrip:"><i class="fas fa-shopping-cart"></i></a></div>
              </div>
            </div>
            <div class="product-name">
              <a href="#">{{$prd->name}}</a>
            </div>
            <div class="product-prices">
              <span>{{number_format($prd->price)}}</span>
              <span>đ</span>
            </div>
          </div>
          @endforeach
          
        </div>

        <div class="product" id="tab-discount">

          <div class="product-details">
            <div class="product-img">
              <div>
                <a href="#"><img src="{{('/source/img/product-12-470x470.jpg')}}" alt="new product 1"></a>
              </div>
              <div class="shopping-cart-icon"><i class="fas fa-shopping-cart"></i></div>
            </div>
            <div class="product-name">
              <a href="#">Chanh leo</a>
            </div>
            <div class="product-prices">
              <span>190,000</span>
              <span>đ</span>
            </div>
          </div>

        </div>

        <div class="product" id="tab-selling">

          <div class="product-details">
            <div class="product-img">
              <div>
                <a href="#"><img src="{{('/source/img/product-21-470x470.jpg')}}" alt="new product 1"></a>
              </div>
              <div class="shopping-cart-icon"><i class="fas fa-shopping-cart"></i></div>
            </div>
            <div class="product-name">
              <a href="#">Chanh leo</a>
            </div>
            <div class="product-prices">
              <span>190,000</span>
              <span>đ</span>
            </div>
          </div>

        </div>
      </div>
    </div>

  </section>

  <!-- ----------------X----------------Featured products---------X-------------------- -->

  <!-- ---------------------------------Promotion------------------------------ -->

  <section class="section promotion">
    <div class="promotion-content">
      <div class="container-content">
        <h1 class="main-content">Khuyến Mãi Trong Tuần</h1>
        <p class="sub-content">Cơ hội để gia đình bạn sở hữu những sản phẩm ưu đãi</p>
        <div class="time-promotion">
          <span>0
            <strong>Giờ</strong>
          </span>
          <span>0
            <strong>Phút</strong>
          </span>
          <span>0
            <strong>Giây</strong>
          </span>
        </div>
      </div>
    </div>
  </section>

  <!-- ----------------X----------------Promotion---------X-------------------- -->

  <!-- ---------------------------------Product Promotion------------------------------ -->
  <section class="section product-promotion">
    <div class="container">
      <div class="owl-carousel">

        @foreach ($products as $prd)
        <div class="product-details">
          <div class="product-img">
            <div>
              <a href="{{URL::to('/chi-tiet-san-pham/'.$prd->id)}}" class="img-re">
                <img src="{{URL::to('/source/img/chanh.jpg')}}" alt="new product">
              </a>
            <div class="shopping-cart-icon"><a onclick="AddCart({{$prd->id}})" href="javascrip:"><i class="fas fa-shopping-cart"></i></a></div>
            </div>
          </div>
          <div class="product-name">
            <a href="#">{{$prd->name}}</a>
          </div>
          <div class="product-prices">
            <span>{{number_format($prd->price)}}</span>
            <span>đ</span>
          </div>
        </div>
        @endforeach

        <div class="owl-navigation">
          <span class="owl-nav-prev"><i class="fas fa-chevron-left"></i></span>
          <span class="owl-nav-next"><i class="fas fa-chevron-right"></i></span>
        </div>
      </div>
    </div>
  </section>
  <!-- ----------------X----------------Product Promotion-------------X---------------- -->

  <!-- ------------------------------------advertisement--------------------------- -->
  <section class="section advertisement">
    <div class="advertisement-wrap">
      <div class="maketing1">
        <a href="#"><img src="{{('/source/img/banner29.jpg')}}" alt="banner-29"></a>
      </div>
      <div class="marketing2">
        <a href="#"><img src="{{('/source/img/banner30.jpg')}}" alt="banner-30"></a>
        <a href="#"></a>
      </div>
      <div class="marketing3">
        <a href="#"><img src="{{('/source/img/banner31.jpg')}}" alt="banner-31"></a>
        <a href="#"><img src="{{('/source/img/banner32.jpg')}}" alt="banner-32"></a>
        <a href="#"><img src="{{('/source/img/banner33.jpg')}}" alt="banner-33"></a>
      </div>
    </div>
  </section>

  <!-- ----------------X----------------advertisement--------------X--------------- -->

     <!-- ---------------------------------supplier------------------------------ -->
     <section class="section supplier">
        <div class="container">
          <div class="owl-carousel">
            <div class="item"><a href="#"><img src="{{('/source/img/brand1.png')}}" alt="supplier1"></a></div>
            <div class="item"><a href="#"><img src="{{('/source/img/brand2.png')}}" alt="supplier2"></a></div>
            <div class="item"><a href="#"><img src="{{('/source/img/brand3.png')}}" alt="supplier3"></a></div>
            <div class="item"><a href="#"><img src="{{('/source/img/brand5.png')}}" alt="supplier4"></a></div>
            <div class="item"><a href="#"><img src="{{('/source/img/brand1.png')}}" alt="supplier5"></a></div>
            <div class="item"><a href="#"><img src="{{('/source/img/brand2.png')}}" alt="supplier6"></a></div>
            <div class="item"><a href="#"><img src="{{('/source/img/brand3.png')}}" alt="supplier7"></a></div>
          </div>
        </div>
      </section>
    
      <!-- ----------------X----------------supplier--------------X--------------- -->
      <div class="chen"></div>
@endsection
