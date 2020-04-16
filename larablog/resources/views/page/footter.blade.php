  <!-- /* --------------------- SECTION-3 -------------------- */ -->
  <section class="section-3">
    <div class="container">
      <div class="text-3">
        <h1>Đăng ký để nhận cập nhật</h1>
        <p>Để lại email để không bỏ lỡ bất kì ưu đãi nào</p>
      </div>
      <div class="text-enter">
        <input class="enter" type="text" placeholder="Email...">
        <button>Đăng Ký</button>
      </div>
    </div>
  </section>
  <!-- /* --------------------- SECTION-4 -------------------- */ -->
  <section class="section footer">
    <div class="row-second">
      <div class="col-1-of-4">
        <a href="#"><img class="logo-footer" src="{{('public/source/img/logo-new.png')}}" alt="Logo"></a>
        <div class="icon-footer">
          <ul>
            <li><i class="fas fa-map-marker-alt"></i> 319 C16 Lý Thường Kiệt, Phường 15, Quận 11,<br>Tp.HCM</li>
            <li><i class="fas fa-phone-square-alt"></i><a href="#" style="text-decoration: none;">076 922 0162</a></li>
            <li><i class="fas fa-envelope-open-text"></i><a href="#" style="text-decoration: none;">mon@mona.media</a>
            </li>
            <li><i class="fab fa-skype"></i><a href="#" style="text-decoration: none;">demonhunterp</a></li>
          </ul>
        </div>
      </div>

      <div class="col-1-of-4">
        <h3>MENU</h3>
        <div class="link">
          <ul>
            <li class="footer-link"><a href="#" style="text-decoration: none;">Trang Chủ</a></li>
            <li class="footer-link"><a href="#" style="text-decoration: none;">Giới thiệu</a></li>
            <li class="footer-link"><a href="#" style="text-decoration: none;">Cửa hàng</a></li>
            <li class="footer-link"><a href="#" style="text-decoration: none;">Kiến thức</a></li>
            <li class="footer-link"><a href="#" style="text-decoration: none;">Liên hệ</a></li>
          </ul>
        </div>
      </div>

      <div class="col-1-of-4">
        <h3>SẢN PHẨM</h3>
        <div class="link">
          <ul>
            <li class="footer-link"><a href="#" style="text-decoration: none;" ;>Rau củ</a></li>
            <li class="footer-link"><a href="#" style="text-decoration: none;" ;>Trái Cây</a></li>
            <li class="footer-link"><a href="#" style="text-decoration: none;" ;>Đồ Uống</a></li>
            <li class="footer-link"><a href="#" style="text-decoration: none;" ;>Đồ Khô</a></li>
          </ul>
        </div>
      </div>

      <div class="col-1-of-4">
        <h3>INSTAGRAM</h3>
      </div>
    </div>
  </section>

   <!-- owl carousel js -->
   <script src="{{asset('public/source/js/owl.carousel.min.js')}}"></script>



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
   <script src="{{asset('public/source/js/mains.js')}}"></script>
   <script src="{{asset('public/source/js/product.js')}}"></script>
 
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