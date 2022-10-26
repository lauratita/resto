@extends('layouts.main')
@section('container')
    <a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--fade-out" data-bs-abc="true"><i
            class="fa fa-caret-up" aria-hidden="true"></i>
    </a>
    <!--theme option color scheme
                <div class="theme-option">
                   <button class="btnclick btn-change btn">
                      <i class="fa fa-cog" aria-hidden="true"></i>
                   </button>
                   <div class="theme-color-scheme">
                      <div class="tiltebar">
                         <h4 class="titlein">Theme Color Setting</h4>
                         <button class="btnclick btn-cross"><i class="fa fa-times" aria-hidden="true"></i></button>
                      </div>
                      <ul class="theme-color-scheme-in">
                         <li><button class="Darkmode-btn">Darkmode</button></li>
                         <li><button class="Lightmode-btn">Lightmode</button></li>
                         <li><button class="Fortnight-btn">Fortnight</button></li>
                      </ul>
                      <div class="reset"><button class=" btn resetin">Reset Settings</button></div>
                   </div>
                </div>theme option color scheme-->
    <main>
        <!--Inner banner start here-->
        <section class="banner-inner border-zigzag-up" style="background-image: url('images/story-bg.webp');">
            <div class="container">
                <h2 class="banner-title text-uppercase text-center text-white">Our Menu</h2>
            </div>
        </section>
        <!--Inner banner start here-->
        <!--Menu order start here-->
        <section class="order-menu py-110 pb-0" id="order-menu">
            <div class="container">
                <div class="btn-row mb-5">
                    <a href="/contact" class="btn btn-primary btn-white">
                        planning a party? - book now
                    </a>
                    <a href="/menu/cetak_pdf" class="btn btn-primary" target="_blank">
                        download our full menu
                    </a>
                </div>
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
                                aria-selected="false">Food Menu</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-Drink-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-Drink" type="button" role="tab" aria-controls="pills-Drink"
                                aria-selected="false">Drink Menu</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-Dessert-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-Dessert" type="button" role="tab" aria-controls="pills-Dessert"
                                aria-selected="false">Desserts</button>
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
                                                            <div style="width: 50px">
                                                                <img src="{{ asset('storage/' . $menu_food->image) }}"
                                                                    alt="" class="img-fluid mt-3 d-block">
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
                                        <div class="sky-bg border-gray border-1 menu-in text-start pt-4 pe-5 ps-5 pb-4">
                                            <h5 class="mb-4 cursive-title primary">Desserts</h5>
                                            <ul class="menu-listing">
                                                @foreach ($menus_dessert as $menu_dessert)
                                                    <li class="d-flex align-items-start">
                                                        <div class="leftbar">
                                                            <div style="width: 50px">
                                                                <img src="{{ asset('storage/' . $menu_dessert->image) }}"
                                                                    alt="" class="img-fluid mt-3 d-block">
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
                                                            <div style="width: 50px">
                                                                <img src="{{ asset('storage/' . $menu_drink->image) }}"
                                                                    alt="" class="img-fluid mt-3 d-block">
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
                                                            <div style="width: 50px">
                                                                <img src="{{ asset('storage/' . $menu_package->image) }}"
                                                                    alt="" class="img-fluid mt-3 d-block">
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
                                                            <div style="width: 50px">
                                                                <img src="{{ asset('storage/' . $menu_food->image) }}"
                                                                    alt="" class="img-fluid mt-3 d-block">
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
                                                            <div style="width: 50px">
                                                                <img src="{{ asset('storage/' . $menu_drink->image) }}"
                                                                    alt="" class="img-fluid mt-3 d-block">
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
                                                            <div style="width: 50px">
                                                                <img src="{{ asset('storage/' . $menu_package->image) }}"
                                                                    alt="" class="img-fluid mt-3 d-block">
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
                                                            <div style="width: 50px">
                                                                <img src="{{ asset('storage/' . $menu_dessert->image) }}"
                                                                    alt="" class="img-fluid mt-3 d-block">
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
            </div>
        </section>
        <!--Menu order ends here-->

        <!--Book order primary section start here-->
        <section class="book-order-bar pt-5 py-110">
            <div class="container">
                <div class="titlebar">
                </div>
            </div>
        </section>
        <!--Book order primary section ends here-->
    </main>
@endsection
