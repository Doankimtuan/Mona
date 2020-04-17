 @extends('welcome')
 @section('productDetail')
 
 <!-- /* --------------------- SECTION-1 -------------------- */ -->
 <section class="section-detail">
    <div class="row">
        <div class="row-1">
            <div style="background-color: white;" class="col-1-of-2">
                <img class="img" src="{{URL::to('/source/img/'.$products->image)}}" alt="">
            </div>
        </div>

        <div class="row-2">
            <div style="background-color: white;" class="col-1-of-2">
                <div class="link">
                    <a href="#">TRANG CHỦ</a>
                    <span>/</span>
                    <a href="#">ĐỒ KHÔ</a>
                </div>
                <h1>{{$products->name}}</h1>
                <h2>{{number_format($products->price)}} &#8363;</h2>
                <p>
                    <strong>Lorem Ipsum</strong>
                    {{$products->description}}
                </p>
            </div>
            <form action="{{URL::to('/save-cart')}}" method="POST" class="number">  
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="number" name="qty" id="qty" value="1" min='1' max='20' style="width: 80px; height:40px; font-size: 30px">
                    <input name="productid_hidden" type="text" value="{{$products->id}}" style="display:none">
                    <input class="add" type="submit" value="THÊM VÀO GIỎ " onclick="SaveCart()" style="color: white;">
            </form>

            {{-- <div class="row-delivery">
                <div class="row-3">
                    <strong>Tính phí ship tự động</strong>
                    <div class="ship">
                        <div class="grid-item"><img src="{{('/source/img/GHN.jpg')}}" alt="GHN" style="width:100px; height:50px"></div>
                        <div class="grid-item"><img src="{{('/source/img/tietkiem.jpg')}}" alt=""style="width:100px; height:50px"></div>
                        <div class="grid-item"><img src="{{('/source/img/ninja.jpg')}}" alt="ninja"style="width:100px; height:50px"></div>
                        <div class="grid-item"><img src="{{('/source/img/shipchung.jpg')}}" alt="chung"style="width:100px; height:50px"></div>
                        <div class="grid-item"><img src="{{('/source/img/viettle.jpg')}}" alt="viettel"style="width:100px; height:50px"></div>
                        <div class="grid-item"><img src="{{('/source/img/logo-vn-post.jpg')}}" alt="vn-post"style="width:100px; height:50px"></div>
                    </div>
                </div>

                <div class="row-4">
                    <strong>Thanh Toán</strong>
                    <div class="ship">
                        <div class="grid-item"><img src="{{('/source/img/logo-acb.jpg')}}" alt="acb"style="width:100px; height:50px"></div>
                        <div class="grid-item"><img src="{{('/source/img/logo-techcombank.jpg')}}"
                                alt="logo-techcombank"style="width:100px; height:50px"></div>
                        <div class="grid-item"><img src="{{('/source/img/logo-vib.jpg')}}" alt="logo-vib"style="width:100px; height:50px"></div>
                        <div class="grid-item"><img src="{{('/source/img/logo-vcb.jpg')}}" alt="logo-vcb"style="width:100px; height:50px"></div>
                        <div class="grid-item"><img src="{{('/source/img/logo-paypal.jpg')}}" alt="logo-paypal"style="width:100px; height:50px"></div>
                        <div class="grid-item"><img src="{{('/source/img/logo-mastercard.jpg')}}" alt="logo-mastercard"style="width:100px; height:50px">
                        </div>
                    </div>
                </div>
            </div> --}}


        </div>
    </div>
