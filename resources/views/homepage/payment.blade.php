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

<div class="kontainer">
    <div class="form">
        <div class="row">
            <div class="col">
                <h3 class="text-center title">Payment</h3>
                @if($payment)
                @foreach ($payment as $order)
                <div class="labelBox">
                    <span>Code : {{ $order->code }} </span>
                </div>
                <div class="labelBox">
                    <span>Name : {{ $order->name }} </span>
                </div>
                <div class="labelBox">
                    <span>Email : {{ $order->email }} </span>
                </div>
                <div class="labelBox">
                    <span>No Hp : {{ $order->no_hp }} </span>
                </div>
                <div class="labelBox">
                    <span>Date : {{ $order->date }} </span>
                </div>
                <div class="labelBox">
                    <span>Time : {{ $order->time }} </span>
                </div>
                <div class="labelBox">
                    <span>People : {{ $order->people }} </span>
                </div>
                <form action="image" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <button type="button" class="buton">
                            <input type="hidden" name="id" value="{{$order->id}}">
                            <i class="bi bi-image"></i>Upload File
                            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" accept="image/*" onchange="previewImage()">
                        </button>
                    </div>
                    </td>
                    <td>
                        <button class="submit-btn" type="submit">Submit</button>
                </form>
                </td>
                @endforeach
                @else
                <p class="text-center fw-bold">The Code Has Been Sent on Your Email !!!</p>
                @endif
                </tr>

            </div>
        </div>
    </div>
</div>
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