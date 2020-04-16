<div class="register-popup" id="formRegister">

    <form action="{{route('register')}}" method="post" class="form">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      @if(count($errors)>0)
      <div class="alert alert-danger">
        @foreach ($errors->all() as $err)
            {{$err}}
        @endforeach
      </div>
    @endif
    @if(Session::has('thanhcong'))
      <div class="alert alert-success">{{Session::get('thanhcong')}}</div>
    @endif
      <div class="login-regis">
        <h2>Đăng Ký</h2>
        <a href="#" id="login">Đăng Nhập</a>
      </div>
      <div class="input-group">
        <input type="text" name="email" required>
        <label for="email">Nhập địa chỉ Email</label>
      </div>

      <div class="input-group">
        <input type="password" name="password" required>
        <label for="password">Nhập mật khẩu</label>
        <!-- dieu huong dau nhay cho the input -->
      </div>

      <div class="input-group">
        <input type="password" name="re_password" required>
        <label for="re_password">Nhập lại mật khẩu</label>
        <!-- dieu huong dau nhay cho the input -->
      </div>
      <div class="input-group">
        <input type="text" name="name" required>
        <label for="name">Nhập Họ Và Tên</label>
        <!-- dieu huong dau nhay cho the input -->
      </div>
      <div class="input-group">
        <input type="text" name="phone_number" required>
        <label for="phone_number">Nhập số điện thoại</label>
        <!-- dieu huong dau nhay cho the input -->
      </div>
      <div class="input-group">
        <input type="text" name="address" required>
        <label for="address">Nhập số ddiaj chi</label>
        <!-- dieu huong dau nhay cho the input -->
      </div>
      <button type="submit">Đăng Ký</button>
    </form>
  </div>