</section>
<!-- /* --------------------- SECTION-2 -------------------- */ -->
<section class="section-detail2">
    <div class="review">
        <input class="btn-2" type="submit" value="MÔ TẢ">
        <input class="btn-2" type="submit" value="ĐÁNH GIÁ">
    </div>
    <div>
        <h1>Lorem Ipsum là gì?</h1>
        <p class="text-2">Lorem Ipsum chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc trình bày và dàn
            trang phục vụ cho in ấn. Lorem Ipsum đã được sử dụng như một văn bản chuẩn cho ngành công nghiệp in ấn
            từ những năm 1500, khi một họa sĩ vô danh ghép nhiều đoạn văn bản với nhau để tạo thành một bản mẫu văn
            bản. Đoạn văn bản này không những đã tồn tại năm thế kỉ, mà khi được áp dụng vào tin học văn phòng, nội
            dung của nó vẫn không hề bị thay đổi. Nó đã được phổ biến trong những năm 1960 nhờ việc bán những bản
            giấy Letraset in những đoạn Lorem Ipsum, và gần đây hơn, được sử dụng trong các ứng dụng dàn trang, như
            Aldus PageMaker.</p>
    </div>
    <div>
        <h1>Tại sao lại sử dụng nó?</h1>
        <p>Chúng ta vẫn biết rằng, làm việc với một đoạn văn bản dễ đọc và rõ nghĩa dễ gây rối trí và cản trở việc
            tập trung vào yếu tố trình bày văn bản. Lorem Ipsum có ưu điểm hơn so với đoạn văn bản chỉ gồm nội dung
            kiểu “Nội dung, nội dung, nội dung” là nó khiến văn bản giống thật hơn, bình thường hơn. Nhiều phần mềm
            thiết kế giao diện web và dàn trang ngày nay đã sử dụng Lorem Ipsum làm đoạn văn bản giả, và nếu bạn thử
            tìm các đoạn “Lorem ipsum” trên mạng thì sẽ khám phá ra nhiều trang web hiện vẫn đang trong quá trình
            xây dựng. Có nhiều phiên bản khác nhau đã xuất hiện, đôi khi do vô tình, nhiều khi do cố ý (xen thêm vào
            những câu hài hước hay thông tục).</p>
    </div>

    <div>
        <h1>Nó đến từ đâu?</h1>
        <p>Trái với quan điểm chung của số đông, Lorem Ipsum không phải chỉ là một đoạn văn bản ngẫu nhiên. Người ta
            tìm thấy nguồn gốc của nó từ những tác phẩm văn học la-tinh cổ điển xuất hiện từ năm 45 trước Công
            Nguyên, nghĩa là nó đã có khoảng hơn 2000 tuổi. Một giáo sư của trường Hampden-Sydney College (bang
            Virginia – Mỹ) quan tâm tới một trong những từ la-tinh khó hiểu nhất, “consectetur”, trích từ một đoạn
            của Lorem Ipsum, và đã nghiên cứu tất cả các ứng dụng của từ này trong văn học cổ điển, để từ đó tìm ra
            nguồn gốc không thể chối cãi của Lorem Ipsum. Thật ra, nó được tìm thấy trong các đoạn 1.10.32 và
            1.10.33 của “De Finibus Bonorum et Malorum” (Đỉnh tối thượng của Cái Tốt và Cái Xấu) viết bởi Cicero vào
            năm 45 trước Công Nguyên. Cuốn sách này là một luận thuyết đạo lí rất phổ biến trong thời kì Phục Hưng.
        </p>
    </div>
</section>
<!-- /* --------------------- SECTION-3 -------------------- */ -->
<section class="section-detail3">
    <div>
        <h3>SẢN PHẨM TƯƠNG TỰ</h3>
    </div>
    <div class="row-5">
        <div class="grid-fruit">
            <img src="./resource/img/ot.jpg" alt="ot">
            <a href="#">Ớt</a>
            <h5>180,000 &#8363;</h5>
        </div>
        <div class="grid-fruit">
            <img src="./resource/img/sup-lo.jpg" alt="sup-lo">
            <a href="#">Súp lơ</a>
            <h5>180,000 &#8363;</h5>
        </div>
        <div class="grid-fruit">
            <img src="./resource/img/tao-xanh.jpg" alt="tao-xanh">
            <a href="#">Táo xanh</a>
            <h5>180,000 &#8363;</h5>
        </div>
        <div class="grid-fruit">
            <img src="./resource/img/ca-chua.jpg" alt="ca-chua">
            <a href="#">Cà chua</a>
            <h5>180,000 &#8363;</h5>
        </div>
        <div class="grid-fruit">
            <img src="./resource/img/dao.jpg" alt="dao">
            <a href="#">Đào</a>
            <h5>180,000 &#8363;</h5>
        </div>
    </div>
</section>

@endsection