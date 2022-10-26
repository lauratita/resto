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

@if($payment)
<div class="kontainer">
    <form action="image" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        @foreach ($payment as $order)
        <div class="row">
            <h4 class="text-center">Payment</h4>
            <div class="col" style="margin-left: 100px">
                <div class="labelBox">
                    <span>Code :</span>
                    <span> {{ $order->code }} </span>
                </div>
                <div class="labelBox">
                    <span>Name :</span>
                    <span> {{ $order->name }} </span>
                </div>
                <div class="labelBox">
                    <span>Email :</span>
                    <span> {{ $order->email }} </span>
                </div>
                <div class="labelBox">
                    <span>No Hp :</span>
                    <span> {{ $order->no_hp }} </span>
                </div>

            </div>
            <div class="col" style="margin-right: 100px">
                <div class="labelBox">
                    <span>Card Accepted :</span>
                    <img src="/images/card_img.png">
                </div>
                <div class="labelBox">
                    <span>Date :</span>
                    <span> {{ $order->date }} </span>
                </div>
                <div class="labelBox">
                    <span>Time :</span>
                    <span> {{ $order->time }} </span>
                </div>
                <div class="labelBox">
                    <span>People :</span>
                    <span> {{ $order->people }} </span>
                </div>
            </div>

        </div>
        <div class="form-group">
            <button type="button" class="buton">
                <input type="hidden" name="id" value="{{$order->id}}">
                <i class="bi bi-image"></i>Upload Payment
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" accept="image/*" onchange="previewImage()">
            </button>
        </div>
        <input type="submit" value="Submit" class="submit-btn">
        @endforeach

    </form>
</div>
@else
<div class="container bg-info rounded-pill p-4 mb-3">
    <div class="row">
        <div class="col-md-12 justify-content-center ">
            <p class="text-center fw-bold">The Code Has Been Sent on Your Email !!!</p>
        </div>
    </div>
</div>
@endif
<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
        fetch('/admin/blogs/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
@endsection