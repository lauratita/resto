@extends('layouts.main')
@section('container')
    <a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--fade-out" data-bs-abc="true"><i
            class="fa fa-caret-up" aria-hidden="true"></i>
    </a>

    <main>
        <!--banner start here-->
        <section class="home-banner border-zigzag-up">
            <div id="banner-slide" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="item carousel-item active">
                        <img src="images/slide1.webp" alt="Los Angeles" class="img-fluid w-100">
                        <div class="carousel-caption my-auto">
                            <h5 class="font-cursive mb-0 text-start primary">Taste</h5>
                            <h2 class="text-white">Restaurant</h2>
                            <div class="address mb-5">
                                <p class="text-uppercase">Pixel Space Creative</p>
                                <p class="text-uppercase">Telp: 085105120605</p>
                            </div>
                            <div class="banner-btn">
                                <a href="/menu" class="btn btn-outline">View Our Menu</a>
                            </div>
                        </div>
                    </div>
                    <div class="item carousel-item ">
                        <img src="images/slide2.webp" alt="Los Angeles" class="img-fluid w-100">
                        <div class="carousel-caption my-auto">
                            <h5 class="font-cursive mb-0 text-start primary">Taste</h5>
                            <h2 class="text-white">Loved by people</h2>
                            <div class="address mb-5">
                                <p class="text-uppercase">Pixel Space Creative</p>
                                <p class="text-uppercase">Telp: 085105120605</p>
                            </div>
                            <div class="banner-btn">
                                <a href="/menu" class="btn btn-outline">View Our Menu</a>
                            </div>
                        </div>
                    </div>
                    <div class="item carousel-item ">
                        <img src="images/slide3.webp" alt="Los Angeles" class="img-fluid w-100">
                        <div class="carousel-caption my-auto">
                            <h5 class="font-cursive mb-0 text-start primary">Taste</h5>
                            <h2 class="text-white">Loved by people</h2>
                            <div class="address mb-5">
                                <p class="text-uppercase">Pixel Space Creative</p>
                                <p class="text-uppercase">Telp: 085105120605</p>
                            </div>
                            <div class="banner-btn">
                                <a href="/menu" class="btn btn-outline">View Our Menu</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#banner-slide" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#banner-slide" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
        </section>
        <!--banner ends here-->
        <!--our story start here-->
        <section class="py-110 story-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-6">
                                <div class="story-img-bar">
                                    <img src="images/story-img-1.webp" alt="story-img-1">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-6">
                                <div class="story-img-bar mt-5">
                                    <img src="images/story-img-2.webp" alt="story-img-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="story-detail ps-lg-4">
                            <h5 class="font-cursive mb-0 text-start primary">Discover</h5>
                            <h2 class="text-uppercase">Our Story</h2>
                            <p class="font-Av mb-5">Multiply isn't night sixth under second second open he darkness said
                                beast, without whales every herb sea place light life from divide isn't. Deep give greater.
                                Darkness have fifth third open over itself. Third great make form is waters were. Midst
                                green very. </p>
                            <div class="story-btn"><a href="/story" class="btn btn-primary">Read our full Story</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--our story ends here-->
        <!--gallery start here-->
        <section class="gallery-block py-60 primary-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="gallery-bar border border-5">
                            <img src="images/gallery-left-img.webp" alt="img" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <a href="/gallery" class="gallery-content border border-5">
                            <h5 class="font-cursive mb-0">View our</h5>
                            <h2 class="text-white text-uppercase">Gallery</h2>
                            <p>food & Venue</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="gallery-bar border border-5">
                            <img src="images/gallery-ryt-img.webp" alt="img" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--gallery ends here-->
        <!--Testimonial start here-->
        <section class="Testimonial-block py-110">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="testimonial-bar text-center">
                                        <i class="primary fa fa-quote-left" aria-hidden="true"></i>
                                        <p class="reviewbar">The set one creepeth given air behold bring herb so thing
                                            sixth spirit moveth lesser thing air without cattle itself darkness greater.
                                        </p>
                                        <h6 class="review-name primary font-Av">– Javed Harji</h6>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="testimonial-bar text-center">
                                        <i class="primary fa fa-quote-left" aria-hidden="true"></i>
                                        <p class="reviewbar">The set one creepeth given air behold bring herb so thing
                                            sixth spirit moveth lesser thing air without cattle itself darkness greater.
                                        </p>
                                        <h6 class="review-name primary font-Av">– John Deo</h6>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="testimonial-bar text-center">
                                        <i class="primary fa fa-quote-left" aria-hidden="true"></i>
                                        <p class="reviewbar">The set one creepeth given air behold bring herb so thing
                                            sixth spirit moveth lesser thing air without cattle itself darkness greater.
                                        </p>
                                        <h6 class="review-name primary font-Av">– Michel Richard</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial ends here-->
        <!--private dining start here-->

        <section class="private-dining py-180 border-zigzag-up parallex">
            <div class="container text-center">
                <h4 class="text-white">MAKE A RESERVATION</h4>
                <p class="text-white mb-5">YOUR EVENT, YOUR WAY</p>
                <div class="btn-row">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#ModalSearchCode"
                        class="btn btn-primary btn-white">
                        Code Payment</a>
                    <a href="/contact" class="btn btn-primary">
                        Book a Table</a>
                    <!-- Book a Table Modal -->
                    <div class="modal fade" id="ModalSearchCode" tabindex="-1" aria-labelledby="ModalSearchCodeLabel"
                        aria-hidden="true">
                        <div class="modal-dialog  modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ModalSearchCodeLabel">Reedem Code</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="/showOrder" method="POST" class="reservation-form needs-validation">
                                        @csrf
                                        @if (session()->has('failed'))
                                            <div class="alert alert-warning" role="alert">
                                                {{ session('failed') }}
                                            </div>
                                        @endif
                                        <div class="row reservation-form">
                                            <div class="col-lg-12 formrow mb-3">
                                                <input type="text" class="form-control w-100" placeholder="Code Here"
                                                    name="code" required id="date">
                                            </div>
                                            <div class="col-lg-12 formrow mb-3">
                                                <div class="col-lg-12 formrow formbtn">
                                                    <button type="submit" class="btn btn-primary w-100">Reedem
                                                        Code</button>
                                                </div>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Book a Table Modal -->
                </div>
            </div>
        </section>
        <!--private dining ends here-->
        <!--Menu order start here-->
        <section class="order-menu py-110 pb-0" id="order-menu">
            <div class="container">
                <h4 class="text-default text-center mb-lg-4">New Menu</h4>

                <div class="tabs-bar text-center">
                    <ul class="nav nav-pills mb-5" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all"
                                aria-selected="true">All Menu</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-Food-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-Food" type="button" role="tab" aria-controls="pills-Food"
                                aria-selected="false">Food
                                Menu</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-Drink-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-Drink" type="button" role="tab" aria-controls="pills-Drink"
                                aria-selected="false">Drink Menu</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-Dessert-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-Dessert" type="button" role="tab"
                                aria-controls="pills-Dessert" aria-selected="false">Desserts</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-Packages-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-Packages" type="button" role="tab"
                                aria-controls="pills-Packages" aria-selected="false">Packages</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-all" role="tabpanel"
                            aria-labelledby="pills-all-tab">
                            <!--All menu-->
                            <div class="menubar">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div
                                            class="white-bg border-gray border-1 menu-in text-start pt-4 pe-5 ps-5 pb-4 mb-4">
                                            <h5 class="mb-4 cursive-title primary">Food Menu</h5>
                                            <ul class="menu-listing">
                                                @foreach ($menus_food as $menu_food)
                                                    <li class="d-flex align-items-start">
                                                        <div class="leftbar">
                                                            <div class="col-md-2 float-start mt-2 me-3">
                                                                @if ($menu_food->image)
                                                                    <img src="{{ asset('storage/' . $menu_food->image) }}"
                                                                        alt="img-menu" class="img-fluid">
                                                                @else
                                                                    <img src="https://source.unsplash.com/600x400?food"
                                                                        alt="img-menu" class="img-fluid">
                                                                @endif
                                                            </div>
                                                            <div class="col-md-12">
                                                                <h5>{{ $menu_food->title }}</h5>
                                                                <p>{{ $menu_food->description }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="rightbar d-flex align-items-center">
                                                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                            <h5>Rp. {{ $menu_food->price }}</h5>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="sky-bg border-gray border-1 menu-in text-start pt-4 pe-5 ps-5 pb-4">
                                            <h5 class="mb-4 cursive-title primary">Desserts</h5>
                                            <ul class="menu-listing">
                                                @foreach ($menus_dessert as $menu_dessert)
                                                    <li class="d-flex align-items-start">
                                                        <div class="leftbar">
                                                            <div class="col-md-2 float-start mt-2 me-3">
                                                                @if ($menu_dessert->image)
                                                                    <img src="{{ asset('storage/' . $menu_dessert->image) }}"
                                                                        alt="img-menu" class="img-fluid">
                                                                @else
                                                                    <img src="https://source.unsplash.com/600x400?dessert"
                                                                        alt="img-menu" class="img-fluid">
                                                                @endif
                                                            </div>
                                                            <h5>{{ $menu_dessert->title }}</h5>
                                                            <p>{{ $menu_dessert->description }}</p>
                                                        </div>
                                                        <div class="rightbar d-flex align-items-center">
                                                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                            <h5>Rp. {{ $menu_dessert->price }}</h5>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div
                                            class="sky-bg border-gray border-1 menu-in text-start pt-4 pe-5 ps-5 pb-4 mb-4">
                                            <h5 class="mb-4 cursive-title primary">Drink Menu</h5>
                                            <ul class="menu-listing">
                                                @foreach ($menus_drink as $menu_drink)
                                                    <li class="d-flex align-items-start">
                                                        <div class="leftbar">
                                                            <div class="col-md-2 float-start mt-2 me-3">
                                                                @if ($menu_drink->image)
                                                                    <img src="{{ asset('storage/' . $menu_drink->image) }}"
                                                                        alt="img-menu" class="img-fluid">
                                                                @else
                                                                    <img src="https://source.unsplash.com/600x400?drink"
                                                                        alt="img-menu" class="img-fluid">
                                                                @endif
                                                            </div>
                                                            <h5>{{ $menu_drink->title }}</h5>
                                                            <p>{{ $menu_drink->description }}</p>
                                                        </div>
                                                        <div class="rightbar d-flex align-items-center">
                                                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                            <h5>Rp. {{ $menu_drink->price }}</h5>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div
                                            class="white-bg border-gray border-1 menu-in text-start text-start pt-4 pe-5 ps-5 pb-4">
                                            <h5 class="mb-4 cursive-title primary">Packages</h5>
                                            <ul class="menu-listing">
                                                @foreach ($menus_package as $menu_package)
                                                    <li class="d-flex align-items-start">
                                                        <div class="leftbar">
                                                            <div class="col-md-2 float-start mt-2 me-3">
                                                                @if ($menu_package->image)
                                                                    <img src="{{ asset('storage/' . $menu_package->image) }}"
                                                                        alt="img-menu" class="img-fluid">
                                                                @else
                                                                    <img src="https://source.unsplash.com/600x400?food"
                                                                        alt="img-menu" class="img-fluid">
                                                                @endif
                                                            </div>
                                                            <h5>{{ $menu_package->title }}</h5>
                                                            <p>{{ $menu_package->description }}</p>
                                                        </div>
                                                        <div class="rightbar d-flex align-items-center">
                                                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                            <h5>Rp. {{ $menu_package->price }}</h5>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--All menu-->
                        </div>
                        <div class="tab-pane fade show" id="pills-Food" role="tabpanel"
                            aria-labelledby="pills-Food-tab">
                            <!--Food menu-->
                            <div class="menubar">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div
                                            class="white-bg border-gray border-1 menu-in text-start pt-4 pe-5 ps-5 pb-4 mb-4">
                                            <h5 class="mb-4 cursive-title primary">Food Menu</h5>
                                            <ul class="menu-listing">
                                                @foreach ($menus_food as $menu_food)
                                                    <li class="d-flex align-items-start">
                                                        <div class="leftbar">
                                                            <div class="col-md-2 float-start mt-2 me-3">
                                                                @if ($menu_food->image)
                                                                    <img src="{{ asset('storage/' . $menu_food->image) }}"
                                                                        alt="img-menu" class="img-fluid">
                                                                @else
                                                                    <img src="https://source.unsplash.com/600x400?food"
                                                                        alt="img-menu" class="img-fluid">
                                                                @endif
                                                            </div>
                                                            <h5>{{ $menu_food->title }}</h5>
                                                            <p>{{ $menu_food->description }}</p>
                                                        </div>
                                                        <div class="rightbar d-flex align-items-center">
                                                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                            <h5>Rp. {{ $menu_food->price }}</h5>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Food menu-->
                        </div>

                        <div class="tab-pane fade" id="pills-Drink" role="tabpanel" aria-labelledby="pills-Drink-tab">
                            <!--Drink menu-->
                            <div class="menubar">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div
                                            class="sky-bg border-gray border-1 menu-in text-start pt-4 pe-5 ps-5 pb-4 mb-4">
                                            <h5 class="mb-4 cursive-title primary">Drink Menu</h5>
                                            <ul class="menu-listing">
                                                @foreach ($menus_drink as $menu_drink)
                                                    <li class="d-flex align-items-start">
                                                        <div class="leftbar">
                                                            <div class="col-md-2 float-start mt-2 me-3">
                                                                @if ($menu_drink->image)
                                                                    <img src="{{ asset('storage/' . $menu_drink->image) }}"
                                                                        alt="img-menu" class="img-fluid">
                                                                @else
                                                                    <img src="https://source.unsplash.com/600x400?drink"
                                                                        alt="img-menu" class="img-fluid">
                                                                @endif
                                                            </div>
                                                            <h5>{{ $menu_drink->title }}</h5>
                                                            <p>{{ $menu_drink->description }}</p>
                                                        </div>
                                                        <div class="rightbar d-flex align-items-center">
                                                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                            <h5>Rp. {{ $menu_drink->price }}</h5>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Drink menu-->
                        </div>

                        <div class="tab-pane fade" id="pills-Packages" role="tabpanel"
                            aria-labelledby="pills-Packages-tab">
                            <!--Package menu-->
                            <div class="menubar">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="sky-bg border-gray border-1 menu-in text-start pt-4 pe-5 ps-5 pb-4">
                                            <h5 class="mb-4 cursive-title primary">Packages</h5>
                                            <ul class="menu-listing">
                                                @foreach ($menus_package as $menu_package)
                                                    <li class="d-flex align-items-start">
                                                        <div class="leftbar">
                                                            <div class="col-md-2 float-start mt-2 me-3">
                                                                @if ($menu_package->image)
                                                                    <img src="{{ asset('storage/' . $menu_package->image) }}"
                                                                        alt="img-menu" class="img-fluid">
                                                                @else
                                                                    <img src="https://source.unsplash.com/600x400?food"
                                                                        alt="img-menu" class="img-fluid">
                                                                @endif
                                                            </div>
                                                            <h5>{{ $menu_package->title }}</h5>
                                                            <p>{{ $menu_package->description }}</p>
                                                        </div>
                                                        <div class="rightbar d-flex align-items-center">
                                                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                            <h5>Rp. {{ $menu_package->price }}</h5>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Package menu-->
                        </div>

                        <div class="tab-pane fade" id="pills-Dessert" role="tabpanel"
                            aria-labelledby="pills-Dessert-tab">
                            <!--Dessert menu-->
                            <div class="menubar">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div
                                            class="white-bg border-gray border-1 menu-in text-start text-start pt-4 pe-5 ps-5 pb-4">
                                            <h5 class="mb-4 cursive-title primary">Desserts</h5>
                                            <ul class="menu-listing">
                                                @foreach ($menus_dessert as $menu_dessert)
                                                    <li class="d-flex align-items-start">
                                                        <div class="leftbar">
                                                            <div class="col-md-2 float-start mt-2 me-3">
                                                                @if ($menu_dessert->image)
                                                                    <img src="{{ asset('storage/' . $menu_dessert->image) }}"
                                                                        alt="img-menu" class="img-fluid">
                                                                @else
                                                                    <img src="https://source.unsplash.com/600x400?dessert"
                                                                        alt="img-menu" class="img-fluid">
                                                                @endif
                                                            </div>
                                                            <h5>{{ $menu_dessert->title }}</h5>
                                                            <p>{{ $menu_dessert->description }}</p>
                                                        </div>
                                                        <div class="rightbar d-flex align-items-center">
                                                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                            <h5>Rp. {{ $menu_dessert->price }}</h5>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Dessert menu-->
                        </div>
                    </div>
                </div>
                <div class="btn-row my-5">

                    <a href="/menu" class="btn2 btn-primary2" target="_blank">
                        See all menu
                    </a>
                </div>
            </div>
        </section>
        <!--Menu order ends here-->

        <!--Press-News start here-->
        <section class="Press-news py-50">
            <div class="container">
                <h4 class="text-default text-center mb-lg-4">Press + News</h4>
                <div class="row mt-5">
                    @foreach ($blogs as $blog)
                        <div class="col-lg-4 press-news-box border-end text-center">
                            <h5 class="text-uppercase"><a href="news_detail/{{ $blog->slug }}">{{ $blog->title }}</a>
                            </h5>
                            <h6 class="primary text-uppercase">By: {{ $blog->creator }}</h6>
                            <p class="news-description">{!! $blog->excerpt !!}</p>
                            <div class="readmore"><a class="primary" href="news_detail/{{ $blog->slug }}">read
                                    more</a></div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!--Press-News ends here-->

    </main>
@endsection
