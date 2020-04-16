@extends('welcome')
@section('store')
    

    <div class="headfirst">
        <a href="#">
          <p class="first">
          <span class="trangchu">Trang Chủ</span>
          <span>/</span>
          <span class="trangchu">Cửa Hàng</span>
        </p>
        </a>
    </div>
    

  <section class="knowledge">
    <div class="wrapper">
      <div>
        
        <div class="danhmucsp">
          <span>Danh Mục Sản Phẩm</span>
        </div>
        <div class="raucu danhmuc">
          <a href="#">
          <span class="danhmuc">Rau củ</span>
        </a>
        </div>
      
       <div class="raucu">
         <a href="#">
       <span class="danhmuc"> Trái cây</span>
      </a>
      </div>
      
       <div class="raucu">
         <a href="#">
       <span class="danhmuc">Đồ uống</span>
      </a>
      </div>
      
        <div class="raucu">
          <a href="#">
          <span class="danhmuc">Đồ khô</span>
        </a>
        </div>
      
      
      
        

          <div class="danhmucsp">
            <span>Sản Phẩm</span>
          </div>

          <div class="cpntainer">
          <div class="raucu" ; class="danhmuc"; class="item-img">
           <a href="#">
            <img src="https://mauweb.monamedia.net/cleverfood/wp-content/uploads/2019/05/product-9-470x470-100x100.jpg" alt="news">
           </a>
          </div>
            <div class="item-text">
                <span>Nho xanh</span>
                <br>
                <span style="color: #88B92D;">320.000 đ</span>
            </div>
        </div>
        
        <div class="cpntainer">
          <div class="raucu" ; class="danhmuc"; class="item-img">
           <a href="#">
            <img src="https://mauweb.monamedia.net/cleverfood/wp-content/uploads/2019/05/product-24-470x470-100x100.jpg" alt="news">
           </a>
          </div>
            <div class="item-text">
                <span>Đào</span>
                <br>
                <span style="color: #88B92D;">330.000 đ</span>
            </div>
        </div>
        
        
        <div class="cpntainer">
          <div class="raucu" ; class="danhmuc"; class="item-img">
           <a href="#">
            <img src="https://mauweb.monamedia.net/cleverfood/wp-content/uploads/2019/05/product-15-470x470-100x100.jpg" alt="news">
           </a>
          </div>
            <div class="item-text">
                <span>Chanh dây</span>
                <br>
                <span style="color: #88B92D;">190.000 đ</span>
            </div>
        </div>
        
        
        <div class="cpntainer">
          <div class="raucu" ; class="danhmuc"; class="item-img">
           <a href="#">
            <img src="https://mauweb.monamedia.net/cleverfood/wp-content/uploads/2019/05/product-12-470x470-100x100.jpg" alt="news">
           </a>
          </div>
            <div class="item-text">
                <span>Chuối</span>
                <br>
                <span style="color: #88B92D;">150.000 đ</span>
            </div>
        </div>
      
        <div class="cpntainer">
          <div class="raucu" ; class="danhmuc"; class="item-img">
           <a href="#">
            <img src="https://mauweb.monamedia.net/cleverfood/wp-content/uploads/2019/05/product-16-470x470-100x100.jpg" alt="news">
           </a>
          </div>
            <div class="item-text">
                <span>Dưa leo</span>
                <br>
                <span style="color: #88B92D;">150.000 đ</span>
            </div>
        </div>
      
      </div>

     
      <div class="list-news">
        @if($products != null)
        @foreach($products as $prd)
        <div class="item-new">
              <div>
                <a href="{{URL::to('/chi-tiet-san-pham/'.$prd->id)}}"><img class="img-news"
                    src="{{URL::to('public/source/img/'.$prd->image)}}" alt="news">
                </a>
              </div>
            <div class="title-new">
              <a href="#"> {{$prd->name}} </a>
              <p style="color: #88B92D;">{{number_format($prd->price)}} đ</p>
            </div>
        </div>
        @endforeach
        @elseif($products == null)
          <div class="notifi">Không có sản phẩm nào</div>
        @endif
      </div>






      </div>
    </div>

    @endsection