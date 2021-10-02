@extends('layouts.frontenduser')
@section('title') Side User @endsection
@section('content')
    <section class="banner">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{URL::asset('userpanel/images/banner1.jpg')}}">
                    <div class="banner-text">
                        <h1>Fashion Lorrem</h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{URL::asset('userpanel/images/banner2.jpg')}}">
                    <div class="banner-text">
                        <h1>Fashion Lorrem</h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{URL::asset('userpanel/images/banner3.jpg')}}">
                    <div class="banner-text">
                        <h1>Fashion Lorrem</h1>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section class="collection" id="collection">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-12 col-lg-7">
                    <div class="collection-img1">
                        <img src="{{URL::asset('userpanel/images/collection1.jpg')}}">
                    </div>
                    <div class="collection-text">
                        <h3>Hot Colletion</h3>
                        <h1>New Trend For Women</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, iste placeat nisi expedita
                            alias molestiae provident nobis! Mollitia ex enim quis eius eos repellendus, vitae, ratione,
                            odit sunt quas cumque?</p>
                        <button>Shop Now</button>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-5">
                    <div class="collection-img2">
                        <img src="{{URL::asset('userpanel/images/collection2.jpg')}}">
                    </div>
                    <div class="collection-img2">
                        <img src="{{URL::asset('userpanel/images/collection3.jpg')}}">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <hr>
    </div>
    <section class="featured" id="featured">
        <div class="container">
            <div class="featured-text">
                <h2>Featured Items</h2>
                <p><span>All</span> Men Women Kids</p>
            </div>
            <div class="featured-boxs">
                <div class="row">
                    {{-- @foreach ($products as $product)
                    <div class="col-sm-6 col-md-4 col-lg-3 featured-box">
                        <div class="featured-box-img">
                            <img src="{{ asset('images/product/' . $product->product_picture)}}">
                        </div>
                        <div class="featured-box-text">
                            <div class="d-flex justify-content-between">
                                <h2>{{$product->product_name}}</h2>
                                <h3><i class="fas fa-dollar-sign"></i>{{$product->price}}</h3>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span><i class="fas fa-star"></i></span>
                                </p>
                                <a href="">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach --}}
                    <div class="col-sm-6 col-md-4 col-lg-3 featured-box">
                        <div class="featured-box-img">
                            <img src="{{URL::asset('userpanel/images/featured1.jpg')}}">
                        </div>
                        <div class="featured-box-text">
                            <div class="d-flex justify-content-between">
                                <h2>t shirt</h2>
                                <h3><i class="fas fa-dollar-sign"></i>16.5</h3>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span><i class="fas fa-star"></i></span>
                                </p>
                                <a href="">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 featured-box">
                        <div class="featured-box-img">
                            <img src="{{URL::asset('userpanel/images/featured1.jpg')}}">
                        </div>
                        <div class="featured-box-text">
                            <div class="d-flex justify-content-between">
                                <h2>t shirt</h2>
                                <h3><i class="fas fa-dollar-sign"></i>16.5</h3>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span><i class="fas fa-star"></i></span>
                                </p>
                                <a href="">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 featured-box">
                        <div class="featured-box-img">
                            <img src="{{URL::asset('userpanel/images/featured1.jpg')}}">
                        </div>
                        <div class="featured-box-text">
                            <div class="d-flex justify-content-between">
                                <h2>t shirt</h2>
                                <h3><i class="fas fa-dollar-sign"></i>16.5</h3>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span><i class="fas fa-star"></i></span>
                                </p>
                                <a href="">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 featured-box">
                        <div class="featured-box-img">
                            <img src="{{URL::asset('userpanel/images/featured1.jpg')}}">
                        </div>
                        <div class="featured-box-text">
                            <div class="d-flex justify-content-between">
                                <h2>t shirt</h2>
                                <h3><i class="fas fa-dollar-sign"></i>16.5</h3>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span><i class="fas fa-star"></i></span>
                                </p>
                                <a href="">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 featured-box">
                        <div class="featured-box-img">
                            <img src="{{URL::asset('userpanel/images/featured1.jpg')}}">
                        </div>
                        <div class="featured-box-text">
                            <div class="d-flex justify-content-between">
                                <h2>t shirt</h2>
                                <h3><i class="fas fa-dollar-sign"></i>16.5</h3>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span><i class="fas fa-star"></i></span>
                                </p>
                                <a href="">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 featured-box">
                        <div class="featured-box-img">
                            <img src="{{URL::asset('userpanel/images/featured1.jpg')}}">
                        </div>
                        <div class="featured-box-text">
                            <div class="d-flex justify-content-between">
                                <h2>t shirt</h2>
                                <h3><i class="fas fa-dollar-sign"></i>16.5</h3>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span><i class="fas fa-star"></i></span>
                                </p>
                                <a href="">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 featured-box">
                        <div class="featured-box-img">
                            <img src="{{URL::asset('userpanel/images/featured1.jpg')}}">
                        </div>
                        <div class="featured-box-text">
                            <div class="d-flex justify-content-between">
                                <h2>t shirt</h2>
                                <h3><i class="fas fa-dollar-sign"></i>16.5</h3>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span><i class="fas fa-star"></i></span>
                                </p>
                                <a href="">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 featured-box">
                        <div class="featured-box-img">
                            <img src="{{URL::asset('userpanel/images/featured1.jpg')}}">
                        </div>
                        <div class="featured-box-text">
                            <div class="d-flex justify-content-between">
                                <h2>t shirt</h2>
                                <h3><i class="fas fa-dollar-sign"></i>16.5</h3>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span><i class="fas fa-star"></i></span>
                                </p>
                                <a href="">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="chehare">
        <div class="row">
            <div class="chehare-img img1 col-sm-12 col-lg-6">
                <div class="chehare-img-text">
                    <h2><span>70% off</span></h2>
                    <h3><span>Tao kinben Na?</span></h3>
                </div>
            </div>
            <div class="chehare-img img2 col-sm-12 col-lg-6">
                <div class="chehare-img-text">
                    <p>AMR CHEHARA KHARAP NA</p>
                    <h2><span>Chehaer </span>Dia Ki hoy</h2>
                </div>
            </div>
        </div>
    </section>


    <div class="container">
        <hr>
    </div>
    <section class="trending">
        <div class="container">
            <div class="trending-text">
                <h2>Trending Item</h2>
            </div>
            <div class="trending-boxs">
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-3 trending-box">
                        <div class="trending-box-img">
                            <img src="{{URL::asset('userpanel/images/trending1.jpg')}}">
                        </div>
                        <div class="trending-box-text">
                            <div class="d-flex justify-content-between">
                                <h2>Dress</h2>
                                <h3><i class="fas fa-dollar-sign"></i>155.0</h3>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span><i class="fas fa-star"></i></span>
                                </p>
                                <a href="">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 trending-box">
                        <div class="trending-box-img">
                            <img src="{{URL::asset('userpanel/images/trending2.jpg')}}">
                        </div>
                        <div class="trending-box-text">
                            <div class="d-flex justify-content-between">
                                <h2>T-shirt</h2>
                                <h3><i class="fas fa-dollar-sign"></i>99.0</h3>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span><i class="fas fa-star"></i></span>
                                </p>
                                <a href="">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 trending-box">
                        <div class="trending-box-img">
                            <img src="{{URL::asset('userpanel/images/trending3.jpg')}}">
                        </div>
                        <div class="trending-box-text">
                            <div class="d-flex justify-content-between">
                                <h2>Jeans</h2>
                                <h3><i class="fas fa-dollar-sign"></i>230</h3>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span><i class="fas fa-star"></i></span>
                                </p>
                                <a href="">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 trending-box">
                        <div class="trending-box-img">
                            <img src="{{URL::asset('userpanel/images/trending4.jpg')}}">
                        </div>
                        <div class="trending-box-text">
                            <div class="d-flex justify-content-between">
                                <h2>Trouser</h2>
                                <h3><i class="fas fa-dollar-sign"></i>169.5</h3>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span><i class="fas fa-star"></i></span>
                                </p>
                                <a href="">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 trending-box">
                        <div class="trending-box-img">
                            <img src="{{URL::asset('userpanel/images/trending5.jpg')}}">
                        </div>
                        <div class="trending-box-text">
                            <div class="d-flex justify-content-between">
                                <h2>T-shirt</h2>
                                <h3><i class="fas fa-dollar-sign"></i>89.0</h3>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span><i class="fas fa-star"></i></span>
                                </p>
                                <a href="">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 trending-box">
                        <div class="trending-box-img">
                            <img src="{{URL::asset('userpanel/images/trending6.jpg')}}">
                        </div>
                        <div class="trending-box-text">
                            <div class="d-flex justify-content-between">
                                <h2>Jacket</h2>
                                <h3><i class="fas fa-dollar-sign"></i>160</h3>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span><i class="fas fa-star"></i></span>
                                </p>
                                <a href="">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 trending-box">
                        <div class="trending-box-img">
                            <img src="{{URL::asset('userpanel/images/trending7.jpg')}}">
                        </div>
                        <div class="trending-box-text">
                            <div class="d-flex justify-content-between">
                                <h2>Short</h2>
                                <h3><i class="fas fa-dollar-sign"></i>100</h3>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span><i class="fas fa-star"></i></span>
                                </p>
                                <a href="">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 trending-box">
                        <div class="trending-box-img">
                            <img src="{{URL::asset('userpanel/images/trending8.jpeg')}}">
                        </div>
                        <div class="trending-box-text">
                            <div class="d-flex justify-content-between">
                                <h2>T-shirt</h2>
                                <h3><i class="fas fa-dollar-sign"></i>55.99</h3>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span><i class="fas fa-star"></i></span>
                                </p>
                                <a href="">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="trending-btn">
                <button>LOAD MORE</button>
            </div>
        </div>
    </section>
    <section class="textimg">
        <div class="row">
            <div class="textimg-img col-12">
                <div class="textimg-text">
                    <p>"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit nostrum porro beatae
                        consequuntur molestiae. Doloribus id ea qui dolorum ullam!"</p>
                </div>
            </div>
        </div>
    </section>
    <section class="latest">
        <div class="container">
            <div class="latest-blog">
                <h2>Latest Blog</h2>
            </div>
            <div class="row justify-content-between">
                <div class="latest-box col-sm-12 col-md-6 col-lg-4">
                    <div class="latest-box-img">
                        <img src="{{URL::asset('userpanel/images/latest1.jpg')}}">
                    </div>
                    <div class="latest-box-text">
                        <h2>Some Headline Here</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus, ipsum, voluptate unde at
                            minus excepturi deleniti adipisci, exercitationem explicabo sed voluptatibus illo</p>
                        <button>READ MORE</button>
                    </div>
                </div>
                <div class="latest-box col-sm-12 col-md-6 col-lg-4">
                    <div class="latest-box-img">
                        <img src="{{URL::asset('userpanel/images/latest2.jpg')}}">
                    </div>
                    <div class="latest-box-text">
                        <h2>Some Headline Here</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus, ipsum, voluptate unde at
                            minus excepturi deleniti adipisci, exercitationem explicabo sed voluptatibus illo</p>
                        <button>READ MORE</button>
                    </div>
                </div>
                <div class="latest-box col-sm-12 col-md-6 col-lg-4">
                    <div class="latest-box-img">
                        <img src="{{URL::asset('userpanel/images/latest3.jpg')}}">
                    </div>
                    <div class="latest-box-text">
                        <h2>Some Headline Here</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus, ipsum, voluptate unde at
                            minus excepturi deleniti adipisci, exercitationem explicabo sed voluptatibus illo</p>
                        <button>READ MORE</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
