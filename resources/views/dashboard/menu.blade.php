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
                            <h6 class="element-header">List Menu</h6>
                            @if (session()->has('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <div class="element-box">
                                <form action="/admin/menu" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="title"> Title</label>
                                        <input class="form-control @error('title') is-invalid @enderror" id="title"
                                            name="title" placeholder="Title..." type="text" autofocus
                                            value="{{ old('title') }}" />
                                        @error('title')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="price"> Price</label>
                                        <input class="form-control @error('price') is-invalid @enderror" id="price"
                                            name="price" placeholder="Price..." type="number" min="1"
                                            value="{{ old('price') }}" />
                                        @error('price')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="description"> Description</label>
                                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                                            rows="3" placeholder="Description...">{{ old('description') }}</textarea>
                                        @error('description')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <label for="category">Category</label>
                                    <select class="form-control" name="category" aria-label="Default select example">
                                        <option selected>Food / Drink / Dessert / Package</option>
                                        <option value="Food">Food</option>
                                        <option value="Drink">Drink</option>
                                        <option value="Dessert">Dessert</option>
                                        <option value="Package">Package</option>
                                    </select>

                                    <div class="form-group mt-3">
                                        <label for="image">Upload Image</label>
                                        <img class="img-preview  img-fluid mb-3 col-sm-5">
                                        <input class="form-control @error('image') is-invalid @enderror" id="image"
                                            name="image" type="file" accept="image/*" onchange="previewImage()">
                                        @error('image')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    {{-- <h5 class="form-header">Upload Image</h5>
                                        <input name="image" id="image" type="file" />
                                        <div class="form-buttons-w"> --}}

                                    <button class="btn btn-primary" type="submit">Submit</button>
                            </div>

                        </div>
                        </form>
                    </div>
                    <div class="element-box" id="food">
                        <h5 class="form-header">List Menu</h5>
                        <div class="table-responsive">
                            <table id="dataTable1" width="100%" class="table table-striped table-lightfont">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($menus as $menu)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $menu->title }}</td>
                                            <td><img src="{{ asset('storage/' . $menu->image) }}" alt=""></td>
                                            <td>{{ $menu->description }}</td>
                                            <td>{{ $menu->category }}</td>
                                            <td>Rp. {{ $menu->price }}</td>
                                            <td class="row-actions">
                                                <a href="#"><i class="os-icon os-icon-ui-49"></i></a>
                                                <a href="#"><i class="os-icon os-icon-grid-10"></i></a>

                                                <form action="/admin/menu/{{ $menu->id }}" method="post" class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="border border-0" style="background: none; margin-left: -10px; color: rgb(199, 0, 0);" onclick="return confirm('Are you sure?')"><i class="os-icon os-icon-ui-15"></i></button>
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
                                    <label for="">Menu Position</label><select class="menu-position-selector">
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
                                    <label for="">Sub Menu Style</label><select class="sub-menu-style-selector">
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
                                    <label for="">Full Screen?</label><select class="full-screen-selector">
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                                <div class="fcp-field">
                                    <label for="">Show Top Bar</label><select class="top-bar-visibility-selector">
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                                <div class="fcp-field">
                                    <label for="">Above Menu?</label><select class="top-bar-above-menu-selector">
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

    {{-- start script --}}
    <script>
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
    {{-- end script --}}
@endsection
