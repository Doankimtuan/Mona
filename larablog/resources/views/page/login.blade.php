

<div class="form-popup" id="formLogin">
    <form action="{{route('login')}}" method="post" class="form">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <div class="login-regis">
        <h2>Đăng Nhập</h2>
        <a href="#" id="register">Đăng ký</a>
      </div>
      <div class="input-group form-group">
        <input type="email" id="email" class="form-control" name="email" required autofocus>
        <label for="email">Nhập địa chỉ Email</label>
      </div>

      <div class="input-group">
        <input type="password" name="password" required>
        <label for="password">Nhập mật khẩu</label>
        <!-- dieu huong dau nhay cho the input -->
      </div>
      <button type="submit">Đăng Nhập</button>
      <div class="social_login">
        <i class="fab fa-facebook-square"></i>
        <i class="fab fa-google-plus-square" style="width: 20px"></i>
      </div>
      <p>Bạn quên mật khẩu?<a href="#">Quên mật khẩu</a></p>
    </form>

  </div>