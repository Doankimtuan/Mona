@extends('welcome')
@section('contact')



<section class="section-contact">

  <div class="wapper">
    <div class="img-wapper article">
      <div class="thumb">
        <div class="overlay"></div>
        <p>Liên Hệ</p>
        <p>/</p>
      </div>
    </div>
  </div>

  <div class="containt-contact" style="padding-left: 50px; position: relative;  display: flex;">

    <div id="map" style="width: 500px; height: 500px;">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!
          1d3723.8977453149246!2d105.83245751424809!3d21.036777085994046!
          2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!
          1s0x3135aba15ec15d17%3A0x620e85c2cfe14d4c!2zTMSDbmcgSOG7kyBDaMOtIE1pbmg!
          5e0!3m2!1svi!2sus!4v1501056274257" width="600" height="450" frameborder="0" style="border: 0;"
        allowfullscreen></iframe>
    </div>

    <div style="left: 20%; position: absolute;">
      <div class="cha">
        <img width="150" height="150" src="{{URL::to('/source/img/gau.png')}}" style="margin-left: 50%;" alt="news">
        <div class="bo">
          <form action="">
            <input type="text" placeholder="Liên hệ">
            <input type="text" placeholder="Email">

            <input type="text" placeholder="Số điện thoại" >

            <input type="text" placeholder="Địa chỉ" >

            <input type="text" placeholder="Lời nhắn">

            <button type="submit" class="send">Gửi</button>

          </form>


        </div>
      </div>
    </div>

  </div>

</section>

@endsection