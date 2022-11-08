@extends('dashboard.layouts.main')
@section('container')
    <div class="all-wrapper solid-bg-all">
        <div class="layout-w">
            @include('dashboard.partials.sidebar')
            <div class="content-w">
                @include('dashboard.partials.navbar')
                <div class="content-panel-toggler"><i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span>
                </div>
                <div class="content-i">
                    <div class="content-box">

                        @if (session()->has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="element-wrapper">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">

                                <li class="nav-item" role="presentation">
                                    <button style="outline: 0; border: none;" class="nav-link active" id="galleryData"
                                        data-bs-toggle="tab" data-bs-target="#gallery-table-pane" type="button"
                                        role="tab" aria-controls="gallery-table-pane" aria-selected="true">Gallery
                                        Table</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button style="outline: 0; border: none;" class="nav-link text-primary border border-primary " id="createGallery"
                                        data-bs-toggle="tab" data-bs-target="#create-tab-pane" type="button" role="tab"
                                        aria-controls="create-tab-pane" aria-selected="false">Create gallery</button>
                                </li>
                            </ul>

                            <div class="tab-content" id="myTabContent">
                                
                                <div class="tab-pane fade show active" id="gallery-table-pane" role="tabpanel"
                                    aria-labelledby="galleryData" tabindex="0">
                                    <div class="element-box">
                                        <h5 class="form-header">Gallery data</h5>

                                        <div class="table-responsive">
                                            <table id="dataTable1" width="100%"
                                                class="table table-striped table-lightfont">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Image</th>
                                                        <th>Title</th>
                                                        <th>Description</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Image</th>
                                                        <th>Title</th>
                                                        <th>Description</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>

                                                    @foreach ($galleries as $gallery)
                                                        {{-- modal edit --}}
                                                        <div aria-hidden="true" aria-labelledby="exampleModalLabel"
                                                            class="modal fade" id="editModal{{ $gallery->id }}"
                                                            role="dialog" tabindex="-1">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                                            Edit
                                                                            Gallery</h5>
                                                                        <button aria-label="Close" class="close"
                                                                            data-dismiss="modal" type="button"><span
                                                                                aria-hidden="true"> &times;</span></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form action="/admin/gallery/{{ $gallery->id }}"
                                                                            method="POST" enctype="multipart/form-data">
                                                                            @method('put')
                                                                            @csrf
                                                                            <div class="form-group">
                                                                                <label for="">
                                                                                    Title</label><input
                                                                                    class="form-control"
                                                                                    placeholder="Enter email"
                                                                                    name="title" type="text"
                                                                                    value="{{ $gallery->title }}" required
                                                                                    minlength="3" />
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label> Description</label>
                                                                                <textarea name="description" class="form-control" rows="3" placeholder="Description..." required
                                                                                    minlength="3">{{ old('description', $gallery->description) }}</textarea>

                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="image"
                                                                                    class="form-label">Image</label>
                                                                                <input type="hidden" name="oldImage"
                                                                                    value="{{ $gallery->image }}">
                                                                                @if ($gallery->image)
                                                                                    <img src="{{ asset($gallery->image) }}"
                                                                                        class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                                                                @else
                                                                                    <img
                                                                                        class="img-preview img-fluid mb-3 col-sm-5">
                                                                                @endif
                                                                                <input class="form-control" type="file"
                                                                                    id="image" name="image"
                                                                                    onchange="previewImage()">
                                                                                <small>*Max: 5000kb</small>
                                                                            </div>

                                                                            <div class="modal-footer"><button
                                                                                    class="btn btn-secondary"
                                                                                    data-dismiss="modal"
                                                                                    type="button">Close</button><button
                                                                                    class="btn btn-primary"
                                                                                    type="submit">Save
                                                                                    changes</button></div>
                                                                    </div>
                                                                </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        {{-- modal show detail --}}
                                                        <div aria-hidden="true" aria-labelledby="exampleModalLabel"
                                                            class="modal fade" id="showDetail{{ $gallery->id }}"
                                                            role="dialog" tabindex="-1">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                                            Detail
                                                                            Gallery</h5>
                                                                        <button aria-label="Close" class="close"
                                                                            data-dismiss="modal" type="button"><span
                                                                                aria-hidden="true"> &times;</span></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="row">
                                                                            <div class="col-4">
                                                                                <div class="card">
                                                                                    <img src="{{ asset('storage/' . $gallery->image) }}"
                                                                                        class="card-img"
                                                                                        style="max-width: 500px;"
                                                                                        alt="...">

                                                                                    <h5 class="mt-2">
                                                                                        {{ $gallery->title }}</h5><br>
                                                                                    <p class="p-0 m-0">
                                                                                        {{ $gallery->description }}</p>
                                                                                    {{-- <p class="card-text"><small>Last updated 3 mins ago</small></p> --}}
                                                                                    []
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <tr>
                                                            <td>{{ $gallery->id }}</td>
                                                            <td>
                                                                <img width="50px"
                                                                    src="{{ asset('storage/' . $gallery->image) }}"
                                                                    alt="">
                                                            </td>
                                                            <td>{{ $gallery->title }}</td>
                                                            <td>{{ $gallery->description }}</td>
                                                            <td class="row-actions">
                                                                {{-- Button modal --}}
                                                                <a href=""
                                                                    data-target="#editModal{{ $gallery->id }}"
                                                                    data-toggle="modal">
                                                                    <i class="os-icon os-icon-ui-49 editModal"
                                                                        style="color: blue"></i>
                                                                </a>
                                                                <a href="#"
                                                                    data-target="#showDetail{{ $gallery->id }}"
                                                                    data-toggle="modal"><i class="os-icon os-icon-grid-10"
                                                                        style="color: green"></i></a>
                                                                <form class="d-inline"
                                                                    action="/admin/gallery/{{ $gallery->id }}"
                                                                    method="post">
                                                                    @method('delete')
                                                                    @csrf
                                                                    <button type="submit"
                                                                        style="background: none; margin-left: -10px; color:rgb(167, 0, 0)"
                                                                        class="border border-0 "
                                                                        onclick="return confirm('Are you sure?')"><i
                                                                            class="os-icon os-icon-ui-15"></i></button>
                                                                </form>

                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            <div class="tab-pane fade  " id="create-tab-pane" role="tabpanel"
                                    aria-labelledby="createGallery" tabindex="0">
                                    <div class="element-box">
                                        <h5 class="form-header">Create Gallery</h5>
                                        <form action="/admin/gallery" method="POST" class="mb-5"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="element-box">
                                                <div class="form-group">
                                                    <label for=""> Title</label>
                                                    <input name="title"
                                                        class="form-control @error('title') is-invalid @enderror"
                                                        placeholder="Title..." type="text" autofocus required
                                                        value="{{ old('title') }}" />
                                                    @error('title')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label> Description</label>
                                                    <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="3"
                                                        placeholder="Description..." required>{{ old('description') }}</textarea>
                                                    @error('description')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="image" class="form-label">Upload image</label>
                                                    <img class="img-preview img-fluid mb-3 col-sm-3">
                                                    <input class="form-control @error('image') is-invalid @enderror" required
                                                        type="file" id="image" name="image" accept="image/*"
                                                        onchange="previewImage()">
                                                    @error('image')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                                <div class="form-buttons-w"><button class="btn btn-primary"
                                                        type="submit">Save</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="display-type"></div>

    <script>
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

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
