@extends('layouts.main')
@section('container')
<a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--fade-out" data-bs-abc="true"><i class="fa fa-caret-up" aria-hidden="true"></i>
</a>

<!--Inner banner start here-->
<section class="banner-inner border-zigzag-up" style="background-image: url('/images/news-bg.webp');">
            <div class="container">
                <h2 class="banner-title text-uppercase text-center text-white">Payment</h2>
            </div>
        </section>
        <!--Inner banner start here-->

<div class="container d-flex justify-content-center p-5 mt-5" style="">
    <div class="row">
        <div class="col-12">
            <h3 class="text-center">Payment</h3>
            <div class="card" style="min-width: 900px;">
                <div class="card-body"  style="background-color: salmon;">
                    @foreach ($payment as $order)
                    <h5>{{ $order->name }}</h5>
                    <h5>{{ $order->email }}</h5>
                    <h5>{{ $order->no_hp }}</h5>
                    <h5>{{ $order->date }}</h5>
                    <h5>{{ $order->time }}</h5>
                    <h5>{{ $order->people }}</h5>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>



@endsection