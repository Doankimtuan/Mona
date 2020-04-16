<div class="popup" id="search-popup">
    <div id="close-search"><i class="fas fa-times"></i></div>
    <div class="search_box">
      <form action="{{route('search')}}" method="get">
        <input type="text" name="key" placeholder="Bạn muốn tìm kiếm gì?" onKeyPress="return disableEnterKey(event)">
        <input type="submit">
        <i class="fas fa-search"></i>
      </form>

    </div>
  </div>