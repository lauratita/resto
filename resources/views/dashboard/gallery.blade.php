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
                        <div class="element-wrapper">
                            <h6 class="element-header">Gallery</h6>
                            @if (session()->has('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif

                            {{-- Form Create --}}
                            <form action="/admin/gallery" method="POST" class="mb-5" enctype="multipart/form-data">
                                @csrf
                                <div class="element-box">
                                    <div class="form-group">
                                        <label for=""> Title</label>
                                        <input name="title" class="form-control @error('title') is-invalid @enderror"
                                            placeholder="Title..." type="text" autofocus value="{{ old('title') }}" />
                                        @error('title')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label> Description</label>
                                        <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="3"
                                            placeholder="Description...">{{ old('description') }}</textarea>
                                        @error('description')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="image" class="form-label">Upload image</label>
                                        <img class="img-preview img-fluid mb-3 col-sm-3">
                                        <input class="form-control @error('image') is-invalid @enderror" type="file"
                                            id="image" name="image" accept="image/*" onchange="previewImage()">
                                        @error('image')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-buttons-w"><button class="btn btn-primary" type="submit">Save</button>
                                    </div>
                                </div>
                            </form>
                            {{-- End Form --}}
                            <div class="element-box">
                                <h5 class="form-header">Data Table</h5>
                                
                                <div class="table-responsive">
                                    <table id="dataTable1" width="100%" class="table table-striped table-lightfont">
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
                                                    class="modal fade" id="editModal{{ $gallery->id }}" role="dialog"
                                                    tabindex="-1">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Edit
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
                                                                            Title</label><input class="form-control"
                                                                            placeholder="Enter email" name="title"
                                                                            type="text" value="{{ $gallery->title }}"
                                                                            required minlength="3" />
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label> Description</label>
                                                                        <textarea name="description" class="form-control" rows="3" placeholder="Description..." required minlength="3">{{ old('description', $gallery->description) }}</textarea>

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
                                                                            class="btn btn-secondary" data-dismiss="modal"
                                                                            type="button">Close</button><button
                                                                            class="btn btn-primary" type="submit">Save
                                                                            changes</button></div>
                                                            </div>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                {{-- modal show detail --}}
                                                <div aria-hidden="true" aria-labelledby="exampleModalLabel"
                                                    class="modal fade" id="showDetail{{ $gallery->id }}" role="dialog"
                                                    tabindex="-1">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Detail
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
                                                                                class="card-img" style="max-width: 500px;"
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
                                                        <a href="" data-target="#editModal{{ $gallery->id }}"
                                                            data-toggle="modal">
                                                            <i class="os-icon os-icon-ui-49 editModal"></i>
                                                        </a>
                                                        <a href="#" data-target="#showDetail{{ $gallery->id }}"
                                                            data-toggle="modal"><i
                                                                class="os-icon os-icon-grid-10"></i></a>
                                                        <form class="d-inline"
                                                            action="/admin/gallery/{{ $gallery->id }}" method="post">
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
                        <div class="floated-colors-btn second-floated-btn">
                            <div class="os-toggler-w">
                                <div class="os-toggler-i">
                                    <div class="os-toggler-pill"></div>
                                </div>
                            </div>
                            <span>Dark </span><span>Colors</span>
                        </div>
                        <div class="floated-customizer-btn third-floated-btn">
                            <div class="icon-w"><i class="os-icon os-icon-ui-46"></i></div>
                            <span>Customizer</span>
                        </div>
                        <div class="floated-customizer-panel">
                            <div class="fcp-content">
                                <div class="close-customizer-btn"><i class="os-icon os-icon-x"></i></div>
                                <div class="fcp-group">
                                    <div class="fcp-group-header">Menu Settings</div>
                                    <div class="fcp-group-contents">
                                        <div class="fcp-field">
                                            <label for="">Menu Position</label><select
                                                class="menu-position-selector">
                                                <option value="left">Left</option>
                                                <option value="right">Right</option>
                                                <option value="top">Top</option>
                                            </select>
                                        </div>
                                        <div class="fcp-field">
                                            <label for="">Menu Style</label><select class="menu-layout-selector">
                                                <option value="compact">Compact</option>
                                                <option value="full">Full</option>
                                                <option value="mini">Mini</option>
                                            </select>
                                        </div>
                                        <div class="fcp-field with-image-selector-w">
                                            <label for="">With Image</label><select class="with-image-selector">
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                        <div class="fcp-field">
                                            <label for="">Menu Color</label>
                                            <div class="fcp-colors menu-color-selector">
                                                <div class="color-selector menu-color-selector color-bright selected">
                                                </div>
                                                <div class="color-selector menu-color-selector color-dark"></div>
                                                <div class="color-selector menu-color-selector color-light"></div>
                                                <div class="color-selector menu-color-selector color-transparent"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fcp-group">
                                    <div class="fcp-group-header">Sub Menu</div>
                                    <div class="fcp-group-contents">
                                        <div class="fcp-field">
                                            <label for="">Sub Menu Style</label><select
                                                class="sub-menu-style-selector">
                                                <option value="flyout">Flyout</option>
                                                <option value="inside">Inside/Click</option>
                                                <option value="over">Over</option>
                                            </select>
                                        </div>
                                        <div class="fcp-field">
                                            <label for="">Sub Menu Color</label>
                                            <div class="fcp-colors">
                                                <div class="color-selector sub-menu-color-selector color-bright selected">
                                                </div>
                                                <div class="color-selector sub-menu-color-selector color-dark"></div>
                                                <div class="color-selector sub-menu-color-selector color-light"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fcp-group">
                                    <div class="fcp-group-header">Other Settings</div>
                                    <div class="fcp-group-contents">
                                        <div class="fcp-field">
                                            <label for="">Full Screen?</label><select
                                                class="full-screen-selector">
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                        <div class="fcp-field">
                                            <label for="">Show Top Bar</label><select
                                                class="top-bar-visibility-selector">
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                        <div class="fcp-field">
                                            <label for="">Above Menu?</label><select
                                                class="top-bar-above-menu-selector">
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                        <div class="fcp-field">
                                            <label for="">Top Bar Color</label>
                                            <div class="fcp-colors">
                                                <div class="color-selector top-bar-color-selector color-bright selected">
                                                </div>
                                                <div class="color-selector top-bar-color-selector color-dark"></div>
                                                <div class="color-selector top-bar-color-selector color-light"></div>
                                                <div class="color-selector top-bar-color-selector color-transparent"></div>
                                            </div>
                                        </div>
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
