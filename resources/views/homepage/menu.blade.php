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
                    <a href="contact.html" class="btn btn-primary btn-white">
                        planning a party? - book now
                    </a>
                    <a href="tel:0123-456-789" class="btn btn-primary">
                        download our full menu
                    </a>
                </div>
                <div class="tabs-bar text-center">
                    <ul class="nav nav-pills mb-5" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-Brunch-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-Brunch" type="button" role="tab" aria-controls="pills-Brunch"
                                aria-selected="true">Brunch</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-Lunch-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-Lunch" type="button" role="tab" aria-controls="pills-Lunch"
                                aria-selected="false">Lunch Menu</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-Dinner-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-Dinner" type="button" role="tab" aria-controls="pills-Dinner"
                                aria-selected="false">Dinner Menu</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-Kid-tab" data-bs-toggle="pill" data-bs-target="#pills-Kid"
                                type="button" role="tab" aria-controls="pills-Kid" aria-selected="false">Kid's
                                Menu</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-Desserts-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-Desserts" type="button" role="tab"
                                aria-controls="pills-Desserts" aria-selected="false">Desserts</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-Brunch" role="tabpanel"
                            aria-labelledby="pills-Brunch-tab">
                            <!--Brunch menu-->
                            <div class="menubar">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div
                                            class="white-bg border-gray border-1 menu-in text-start pt-4 pe-5 ps-5 pb-4 mb-4">
                                            <h5 class="mb-4 cursive-title primary">Entrees</h5>
                                            <ul class="menu-listing">
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Wood Oven Roasted Chicken</h5>
                                                        <p>Refried beans, rice, grilled chicken, sour cream, salsa verde,
                                                            cheese, pico.</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Wood Oven Roasted Chicken</h5>
                                                        <p>Refried beans, rice, grilled chicken, sour cream, salsa verde,
                                                            cheese, pico.</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Wood Oven Roasted Chicken</h5>
                                                        <p>Refried beans, rice, grilled chicken, sour cream, salsa verde,
                                                            cheese, pico.</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="sky-bg border-gray border-1 menu-in text-start pt-4 pe-5 ps-5 pb-4">
                                            <h5 class="mb-4 cursive-title primary">Organic Pastas</h5>
                                            <ul class="menu-listing">
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Chitarra Aglio e Olio</h5>
                                                        <p>olive oil, garlic, chili, Grana Padano
                                                            (add anchovy 2.00)</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Chitarra al Pomodoro</h5>
                                                        <p>tomatoes, garlic, basil, Grana Padano</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Canestri Cacio e Pepe</h5>
                                                        <p>pecorino, Grana Padano, black pepper</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Bucatini All’ Amatriciana</h5>
                                                        <p>tomato, red onion, guanciale, chili,
                                                            Grana Padano</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Toasted Spaghetti with Clams
                                                            & Shrimp</h5>
                                                        <p>pecorino, Grana Padano, black pepper</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Lasagna Verde Bolognese</h5>
                                                        <p>bechamel, mozzarella, grana padano</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Ricotta Ravioli</h5>
                                                        <p>squash, bread crumbs, sage, balsamic,
                                                            chili oil</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div
                                            class="sky-bg border-gray border-1 menu-in text-start pt-4 pe-5 ps-5 pb-4 mb-4">
                                            <h5 class="mb-4 cursive-title primary">Pizza</h5>
                                            <ul class="menu-listing">
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Pastaria Marinara</h5>
                                                        <p>tomato, onion, garlic, oregano, basil, pecorino (very minimal
                                                            cheese)</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Four Cheese</h5>
                                                        <p>mozzarella, fontina, gorgonzola dolce,
                                                            Grana Padano (no tomato)</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>House-Made American Pepperoni</h5>
                                                        <p>fontina, tomato</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Pizza of the Day</h5>
                                                        <p>Nduja sweet potato purée, burrata, onion,
                                                            garlic, lime, cilantro, brown butter purée</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Salume Beddu Nduja</h5>
                                                        <p>tomato, fior di latte, garlic, oregano, honey</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Pastaria Hawaiian</h5>
                                                        <p>tomato, mozzarella, jalapeno, pineapple,
                                                            house-made Canadian bacon</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div
                                            class="white-bg border-gray border-1 menu-in text-start text-start pt-4 pe-5 ps-5 pb-4">
                                            <h5 class="mb-4 cursive-title primary">Vegetables</h5>
                                            <ul class="menu-listing">
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Roasted Broccoli</h5>
                                                        <p>garlic, chili, lemon</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Roasted Brussels Sprouts</h5>
                                                        <p>lemon, chili</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Cauliflower</h5>
                                                        <p>calabrian chili, pine nut, pickled raisin</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Rainbow Carrots</h5>
                                                        <p>hot honey, chives</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Brunch menu-->
                        </div>
                        <div class="tab-pane fade" id="pills-Lunch" role="tabpanel" aria-labelledby="pills-Lunch-tab">
                            <!--Lunch menu-->
                            <div class="menubar">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div
                                            class="white-bg border-gray border-1 menu-in text-start pt-4 pe-5 ps-5 pb-4 mb-4">
                                            <h5 class="mb-4 cursive-title primary">Entrees</h5>
                                            <ul class="menu-listing">
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Wood Oven Roasted Chicken</h5>
                                                        <p>Refried beans, rice, grilled chicken, sour cream, salsa verde,
                                                            cheese, pico.</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Wood Oven Roasted Chicken</h5>
                                                        <p>Refried beans, rice, grilled chicken, sour cream, salsa verde,
                                                            cheese, pico.</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Wood Oven Roasted Chicken</h5>
                                                        <p>Refried beans, rice, grilled chicken, sour cream, salsa verde,
                                                            cheese, pico.</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="sky-bg border-gray border-1 menu-in text-start pt-4 pe-5 ps-5 pb-4">
                                            <h5 class="mb-4 cursive-title primary">Organic Pastas</h5>
                                            <ul class="menu-listing">
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Chitarra Aglio e Olio</h5>
                                                        <p>olive oil, garlic, chili, Grana Padano
                                                            (add anchovy 2.00)</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Chitarra al Pomodoro</h5>
                                                        <p>tomatoes, garlic, basil, Grana Padano</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Canestri Cacio e Pepe</h5>
                                                        <p>pecorino, Grana Padano, black pepper</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Bucatini All’ Amatriciana</h5>
                                                        <p>tomato, red onion, guanciale, chili,
                                                            Grana Padano</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Toasted Spaghetti with Clams
                                                            & Shrimp</h5>
                                                        <p>pecorino, Grana Padano, black pepper</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Lasagna Verde Bolognese</h5>
                                                        <p>bechamel, mozzarella, grana padano</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Ricotta Ravioli</h5>
                                                        <p>squash, bread crumbs, sage, balsamic,
                                                            chili oil</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div
                                            class="sky-bg border-gray border-1 menu-in text-start pt-4 pe-5 ps-5 pb-4 mb-4">
                                            <h5 class="mb-4 cursive-title primary">Pizza</h5>
                                            <ul class="menu-listing">
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Pastaria Marinara</h5>
                                                        <p>tomato, onion, garlic, oregano, basil, pecorino (very minimal
                                                            cheese)</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Four Cheese</h5>
                                                        <p>mozzarella, fontina, gorgonzola dolce,
                                                            Grana Padano (no tomato)</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>House-Made American Pepperoni</h5>
                                                        <p>fontina, tomato</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Pizza of the Day</h5>
                                                        <p>Nduja sweet potato purée, burrata, onion,
                                                            garlic, lime, cilantro, brown butter purée</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Salume Beddu Nduja</h5>
                                                        <p>tomato, fior di latte, garlic, oregano, honey</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Pastaria Hawaiian</h5>
                                                        <p>tomato, mozzarella, jalapeno, pineapple,
                                                            house-made Canadian bacon</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div
                                            class="white-bg border-gray border-1 menu-in text-start text-start pt-4 pe-5 ps-5 pb-4">
                                            <h5 class="mb-4 cursive-title primary">Vegetables</h5>
                                            <ul class="menu-listing">
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Roasted Broccoli</h5>
                                                        <p>garlic, chili, lemon</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Roasted Brussels Sprouts</h5>
                                                        <p>lemon, chili</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Cauliflower</h5>
                                                        <p>calabrian chili, pine nut, pickled raisin</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Rainbow Carrots</h5>
                                                        <p>hot honey, chives</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Lunch menu-->
                        </div>
                        <div class="tab-pane fade" id="pills-Dinner" role="tabpanel" aria-labelledby="pills-Dinner-tab">
                            <!--Dinner menu-->
                            <div class="menubar">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div
                                            class="white-bg border-gray border-1 menu-in text-start pt-4 pe-5 ps-5 pb-4 mb-4">
                                            <h5 class="mb-4 cursive-title primary">Entrees</h5>
                                            <ul class="menu-listing">
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Wood Oven Roasted Chicken</h5>
                                                        <p>Refried beans, rice, grilled chicken, sour cream, salsa verde,
                                                            cheese, pico.</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Wood Oven Roasted Chicken</h5>
                                                        <p>Refried beans, rice, grilled chicken, sour cream, salsa verde,
                                                            cheese, pico.</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Wood Oven Roasted Chicken</h5>
                                                        <p>Refried beans, rice, grilled chicken, sour cream, salsa verde,
                                                            cheese, pico.</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="sky-bg border-gray border-1 menu-in text-start pt-4 pe-5 ps-5 pb-4">
                                            <h5 class="mb-4 cursive-title primary">Organic Pastas</h5>
                                            <ul class="menu-listing">
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Chitarra Aglio e Olio</h5>
                                                        <p>olive oil, garlic, chili, Grana Padano
                                                            (add anchovy 2.00)</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Chitarra al Pomodoro</h5>
                                                        <p>tomatoes, garlic, basil, Grana Padano</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Canestri Cacio e Pepe</h5>
                                                        <p>pecorino, Grana Padano, black pepper</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Bucatini All’ Amatriciana</h5>
                                                        <p>tomato, red onion, guanciale, chili,
                                                            Grana Padano</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Toasted Spaghetti with Clams
                                                            & Shrimp</h5>
                                                        <p>pecorino, Grana Padano, black pepper</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Lasagna Verde Bolognese</h5>
                                                        <p>bechamel, mozzarella, grana padano</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Ricotta Ravioli</h5>
                                                        <p>squash, bread crumbs, sage, balsamic,
                                                            chili oil</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div
                                            class="sky-bg border-gray border-1 menu-in text-start pt-4 pe-5 ps-5 pb-4 mb-4">
                                            <h5 class="mb-4 cursive-title primary">Pizza</h5>
                                            <ul class="menu-listing">
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Pastaria Marinara</h5>
                                                        <p>tomato, onion, garlic, oregano, basil, pecorino (very minimal
                                                            cheese)</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Four Cheese</h5>
                                                        <p>mozzarella, fontina, gorgonzola dolce,
                                                            Grana Padano (no tomato)</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>House-Made American Pepperoni</h5>
                                                        <p>fontina, tomato</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Pizza of the Day</h5>
                                                        <p>Nduja sweet potato purée, burrata, onion,
                                                            garlic, lime, cilantro, brown butter purée</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Salume Beddu Nduja</h5>
                                                        <p>tomato, fior di latte, garlic, oregano, honey</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Pastaria Hawaiian</h5>
                                                        <p>tomato, mozzarella, jalapeno, pineapple,
                                                            house-made Canadian bacon</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div
                                            class="white-bg border-gray border-1 menu-in text-start text-start pt-4 pe-5 ps-5 pb-4">
                                            <h5 class="mb-4 cursive-title primary">Vegetables</h5>
                                            <ul class="menu-listing">
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Roasted Broccoli</h5>
                                                        <p>garlic, chili, lemon</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Roasted Brussels Sprouts</h5>
                                                        <p>lemon, chili</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Cauliflower</h5>
                                                        <p>calabrian chili, pine nut, pickled raisin</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Rainbow Carrots</h5>
                                                        <p>hot honey, chives</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Dinner menu-->
                        </div>
                        <div class="tab-pane fade" id="pills-Kid" role="tabpanel" aria-labelledby="pills-Kid-tab">
                            <!--Kid menu-->
                            <div class="menubar">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div
                                            class="white-bg border-gray border-1 menu-in text-start pt-4 pe-5 ps-5 pb-4 mb-4">
                                            <h5 class="mb-4 cursive-title primary">Entrees</h5>
                                            <ul class="menu-listing">
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Wood Oven Roasted Chicken</h5>
                                                        <p>Refried beans, rice, grilled chicken, sour cream, salsa verde,
                                                            cheese, pico.</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Wood Oven Roasted Chicken</h5>
                                                        <p>Refried beans, rice, grilled chicken, sour cream, salsa verde,
                                                            cheese, pico.</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Wood Oven Roasted Chicken</h5>
                                                        <p>Refried beans, rice, grilled chicken, sour cream, salsa verde,
                                                            cheese, pico.</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="sky-bg border-gray border-1 menu-in text-start pt-4 pe-5 ps-5 pb-4">
                                            <h5 class="mb-4 cursive-title primary">Organic Pastas</h5>
                                            <ul class="menu-listing">
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Chitarra Aglio e Olio</h5>
                                                        <p>olive oil, garlic, chili, Grana Padano
                                                            (add anchovy 2.00)</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Chitarra al Pomodoro</h5>
                                                        <p>tomatoes, garlic, basil, Grana Padano</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Canestri Cacio e Pepe</h5>
                                                        <p>pecorino, Grana Padano, black pepper</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Bucatini All’ Amatriciana</h5>
                                                        <p>tomato, red onion, guanciale, chili,
                                                            Grana Padano</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Toasted Spaghetti with Clams
                                                            & Shrimp</h5>
                                                        <p>pecorino, Grana Padano, black pepper</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Lasagna Verde Bolognese</h5>
                                                        <p>bechamel, mozzarella, grana padano</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Ricotta Ravioli</h5>
                                                        <p>squash, bread crumbs, sage, balsamic,
                                                            chili oil</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div
                                            class="sky-bg border-gray border-1 menu-in text-start pt-4 pe-5 ps-5 pb-4 mb-4">
                                            <h5 class="mb-4 cursive-title primary">Pizza</h5>
                                            <ul class="menu-listing">
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Pastaria Marinara</h5>
                                                        <p>tomato, onion, garlic, oregano, basil, pecorino (very minimal
                                                            cheese)</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Four Cheese</h5>
                                                        <p>mozzarella, fontina, gorgonzola dolce,
                                                            Grana Padano (no tomato)</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>House-Made American Pepperoni</h5>
                                                        <p>fontina, tomato</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Pizza of the Day</h5>
                                                        <p>Nduja sweet potato purée, burrata, onion,
                                                            garlic, lime, cilantro, brown butter purée</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Salume Beddu Nduja</h5>
                                                        <p>tomato, fior di latte, garlic, oregano, honey</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Pastaria Hawaiian</h5>
                                                        <p>tomato, mozzarella, jalapeno, pineapple,
                                                            house-made Canadian bacon</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div
                                            class="white-bg border-gray border-1 menu-in text-start text-start pt-4 pe-5 ps-5 pb-4">
                                            <h5 class="mb-4 cursive-title primary">Vegetables</h5>
                                            <ul class="menu-listing">
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Roasted Broccoli</h5>
                                                        <p>garlic, chili, lemon</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Roasted Brussels Sprouts</h5>
                                                        <p>lemon, chili</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Cauliflower</h5>
                                                        <p>calabrian chili, pine nut, pickled raisin</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Rainbow Carrots</h5>
                                                        <p>hot honey, chives</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Kid menu-->
                        </div>
                        <div class="tab-pane fade" id="pills-Desserts" role="tabpanel"
                            aria-labelledby="pills-Desserts-tab">
                            <!--Desserts menu-->
                            <div class="menubar">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div
                                            class="white-bg border-gray border-1 menu-in text-start pt-4 pe-5 ps-5 pb-4 mb-4">
                                            <h5 class="mb-4 cursive-title primary">Entrees</h5>
                                            <ul class="menu-listing">
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Wood Oven Roasted Chicken</h5>
                                                        <p>Refried beans, rice, grilled chicken, sour cream, salsa verde,
                                                            cheese, pico.</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Wood Oven Roasted Chicken</h5>
                                                        <p>Refried beans, rice, grilled chicken, sour cream, salsa verde,
                                                            cheese, pico.</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Wood Oven Roasted Chicken</h5>
                                                        <p>Refried beans, rice, grilled chicken, sour cream, salsa verde,
                                                            cheese, pico.</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="sky-bg border-gray border-1 menu-in text-start pt-4 pe-5 ps-5 pb-4">
                                            <h5 class="mb-4 cursive-title primary">Organic Pastas</h5>
                                            <ul class="menu-listing">
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Chitarra Aglio e Olio</h5>
                                                        <p>olive oil, garlic, chili, Grana Padano
                                                            (add anchovy 2.00)</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Chitarra al Pomodoro</h5>
                                                        <p>tomatoes, garlic, basil, Grana Padano</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Canestri Cacio e Pepe</h5>
                                                        <p>pecorino, Grana Padano, black pepper</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Bucatini All’ Amatriciana</h5>
                                                        <p>tomato, red onion, guanciale, chili,
                                                            Grana Padano</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Toasted Spaghetti with Clams
                                                            & Shrimp</h5>
                                                        <p>pecorino, Grana Padano, black pepper</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Lasagna Verde Bolognese</h5>
                                                        <p>bechamel, mozzarella, grana padano</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Ricotta Ravioli</h5>
                                                        <p>squash, bread crumbs, sage, balsamic,
                                                            chili oil</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div
                                            class="sky-bg border-gray border-1 menu-in text-start pt-4 pe-5 ps-5 pb-4 mb-4">
                                            <h5 class="mb-4 cursive-title primary">Pizza</h5>
                                            <ul class="menu-listing">
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Pastaria Marinara</h5>
                                                        <p>tomato, onion, garlic, oregano, basil, pecorino (very minimal
                                                            cheese)</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Four Cheese</h5>
                                                        <p>mozzarella, fontina, gorgonzola dolce,
                                                            Grana Padano (no tomato)</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>House-Made American Pepperoni</h5>
                                                        <p>fontina, tomato</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Pizza of the Day</h5>
                                                        <p>Nduja sweet potato purée, burrata, onion,
                                                            garlic, lime, cilantro, brown butter purée</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Salume Beddu Nduja</h5>
                                                        <p>tomato, fior di latte, garlic, oregano, honey</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Pastaria Hawaiian</h5>
                                                        <p>tomato, mozzarella, jalapeno, pineapple,
                                                            house-made Canadian bacon</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div
                                            class="white-bg border-gray border-1 menu-in text-start text-start pt-4 pe-5 ps-5 pb-4">
                                            <h5 class="mb-4 cursive-title primary">Vegetables</h5>
                                            <ul class="menu-listing">
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Roasted Broccoli</h5>
                                                        <p>garlic, chili, lemon</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Roasted Brussels Sprouts</h5>
                                                        <p>lemon, chili</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Cauliflower</h5>
                                                        <p>calabrian chili, pine nut, pickled raisin</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="leftbar">
                                                        <h5>Rainbow Carrots</h5>
                                                        <p>hot honey, chives</p>
                                                    </div>
                                                    <div class="rightbar d-flex align-items-center">
                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        <h5>$15</h5>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Desserts menu-->
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
                    <h4 class="text-default text-center"><Span class="primary">KITCHEN OPEN</Span>: MON-SAT 12-10PM / SUN
                        12PM-9:30PM</h4>
                </div>
            </div>
        </section>
        <!--Book order primary section ends here-->
        <!--Reservation start here-->
        <section class="Reservation-bar private-dining py-210 parallex">
            <div class="container">
                <h4 class="text-white text-center mb-5 text-uppercase">Make a Reservation</h4>
                <form class="reservation-form needs-validation" novalidate>
                    <div class="row">
                        <div class="col-lg-3 formrow">
                            <input type="date" class="form-control w-100" placeholder="mm/dd/yyyy" required
                                id="date">
                            <!-- <div class="input-group-prepend">
                         <img src="images/calender.png" alt="icon">
                      </div> -->
                        </div>
                        <div class="col-lg-3 formrow">
                            <!-- <input type="time" value="13:00" class="form-control w-100" required placeholder="../../.." id="time" > -->
                            <select type="text" value="13:00" class="form-control" placeholder="../../.." required>
                                <option>10:00</option>
                                <option>10:30</option>
                                <option>11:00</option>
                                <option>11:30</option>
                                <option>12:00</option>
                                <option>12:30</option>
                                <option>01:00</option>
                                <option>01:30</option>
                                <option>02:00</option>
                                <option>02:30</option>
                                <option>03:00</option>
                                <option>03:30</option>
                                <option>04:00</option>
                                <option>04:30</option>
                                <option>05:00</option>
                                <option>05:30</option>
                                <option>06:00</option>
                                <option>06:30</option>
                                <option>07:00</option>
                                <option>07:30</option>
                                <option>08:00</option>
                                <option>08:30</option>
                                <option>09:00</option>
                                <option>09:30</option>
                                <option>10:00</option>
                            </select>
                            <div class="input-group-prepend">
                                <img src="images/clock.png" alt="icon">
                            </div>
                        </div>
                        <div class="col-lg-3 formrow">
                            <div class="arrowadd">
                                <select type="text" class="form-control" required>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                </select>
                            </div>
                            <div class="input-group-prepend">
                                <img src="images/user.png" alt="icon">
                            </div>
                        </div>
                        <div class="col-lg-3 formrow formbtn">
                            <button type="submit" class="btn btn-primary w-100">Book a Table</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!--Reservation ends here-->
        <!--Testimonial start here-->
        <section class="Testimonial-block border-zigzag-up primary-bg py-110 content-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="testimonial-bar text-center">
                                        <i class="text-white fa fa-quote-left" aria-hidden="true"></i>
                                        <p class="reviewbar text-white">The set one creepeth given air behold bring herb so
                                            thing sixth spirit moveth lesser thing air without cattle itself darkness
                                            greater. </p>
                                        <h6 class="review-name text-white font-Av">– Javed Harji</h6>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="testimonial-bar text-center">
                                        <i class="text-white fa fa-quote-left" aria-hidden="true"></i>
                                        <p class="reviewbar text-white">The set one creepeth given air behold bring herb so
                                            thing sixth spirit moveth lesser thing air without cattle itself darkness
                                            greater. </p>
                                        <h6 class="review-name text-white font-Av">– John Deo</h6>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="testimonial-bar text-center">
                                        <i class="text-white fa fa-quote-left" aria-hidden="true"></i>
                                        <p class="reviewbar text-white">The set one creepeth given air behold bring herb so
                                            thing sixth spirit moveth lesser thing air without cattle itself darkness
                                            greater. </p>
                                        <h6 class="review-name text-white font-Av">– Michel Richard</h6>
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

        <!--Keepup-date start here-->
        <section class="Keepup-date py-130">
            <div class="container">
                <h4 class="text-default text-center mb-lg-3">KEEP UP TO DATE WITH Us!</h4>
                <p class="text-gray text-center">Sign up to be the first to receive special news and event updates from
                    Restaurant. </p>
                <form class="keepup-form needs-validation" novalidate>
                    <div class="formrow">
                        <input type="email" class="form-control" required placeholder="Enter Your Email Address">
                        <div class="input-group-append">
                            <button class="btn btn-secondary" type="submit">
                                <img src="images/next.png" alt="next">
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!--Keepup-date ends here-->
    </main>
@endsection
