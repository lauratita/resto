@extends('layouts.main')
@section('container')
<a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--fade-out" data-bs-abc="true"><i class="fa fa-caret-up" aria-hidden="true"></i>
</a>
<main>

    <!--Inner banner start here-->
    <section class="banner-inner border-zigzag-up" style="background-image: url('images/contact-bg.webp');">
        <div class="container">
            <h2 class="banner-title text-uppercase text-center text-white">Contact</h2>
        </div>
    </section>
    <!--Inner banner start here-->
    <!--News bar start here-->
    <section class="contactus py-80 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="contact-map">
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=E-91,%20First%20Floor%20Industrial%20Area,%20Phase%208%20%20Mohali,%20Punjab&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="contact-detail">
                        <h4 class="mb-5 text-uppercase text-default">WE ARE LOCATED IN THE HEART OF India.</h4>
                        <ul>
                            <li class="mb-4">
                                <h6 class="text-uppercase">Address</h6>
                                <a href="#">E-91, First Floor <br>Industrial Area, Phase 8 <br>Mohali, Punjab</a>
                            </li>
                            <li class="mb-4">
                                <h6 class="text-uppercase">Contact</h6>
                                <a class="text-uppercase" href="tel:01622 222 222">01622 222 222</a>
                            </li>
                            <li class="mb-4">
                                <h6 class="text-uppercase">Email</h6>
                                <a class="text-uppercase" href="mailto:info@restuarant.com">info@restuarant.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact form-->
    <section class="contactformbar py-110">
        <div class="container">
            <h4 class="text-default text-center mb-2 text-uppercase">Looking to have an event?</h4>
            <p class="text-gray text-center mb-5">Fill out this form below and we'll get right back to you!</p>
            @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
            @endif
            <div class="contact-form">
                <form action="/create/order" method="POST" class="formreply">
                    @csrf
                    <input type="hidden" name="status" value="1">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <input type="text" required class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <input type="email" required class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <input minlength="10" required type="number" class="form-control" id="no_hp" name="no_hp" aria-describedby="emailHelp" placeholder="No. Hp">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <input type="number" minlength="1" maxlength="2" required class="form-control" id="people" name="people" aria-describedby="emailHelp" placeholder="People">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <input type="number" required class="form-control" id="time" name="time" placeholder="Time">
                                <p class="p-0 m-0"><small>*Max 3hour</small></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <input type="date" required class="form-control" id="tanggal" name="date" placeholder="Date">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3 ">
                                <textarea class="form-control" id="message" name="message" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-0 text-center btnsubmit">
                                <button type="submit" class="btn btn-primary">Order Now</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--News bar ends here-->
    <!--Keepup-date start here-->
    <section class="Keepup-date py-130 gray-bg">
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