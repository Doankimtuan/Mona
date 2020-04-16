@extends('welcome')
@section('introduce')
    


 
 <!-- /* --------------------- SECTION-1 -------------------- */ -->
    <section class="section-1">
        <div>
            <h1>GIỚI THIỆU</h1>
            <div class="title-content">
                <a href="#">TRANG CHỦ</a>
                <span>/</span>
                Giới thiệu
            </div>
        </div>
    </section>
    <!-- /* --------------------- SECTION-2 -------------------- */ -->
    <section class="section-2">
        <div class="text">
            <div class="text-1">
                <h2 class="text-h2">MONA MEDIA</h1>
                    <p style="text-align: center; font-size: 120%;">Lorem ipsum dolor sit amet, consectetuer adipiscing
                        <br> elit, sed diam nonummy nibh.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-1-of-3">
                <div class="row-1">
                    <div class="image">
                        <img class="size-img" src="{{('/source/img/banner34.jpg')}}" alt="Dau">
                    </div>
                    <div class="text-image">
                        <h3>New Features</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                            tincidunt.
                        </p>
                    </div>
                </div>

                <div class="row-1">
                    <div class="image">
                        <img class="size-img" src="{{('/source/img/banner34.jpg')}}" alt="Nho">
                    </div>
                    <div class="text-image">
                        <h3>Responsive</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                            tincidunt.
                        </p>
                    </div>
                </div>

            </div>

            <div class="col-2-of-3">
                <div class="row-2">
                    <img class="ly" src="{{('/source/img/banner34.jpg')}}" alt="ly-trai-cay">
                </div>

            </div>

            <div class="col-1-of-3">
                <div class="row-1">
                    <div class="image">
                        <img class="size-img" src="{{('/source/img/banner34.jpg')}}" alt="Cam">
                    </div>
                    <div class="text-image">
                        <h3>Unlimited Options</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                            tincidunt.
                        </p>
                    </div>
                </div>

                <div class="row-1">
                    <div class="image">
                        <img class="size-img" src="{{('/source/img/banner34.jpg')}}" alt="Occho">
                    </div>
                    <div class="text-image">
                        <h3>Customize Anything</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                            tincidunt.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
   

    @endsection