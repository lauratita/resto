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
                            <h6 class="element-header">Blog</h6>
                            @if (session()->has('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <div class="element-box">
                                <form action="/admin/blog" method="POST" enctype="multipart/form-data">
                                    @csrf   
                                    <div class="form-group"><label for="title"> Title</label><input class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                                            placeholder="Title..." type="text" required autofocus value="{{ old('title') }}"/>
                                            @error('title')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        </div>
                                    <div class="form-group"><label for="slug"> Slug</label><input class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
                                            placeholder="Slug..." type="text" required autofocus value="{{ old('slug') }}"/>
                                            @error('slug')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        </div>
                                    <div class="form-group"><label for="creator"> Creator</label><input class="form-control @error('creator') is-invalid @enderror" id="creator" name="creator"
                                            placeholder="Creator..." type="text" required autofocus value="{{ old('creator') }}"/>
                                            @error('creator')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        @error('description')
                                          <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <input id="description" type="hidden" name="description" value="{{ old('description') }}">
                                        <trix-editor input="description"></trix-editor>
                                      </div>
                                    <div class="form-group">
                                        <label for="image" class="form-label">Blog image</label>
                                        <img class="img-preview img-fluid mb-3 col-sm-5">
                                        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image"
                                            accept="image/*" onchange="previewImage()">
                                        @error('image')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                        <button class="btn btn-primary" type="submit">Create</button>
                                    </div>
                                </form>
                            </div>
                            <div class="element-box">
                                <h5 class="form-header">Data Table</h5>
                                <div class="table-responsive">
                                    <table id="dataTable1" width="100%" class="table table-striped table-lightfont">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Title</th>
                                                <th>Creator</th>
                                                <th>Start Date</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Id</th>
                                                <th>Title</th>
                                                <th>Creator</th>
                                                <th>Start Date</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                     @foreach ($blogs as $blog)
                                    {{-- Edit modal --}}
                                    <div aria-hidden="true" aria-labelledby="editModalLabel"
                                    class="modal fade" id="editModal{{ $blog->id }}" role="dialog"
                                    tabindex="-1">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editModalLabel">Edit
                                                    Blog</h5>
                                                <button aria-label="Close" class="close"
                                                    data-dismiss="modal" type="button"><span
                                                        aria-hidden="true"> &times;</span></button>
                                            </div>
                                    <div class="modal-body">
                                        <form action="/admin/blog/{{ $blog->id }}" method="POST" enctype="multipart/form-data">
                                                    @method('put')
                                                    @csrf
                                                    <div class="form-group"><label for="title"> Title</label><input class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                                                        placeholder="Title..." type="text" required autofocus value="{{ old('title', $blog->title) }}"/>
                                                    </div>
                                                <div class="form-group"><label for="slug"> Slug</label><input class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
                                                        placeholder="Slug..." type="text" required autofocus value="{{ old('slug', $blog->slug) }}"/>
                                                    </div>
                                                <div class="form-group"><label for="creator"> Creator</label><input class="form-control @error('creator') is-invalid @enderror" id="creator" name="creator"
                                                        placeholder="Creator..." type="text" required autofocus value="{{ old('creator', $blog->creator) }}"/>
                                                    </div>
                                                <div class="form-group"><label for="description"> Description</label>
                                                    <textarea input="description" class="form-control" rows="3" placeholder="Description..." id="description" type="hidden" name="description">{{ old('description', $blog->description) }}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="image" class="form-label">Blog image</label>
                                                    <input type="hidden" name="oldImage" value="{{ $blog->image }}">
                                                    @if ($blog->image)
                                                        <img src="{{ asset('storage/' . $blog->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                                    @else
                                                        <img class="img-preview img-fluid mb-3 col-sm-5">
                                                    @endif
                                                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image"
                                                        accept="image/*" onchange="previewImage()">
                                                </div>
                                                    <div class="modal-footer"><button
                                                            class="btn btn-secondary" data-dismiss="modal"
                                                            type="button">Close</button><button
                                                            class="btn btn-primary" type="submit">Save
                                                            changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                        {{-- Show modal --}}
                                        <div aria-hidden="true" aria-labelledby="showModalLabel"
                                        class="modal fade" id="showModal{{ $blog->id }}" role="dialog"
                                        tabindex="-1">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="showModalLabel">Detail</h5>
                                                    <button aria-label="Close" class="close"
                                                        data-dismiss="modal" type="button"><span
                                                            aria-hidden="true"> &times;</span></button>
                                                </div>
                                        <div class="modal-body">
                                            <form action="/admin/blog/{{ $blog->id }}" method="POST" enctype="multipart/form-data">
                                                        @method('put')
                                                        @csrf
                                                        <div class="form-group">
                                                            <label for="image" class="form-label"></label>
                                                            <input type="hidden" name="oldImage" value="{{ $blog->image }}">
                                                            @if ($blog->image)
                                                                <img src="{{ asset('storage/' . $blog->image) }}" width="30px" class="img-preview img-fluid mb-3 col-sm-8 d-block">
                                                            @else
                                                                <img class="img-preview img-fluid mb-3 col-sm-5">
                                                            @endif
                                                        </div>
                                                        <div class="">
                                                            <div class="news-content">
                                                                <p class="text-gray date">{{ $blog->created_at->diffForHumans() }}</p>
                                                                <h6 class="primary author text-uppercase"> Creator: {{ $blog->creator }}</h6>
                                                                <h4 class="news-title text-uppercase"><a href="#">{{ $blog->title }}</a></h4>
                                                                <p class="news-description">{{ $blog->description }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                            <tr>
                                                <td>{{ $blog->id }}</td>
                                                <td>{{ $blog->title }}</td>
                                                <td>{{ $blog->creator }}</td>
                                                <td>{{ $blog->created_at->diffForHumans() }}</td>
                                                <td><img alt="" src="{{ asset('storage/' . $blog->image) }}"
                                                   width="30px" /></td></td>
                                                <td class="row-actions" style="float: left;">
                                                    {{-- Edit modal --}}
                                                    <a href="" data-target="#editModal{{ $blog->id }}"
                                                        data-toggle="modal">
                                                        <i class="os-icon os-icon-ui-49 editModal" style="color: blue"></i>
                                                    </a>
                                                    {{-- Show modal --}}
                                                    <a href="" data-target="#showModal{{ $blog->id }}"
                                                        data-toggle="modal">
                                                        <i class="os-icon os-icon-grid-10 showModal" style="color: green"></i>
                                                    </a>
                                                        <form class="d-inline" method="POST" action="/admin/blog/{{ $blog->id }}">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" style="background: none; margin-left:-10px; color: rgb(167, 0, 0)" class="border border-0" onclick="return confirm('Are you sure?')"><i
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
                                            <label for="">Full Screen?</label><select class="full-screen-selector">
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
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function () {
            fetch('/admin/blogs/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug) 
        });

        document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
        })
        
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
