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
                            @elseif (session()->has('danger'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('danger') }}
                                </div>
                            @endif
                            {{-- tabs --}}
                            <ul class="nav nav-tabs" id="myTab" role="tablist">

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="food-tab" data-bs-toggle="tab"
                                        data-bs-target="#food-tab-pane" type="button" role="tab"
                                        aria-controls="food-tab-pane" aria-selected="true"
                                        style="outline: 0; border: none;">Food Menu</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="drink-tab" data-bs-toggle="tab"
                                        data-bs-target="#drink-tab-pane" type="button" role="tab"
                                        aria-controls="drink-tab-pane" aria-selected="false"
                                        style="outline: 0; border: none;"> Drink Menu</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="dessert-tab" data-bs-toggle="tab"
                                        data-bs-target="#dessert-tab-pane" type="button" role="tab"
                                        aria-controls="dessert-tab-pane" aria-selected="false"
                                        style="outline: 0; border: none;">Desserts</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="package-tab" data-bs-toggle="tab"
                                        data-bs-target="#package-tab-pane" type="button" role="tab"
                                        aria-controls="package-tab-pane" aria-selected="false"
                                        style="outline: 0; border: none;">Packages</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="text-primary nav-link border border-primary  " id="create-tab"
                                        data-bs-toggle="tab" data-bs-target="#create-tab-pane" type="button" role="tab"
                                        aria-controls="create-tab-pane" aria-selected="false"
                                        style="outline: 0; border: none;">Create Menu</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show " id="create-tab-pane" role="tabpanel"
                                    aria-labelledby="create-tab" tabindex="0">
                                    {{-- create --}}
                                    <div class="element-box">
                                        <form action="/admin/menu" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="title"> Title</label>
                                                <input class="form-control @error('title') is-invalid @enderror"
                                                    id="title" name="title" placeholder="Title..." type="text"
                                                    autofocus value="{{ old('title') }}" />
                                                @error('title')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="price"> Price</label>
                                                <input class="form-control @error('price') is-invalid @enderror"
                                                    id="price" name="price" placeholder="Price..." type="number"
                                                    min="1" value="{{ old('price') }}" />
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
                                            <select class="form-control" name="category"
                                                aria-label="Default select example">
                                                <option selected>Select category</option>
                                                <option value="Food">Food</option>
                                                <option value="Drink">Drink</option>
                                                <option value="Dessert">Dessert</option>
                                                <option value="Package">Package</option>
                                            </select>

                                            <div class="form-group mt-3">
                                                <label for="image">Upload Image</label>
                                                <img class="img-preview  img-fluid mb-3 col-sm-5">
                                                <input class="form-control @error('image') is-invalid @enderror"
                                                    id="image" name="image" type="file" accept="image/*"
                                                    onchange="previewImage()">
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
                                        </form>
                                    </div>
                                </div>

                                <div class="tab-pane fade active" id="food-tab-pane" role="tabpanel"
                                    aria-labelledby="food-tab" tabindex="0">
                                    {{-- Food Menu --}}
                                    <div class="element-box" id="food">
                                        <h5 class="form-header">Food Menu</h5>
                                        <div class="table-responsive">
                                            <table id="dataTable1" width="100%"
                                                class="table table-striped table-lightfont">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Title</th>
                                                        <th>Image</th>
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
                                                        <th>Category</th>
                                                        <th>Price</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                    @foreach ($menus_food as $menu)
                                                        {{-- start modal edit --}}
                                                        <div aria-hidden="true" aria-labelledby="exampleModalLabel"
                                                            class="modal fade" id="editModal{{ $menu->id }}"
                                                            role="dialog" tabindex="-1" enctype="multipart/form-data">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                                            Edit
                                                                            Menu</h5>
                                                                        <button aria-label="Close" class="close"
                                                                            data-dismiss="modal" type="button"><span
                                                                                aria-hidden="true">
                                                                                &times;</span></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form action="/admin/menu/{{ $menu->id }}"
                                                                            method="POST" enctype="multipart/form-data">
                                                                            @method('put')
                                                                            @csrf
                                                                            <div class="form-group">
                                                                                <label for="title">
                                                                                    Title</label><input
                                                                                    class="form-control @error('title') is-invalid @enderror"
                                                                                    id="title" placeholder="Title"
                                                                                    name="title" type="text" required
                                                                                    autofocus
                                                                                    value="{{ old('title', $menu->title) }}" />
                                                                                @error('title')
                                                                                    <div class="invalid-feedback">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <label for="price"> Price</label>
                                                                                <input
                                                                                    class="form-control @error('price') is-invalid @enderror"
                                                                                    id="price" name="price"
                                                                                    placeholder="Price..." type="number"
                                                                                    min="1" required
                                                                                    value="{{ old('price', $menu->price) }}" />
                                                                                @error('price')
                                                                                    <div class="invalid-feedback">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <label for="description">
                                                                                    Description</label>
                                                                                <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror"
                                                                                    rows="3" placeholder="Description..." required>{{ old('description', $menu->description) }}</textarea>
                                                                                @error('description')
                                                                                    <div class="invalid-feedback">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
                                                                            </div>

                                                                            <label for="category">Category</label>
                                                                            <select class="form-control" name="category"
                                                                                aria-label="Default select example">
                                                                                @if (old('variant', $menu->category) == 'Food')
                                                                                    <option>Food / Drink / Dessert / Package
                                                                                    </option>
                                                                                    <option selected value="Food">Food
                                                                                    </option>
                                                                                    <option value="Drink">Drink</option>
                                                                                    <option value="Dessert">Dessert
                                                                                    </option>
                                                                                    <option value="Package">Package
                                                                                    </option>
                                                                                @elseif (old('variant', $menu->category) == 'Drink')
                                                                                    <option>Food / Drink / Dessert / Package
                                                                                    </option>
                                                                                    <option value="Food">Food</option>
                                                                                    <option selected value="Drink">Drink
                                                                                    </option>
                                                                                    <option value="Dessert">Dessert
                                                                                    </option>
                                                                                    <option value="Package">Package
                                                                                    </option>
                                                                                @elseif (old('variant', $menu->category) == 'Dessert')
                                                                                    <option>Food / Drink / Dessert / Package
                                                                                    </option>
                                                                                    <option value="Food">Food</option>
                                                                                    <option value="Drink">Drink</option>
                                                                                    <option selected value="Dessert">
                                                                                        Dessert</option>
                                                                                    <option value="Package">Package
                                                                                    </option>
                                                                                @elseif (old('variant', $menu->category) == 'Package')
                                                                                    <option>Food / Drink / Dessert / Package
                                                                                    </option>
                                                                                    <option value="Food">Food</option>
                                                                                    <option value="Drink">Drink</option>
                                                                                    <option value="Dessert">Dessert
                                                                                    </option>
                                                                                    <option selected value="Package">
                                                                                        Package</option>
                                                                                @else
                                                                                    <option selected>Food / Drink / Dessert
                                                                                        / Package
                                                                                    </option>
                                                                                    <option value="Food">Food</option>
                                                                                    <option value="Drink">Drink</option>
                                                                                    <option value="Dessert">Dessert
                                                                                    </option>
                                                                                    <option value="Package">Package
                                                                                    </option>
                                                                                @endif

                                                                            </select>

                                                                            <div class="form-group mt-3">
                                                                                <label for="image">Update Image</label>
                                                                                <img
                                                                                    class="img-preview  img-fluid mb-3 col-sm-5">
                                                                                <input type="hidden" name="oldImage"
                                                                                    value="{{ $menu->image }}">
                                                                                @if ($menu->image)
                                                                                    <img src="{{ asset('storage/' . $menu->image) }}"
                                                                                        class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                                                                @else
                                                                                    <img class="img-preview img-fluid mb-3 col-sm-5"
                                                                                        src="https://source.unsplash.com/600x450?food">
                                                                                @endif
                                                                                <input
                                                                                    class="form-control @error('image') is-invalid @enderror"
                                                                                    id="image" name="image"
                                                                                    type="file" accept="image/*"
                                                                                    onchange="previewImage()">
                                                                                @error('image')
                                                                                    <div class="invalid-feedback">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
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
                                                        {{-- end modal edit --}}

                                                        {{-- start modal show --}}
                                                        <div aria-hidden="true" aria-labelledby="exampleModalLabel"
                                                            class="modal fade" id="showModal{{ $menu->id }}"
                                                            role="dialog" tabindex="-1" enctype="multipart/form-data">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                                            Detail Menu</h5>
                                                                        <button aria-label="Close" class="close"
                                                                            data-dismiss="modal" type="button"><span
                                                                                aria-hidden="true">
                                                                                &times;</span></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form action="/admin/menu/{{ $menu->id }}"
                                                                            method="POST" enctype="multipart/form-data">
                                                                            @csrf

                                                                            <div
                                                                                style="max-height: 350px; overflow: hidden;">
                                                                                @if ($menu->image)
                                                                                    <img src="{{ asset('storage/' . $menu->image) }}"
                                                                                        class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                                                                @else
                                                                                    <img class="img-preview img-fluid mb-3 col-sm-5"
                                                                                        src="https://source.unsplash.com/600x450?food">
                                                                                @endif
                                                                            </div>
                                                                            <br>
                                                                            <h5>{{ $menu->title }}</h5>
                                                                            <p>{{ $menu->description }}</p>
                                                                            <p>Category : {{ $menu->category }}</p>
                                                                            <p>Price : Rp. {{ $menu->price }}</p>
                                                                            <div class="modal-footer"><button
                                                                                    class="btn btn-secondary"
                                                                                    data-dismiss="modal"
                                                                                    type="button">Close</button>
                                                                            </div>
                                                                    </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            {{-- end modal show --}}
                                                        </div>
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $menu->title }}</td>
                                                            <td>
                                                                @if ($menu->image)
                                                                    <img src="{{ asset('storage/' . $menu->image) }}"
                                                                        class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                                                @else
                                                                    <img class="img-preview img-fluid mb-3 col-sm-5"
                                                                        src="https://source.unsplash.com/100x100?food">
                                                                @endif
                                                            </td>
                                                            <td>{{ $menu->category }}</td>
                                                            <td>Rp. {{ $menu->price }}</td>
                                                            <td class="row-actions" style="float: left;">
                                                                {{-- Button modal edit --}}
                                                                <a href=""
                                                                    data-target="#editModal{{ $menu->id }}"
                                                                    data-toggle="modal">
                                                                    <i class="os-icon os-icon-ui-49 editModal"
                                                                        style="color: blue"></i>
                                                                </a>

                                                                {{-- Button modal show --}}
                                                                <a href=""
                                                                    data-target="#showModal{{ $menu->id }}"
                                                                    data-toggle="modal"><i class="os-icon os-icon-grid-10"
                                                                        style="color: green"></i></a>

                                                                <form action="/admin/menu/{{ $menu->id }}"
                                                                    method="post" class="d-inline">
                                                                    @method('delete')
                                                                    @csrf
                                                                    <button class="border border-0"
                                                                        style="background: none; margin-left: -10px; color: rgb(199, 0, 0);"
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

                                <div class="tab-pane fade" id="drink-tab-pane" role="tabpanel"
                                    aria-labelledby="drink-tab" tabindex="0">
                                    {{-- Drink Menu --}}
                                    <div class="element-box" id="food">
                                        <h5 class="form-header">Drink Menu</h5>
                                        <div class="table-responsive">
                                            <table id="dataTable2" width="100%"
                                                class="table table-striped table-lightfont">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Title</th>
                                                        <th>Image</th>
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
                                                        <th>Category</th>
                                                        <th>Price</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                    @foreach ($menus_drink as $menu)
                                                        {{-- start modal edit --}}
                                                        <div aria-hidden="true" aria-labelledby="exampleModalLabel"
                                                            class="modal fade" id="editModal{{ $menu->id }}"
                                                            role="dialog" tabindex="-1" enctype="multipart/form-data">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                                            Edit
                                                                            Menu</h5>
                                                                        <button aria-label="Close" class="close"
                                                                            data-dismiss="modal" type="button"><span
                                                                                aria-hidden="true">
                                                                                &times;</span></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form action="/admin/menu/{{ $menu->id }}"
                                                                            method="POST" enctype="multipart/form-data">
                                                                            @method('put')
                                                                            @csrf
                                                                            <div class="form-group">
                                                                                <label for="title">
                                                                                    Title</label><input
                                                                                    class="form-control @error('title') is-invalid @enderror"
                                                                                    id="title" placeholder="Title"
                                                                                    name="title" type="text" required
                                                                                    autofocus
                                                                                    value="{{ old('title', $menu->title) }}" />
                                                                                @error('title')
                                                                                    <div class="invalid-feedback">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <label for="price"> Price</label>
                                                                                <input
                                                                                    class="form-control @error('price') is-invalid @enderror"
                                                                                    id="price" name="price"
                                                                                    placeholder="Price..." type="number"
                                                                                    min="1" required
                                                                                    value="{{ old('price', $menu->price) }}" />
                                                                                @error('price')
                                                                                    <div class="invalid-feedback">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <label for="description">
                                                                                    Description</label>
                                                                                <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror"
                                                                                    rows="3" placeholder="Description..." required>{{ old('description', $menu->description) }}</textarea>
                                                                                @error('description')
                                                                                    <div class="invalid-feedback">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
                                                                            </div>

                                                                            <label for="category">Category</label>
                                                                            <select class="form-control" name="category"
                                                                                aria-label="Default select example">
                                                                                @if (old('variant', $menu->category) == 'Food')
                                                                                    <option>Food / Drink / Dessert / Package
                                                                                    </option>
                                                                                    <option selected value="Food">Food
                                                                                    </option>
                                                                                    <option value="Drink">Drink</option>
                                                                                    <option value="Dessert">Dessert
                                                                                    </option>
                                                                                    <option value="Package">Package
                                                                                    </option>
                                                                                @elseif (old('variant', $menu->category) == 'Drink')
                                                                                    <option>Food / Drink / Dessert / Package
                                                                                    </option>
                                                                                    <option value="Food">Food</option>
                                                                                    <option selected value="Drink">Drink
                                                                                    </option>
                                                                                    <option value="Dessert">Dessert
                                                                                    </option>
                                                                                    <option value="Package">Package
                                                                                    </option>
                                                                                @elseif (old('variant', $menu->category) == 'Dessert')
                                                                                    <option>Food / Drink / Dessert / Package
                                                                                    </option>
                                                                                    <option value="Food">Food</option>
                                                                                    <option value="Drink">Drink</option>
                                                                                    <option selected value="Dessert">
                                                                                        Dessert</option>
                                                                                    <option value="Package">Package
                                                                                    </option>
                                                                                @elseif (old('variant', $menu->category) == 'Package')
                                                                                    <option>Food / Drink / Dessert / Package
                                                                                    </option>
                                                                                    <option value="Food">Food</option>
                                                                                    <option value="Drink">Drink</option>
                                                                                    <option value="Dessert">Dessert
                                                                                    </option>
                                                                                    <option selected value="Package">
                                                                                        Package</option>
                                                                                @else
                                                                                    <option selected>Food / Drink / Dessert
                                                                                        / Package
                                                                                    </option>
                                                                                    <option value="Food">Food</option>
                                                                                    <option value="Drink">Drink</option>
                                                                                    <option value="Dessert">Dessert
                                                                                    </option>
                                                                                    <option value="Package">Package
                                                                                    </option>
                                                                                @endif

                                                                            </select>

                                                                            <div class="form-group mt-3">
                                                                                <label for="image">Update Image</label>
                                                                                <img
                                                                                    class="img-preview  img-fluid mb-3 col-sm-5">
                                                                                <input type="hidden" name="oldImage"
                                                                                    value="{{ $menu->image }}">
                                                                                @if ($menu->image)
                                                                                    <img src="{{ asset('storage/' . $menu->image) }}"
                                                                                        class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                                                                @else
                                                                                    <img class="img-preview img-fluid mb-3 col-sm-5"
                                                                                        src="https://source.unsplash.com/600x450?drink">
                                                                                @endif
                                                                                <input
                                                                                    class="form-control @error('image') is-invalid @enderror"
                                                                                    id="image" name="image"
                                                                                    type="file" accept="image/*"
                                                                                    onchange="previewImage()">
                                                                                @error('image')
                                                                                    <div class="invalid-feedback">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
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
                                                        {{-- end modal edit --}}

                                                        {{-- start modal show --}}
                                                        <div aria-hidden="true" aria-labelledby="exampleModalLabel"
                                                            class="modal fade" id="showModal{{ $menu->id }}"
                                                            role="dialog" tabindex="-1" enctype="multipart/form-data">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                                            Detail Menu</h5>
                                                                        <button aria-label="Close" class="close"
                                                                            data-dismiss="modal" type="button"><span
                                                                                aria-hidden="true">
                                                                                &times;</span></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form action="/admin/menu/{{ $menu->id }}"
                                                                            method="POST" enctype="multipart/form-data">
                                                                            @csrf

                                                                            <div
                                                                                style="max-height: 350px; overflow: hidden;">
                                                                                @if ($menu->image)
                                                                                    <img src="{{ asset('storage/' . $menu->image) }}"
                                                                                        class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                                                                @else
                                                                                    <img class="img-preview img-fluid mb-3 col-sm-5"
                                                                                        src="https://source.unsplash.com/600x450?drink">
                                                                                @endif
                                                                            </div>
                                                                            <br>
                                                                            <h5>{{ $menu->title }}</h5>
                                                                            <p>{{ $menu->description }}</p>
                                                                            <p>Category : {{ $menu->category }}</p>
                                                                            <p>Price : Rp. {{ $menu->price }}</p>
                                                                            <div class="modal-footer"><button
                                                                                    class="btn btn-secondary"
                                                                                    data-dismiss="modal"
                                                                                    type="button">Close</button>
                                                                            </div>
                                                                    </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            {{-- end modal show --}}

                                                            <tr>
                                                                <td>{{ $loop->iteration }}</td>
                                                                <td>{{ $menu->title }}</td>
                                                                <td>
                                                                    @if ($menu->image)
                                                                        <img src="{{ asset('storage/' . $menu->image) }}"
                                                                            class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                                                    @else
                                                                        <img class="img-preview img-fluid mb-3 col-sm-5"
                                                                            src="https://source.unsplash.com/100x100?drink">
                                                                    @endif
                                                                </td>
                                                                <td>{{ $menu->category }}</td>
                                                                <td>Rp. {{ $menu->price }}</td>
                                                                <td class="row-actions" style="float:left;">
                                                                    {{-- Button modal edit --}}
                                                                    <a href=""
                                                                        data-target="#editModal{{ $menu->id }}"
                                                                        data-toggle="modal">
                                                                        <i class="os-icon os-icon-ui-49 editModal"
                                                                            style="color: blue"></i>
                                                                    </a>

                                                                    {{-- Button modal show --}}
                                                                    <a href=""
                                                                        data-target="#showModal{{ $menu->id }}"
                                                                        data-toggle="modal"><i
                                                                            class="os-icon os-icon-grid-10"
                                                                            style="color: green"></i></a>

                                                                    <form action="/admin/menu/{{ $menu->id }}"
                                                                        method="post" class="d-inline">
                                                                        @method('delete')
                                                                        @csrf
                                                                        <button class="border border-0"
                                                                            style="background: none; margin-left: -10px; color: rgb(199, 0, 0);"
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

                                <div class="tab-pane fade" id="dessert-tab-pane" role="tabpanel"
                                    aria-labelledby="dessert-tab" tabindex="0">
                                    {{-- Desserts --}}
                                    <div class="element-box" id="food">
                                        <h5 class="form-header">Desserts</h5>
                                        <div class="table-responsive">
                                            <table id="dataTable3" width="100%"
                                                class="table table-striped table-lightfont">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Title</th>
                                                        <th>Image</th>
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
                                                        <th>Category</th>
                                                        <th>Price</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                    @foreach ($menus_dessert as $menu)
                                                        {{-- start modal edit --}}
                                                        <div aria-hidden="true" aria-labelledby="exampleModalLabel"
                                                            class="modal fade" id="editModal{{ $menu->id }}"
                                                            role="dialog" tabindex="-1" enctype="multipart/form-data">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                                            Edit
                                                                            Menu</h5>
                                                                        <button aria-label="Close" class="close"
                                                                            data-dismiss="modal" type="button"><span
                                                                                aria-hidden="true">
                                                                                &times;</span></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form action="/admin/menu/{{ $menu->id }}"
                                                                            method="POST" enctype="multipart/form-data">
                                                                            @method('put')
                                                                            @csrf
                                                                            <div class="form-group">
                                                                                <label for="title">
                                                                                    Title</label><input
                                                                                    class="form-control @error('title') is-invalid @enderror"
                                                                                    id="title" placeholder="Title"
                                                                                    name="title" type="text" required
                                                                                    autofocus
                                                                                    value="{{ old('title', $menu->title) }}" />
                                                                                @error('title')
                                                                                    <div class="invalid-feedback">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <label for="price"> Price</label>
                                                                                <input
                                                                                    class="form-control @error('price') is-invalid @enderror"
                                                                                    id="price" name="price"
                                                                                    placeholder="Price..." type="number"
                                                                                    min="1" required
                                                                                    value="{{ old('price', $menu->price) }}" />
                                                                                @error('price')
                                                                                    <div class="invalid-feedback">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <label for="description">
                                                                                    Description</label>
                                                                                <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror"
                                                                                    rows="3" placeholder="Description..." required>{{ old('description', $menu->description) }}</textarea>
                                                                                @error('description')
                                                                                    <div class="invalid-feedback">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
                                                                            </div>

                                                                            <label for="category">Category</label>
                                                                            <select class="form-control" name="category"
                                                                                aria-label="Default select example">
                                                                                @if (old('variant', $menu->category) == 'Food')
                                                                                    <option>Food / Drink / Dessert / Package
                                                                                    </option>
                                                                                    <option selected value="Food">Food
                                                                                    </option>
                                                                                    <option value="Drink">Drink</option>
                                                                                    <option value="Dessert">Dessert
                                                                                    </option>
                                                                                    <option value="Package">Package
                                                                                    </option>
                                                                                @elseif (old('variant', $menu->category) == 'Drink')
                                                                                    <option>Food / Drink / Dessert / Package
                                                                                    </option>
                                                                                    <option value="Food">Food</option>
                                                                                    <option selected value="Drink">Drink
                                                                                    </option>
                                                                                    <option value="Dessert">Dessert
                                                                                    </option>
                                                                                    <option value="Package">Package
                                                                                    </option>
                                                                                @elseif (old('variant', $menu->category) == 'Dessert')
                                                                                    <option>Food / Drink / Dessert / Package
                                                                                    </option>
                                                                                    <option value="Food">Food</option>
                                                                                    <option value="Drink">Drink</option>
                                                                                    <option selected value="Dessert">
                                                                                        Dessert</option>
                                                                                    <option value="Package">Package
                                                                                    </option>
                                                                                @elseif (old('variant', $menu->category) == 'Package')
                                                                                    <option>Food / Drink / Dessert / Package
                                                                                    </option>
                                                                                    <option value="Food">Food</option>
                                                                                    <option value="Drink">Drink</option>
                                                                                    <option value="Dessert">Dessert
                                                                                    </option>
                                                                                    <option selected value="Package">
                                                                                        Package</option>
                                                                                @else
                                                                                    <option selected>Food / Drink / Dessert
                                                                                        / Package
                                                                                    </option>
                                                                                    <option value="Food">Food</option>
                                                                                    <option value="Drink">Drink</option>
                                                                                    <option value="Dessert">Dessert
                                                                                    </option>
                                                                                    <option value="Package">Package
                                                                                    </option>
                                                                                @endif

                                                                            </select>

                                                                            <div class="form-group mt-3">
                                                                                <label for="image">Update Image</label>
                                                                                <img
                                                                                    class="img-preview  img-fluid mb-3 col-sm-5">
                                                                                <input type="hidden" name="oldImage"
                                                                                    value="{{ $menu->image }}">
                                                                                @if ($menu->image)
                                                                                    <img src="{{ asset('storage/' . $menu->image) }}"
                                                                                        class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                                                                @else
                                                                                    <img class="img-preview img-fluid mb-3 col-sm-5"
                                                                                        src="https://source.unsplash.com/600x450?dessert">
                                                                                @endif
                                                    <input class="form-control @error('image') is-invalid @enderror"
                                                        id="image" name="image" type="file" accept="image/*"
                                                        onchange="previewImage()">
                                                    @error('image')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                        </div>

                                        <div class="modal-footer"><button class="btn btn-secondary" data-dismiss="modal"
                                                type="button">Close</button><button class="btn btn-primary"
                                                type="submit">Save
                                                changes</button></div>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                        {{-- end modal edit --}}

                        {{-- start modal show --}}
                        <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade"
                            id="showModal{{ $menu->id }}" role="dialog" tabindex="-1"
                            enctype="multipart/form-data">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">
                                            Detail Menu</h5>
                                        <button aria-label="Close" class="close" data-dismiss="modal"
                                            type="button"><span aria-hidden="true">
                                                &times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/admin/menu/{{ $menu->id }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf

                                            <div style="max-height: 350px; overflow: hidden;">
                                                @if ($menu->image)
                                                    <img src="{{ asset('storage/' . $menu->image) }}"
                                                        class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                                @else
                                                    <img class="img-preview img-fluid mb-3 col-sm-5"
                                                        src="https://source.unsplash.com/600x450?dessert">
                                                @endif
                                            </div>
                                            <br>
                                            <h5>{{ $menu->title }}</h5>
                                            <p>{{ $menu->description }}</p>
                                            <p>Category : {{ $menu->category }}</p>
                                            <p>Price : Rp. {{ $menu->price }}</p>
                                            <div class="modal-footer"><button class="btn btn-secondary"
                                                    data-dismiss="modal" type="button">Close</button>
                                            </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                            {{-- end modal show --}}

                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $menu->title }}</td>
                                <td>
                                    @if ($menu->image)
                                        <img src="{{ asset('storage/' . $menu->image) }}"
                                            class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                    @else
                                        <img class="img-preview img-fluid mb-3 col-sm-5"
                                            src="https://source.unsplash.com/100x100?dessert">
                                    @endif
                                </td>
                                <td>{{ $menu->category }}</td>
                                <td>Rp. {{ $menu->price }}</td>
                                <td class="row-actions" style="float:left;">
                                    {{-- Button modal edit --}}
                                    <a href="" data-target="#editModal{{ $menu->id }}" data-toggle="modal">
                                        <i class="os-icon os-icon-ui-49 editModal" style="color: blue"></i>
                                    </a>

                                    {{-- Button modal show --}}
                                    <a href="" data-target="#showModal{{ $menu->id }}" data-toggle="modal"><i
                                            class="os-icon os-icon-grid-10" style="color: green"></i></a>

                                    <form action="/admin/menu/{{ $menu->id }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="border border-0"
                                            style="background: none; margin-left: -10px; color: rgb(199, 0, 0);"
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

                <div class="tab-pane fade" id="package-tab-pane" role="tabpanel" aria-labelledby="package-tab"
                    tabindex="0">
                    {{-- Package --}}
                    <div class="element-box" id="food">
                        <h5 class="form-header">Packages</h5>
                        <div class="table-responsive">
                            <table id="dataTable4" width="100%" class="table table-striped table-lightfont">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Image</th>
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
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($menus_package as $menu)
                                        {{-- start modal edit --}}
                                        <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade"
                                            id="editModal{{ $menu->id }}" role="dialog" tabindex="-1"
                                            enctype="multipart/form-data">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                            Edit
                                                            Menu</h5>
                                                        <button aria-label="Close" class="close" data-dismiss="modal"
                                                            type="button"><span aria-hidden="true">
                                                                &times;</span></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="/admin/menu/{{ $menu->id }}" method="POST"
                                                            enctype="multipart/form-data">
                                                            @method('put')
                                                            @csrf
                                                            <div class="form-group">
                                                                <label for="title">
                                                                    Title</label><input
                                                                    class="form-control @error('title') is-invalid @enderror"
                                                                    id="title" placeholder="Title" name="title"
                                                                    type="text" required autofocus
                                                                    value="{{ old('title', $menu->title) }}" />
                                                                @error('title')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="price"> Price</label>
                                                                <input
                                                                    class="form-control @error('price') is-invalid @enderror"
                                                                    id="price" name="price" placeholder="Price..."
                                                                    type="number" min="1" required
                                                                    value="{{ old('price', $menu->price) }}" />
                                                                @error('price')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="description">
                                                                    Description</label>
                                                                <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror"
                                                                    rows="3" placeholder="Description..." required>{{ old('description', $menu->description) }}</textarea>
                                                                @error('description')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>

                                                            <label for="category">Category</label>
                                                            <select class="form-control" name="category"
                                                                aria-label="Default select example">
                                                                @if (old('variant', $menu->category) == 'Food')
                                                                    <option>Food / Drink / Dessert / Package
                                                                    </option>
                                                                    <option selected value="Food">Food
                                                                    </option>
                                                                    <option value="Drink">Drink</option>
                                                                    <option value="Dessert">Dessert
                                                                    </option>
                                                                    <option value="Package">Package
                                                                    </option>
                                                                @elseif (old('variant', $menu->category) == 'Drink')
                                                                    <option>Food / Drink / Dessert / Package
                                                                    </option>
                                                                    <option value="Food">Food</option>
                                                                    <option selected value="Drink">Drink
                                                                    </option>
                                                                    <option value="Dessert">Dessert
                                                                    </option>
                                                                    <option value="Package">Package
                                                                    </option>
                                                                @elseif (old('variant', $menu->category) == 'Dessert')
                                                                    <option>Food / Drink / Dessert / Package
                                                                    </option>
                                                                    <option value="Food">Food</option>
                                                                    <option value="Drink">Drink</option>
                                                                    <option selected value="Dessert">
                                                                        Dessert</option>
                                                                    <option value="Package">Package
                                                                    </option>
                                                                @elseif (old('variant', $menu->category) == 'Package')
                                                                    <option>Food / Drink / Dessert / Package
                                                                    </option>
                                                                    <option value="Food">Food</option>
                                                                    <option value="Drink">Drink</option>
                                                                    <option value="Dessert">Dessert
                                                                    </option>
                                                                    <option selected value="Package">
                                                                        Package</option>
                                                                @else
                                                                    <option selected>Food / Drink / Dessert
                                                                        / Package
                                                                    </option>
                                                                    <option value="Food">Food</option>
                                                                    <option value="Drink">Drink</option>
                                                                    <option value="Dessert">Dessert
                                                                    </option>
                                                                    <option value="Package">Package
                                                                    </option>
                                                                @endif

                                                            </select>

                                                            <div class="form-group mt-3">
                                                                <label for="image">Update Image</label>
                                                                <img class="img-preview  img-fluid mb-3 col-sm-5">
                                                                <input type="hidden" name="oldImage"
                                                                    value="{{ $menu->image }}">
                                                                @if ($menu->image)
                                                                    <img src="{{ asset('storage/' . $menu->image) }}"
                                                                        class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                                                @else
                                                                    <img class="img-preview img-fluid mb-3 col-sm-5"
                                                                        src="https://source.unsplash.com/600x450?food">
                                                                @endif
                                                                <input
                                                                    class="form-control @error('image') is-invalid @enderror"
                                                                    id="image" name="image" type="file"
                                                                    accept="image/*" onchange="previewImage()">
                                                                @error('image')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>

                                                            <div class="modal-footer"><button class="btn btn-secondary"
                                                                    data-dismiss="modal"
                                                                    type="button">Close</button><button
                                                                    class="btn btn-primary" type="submit">Save
                                                                    changes</button></div>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                        {{-- end modal edit --}}

                                        {{-- start modal show --}}
                                        <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade"
                                            id="showModal{{ $menu->id }}" role="dialog" tabindex="-1"
                                            enctype="multipart/form-data">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                            Detail Menu</h5>
                                                        <button aria-label="Close" class="close" data-dismiss="modal"
                                                            type="button"><span aria-hidden="true">
                                                                &times;</span></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="/admin/menu/{{ $menu->id }}" method="POST"
                                                            enctype="multipart/form-data">
                                                            @csrf

                                                            <div style="max-height: 350px; overflow: hidden;">
                                                                @if ($menu->image)
                                                                    <img src="{{ asset('storage/' . $menu->image) }}"
                                                                        class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                                                @else
                                                                    <img class="img-preview img-fluid mb-3 col-sm-5"
                                                                        src="https://source.unsplash.com/600x450?food">
                                                                @endif
                                                            </div>
                                                            <br>
                                                            <h5>{{ $menu->title }}</h5>
                                                            <p>{{ $menu->description }}</p>
                                                            <p>Category : {{ $menu->category }}</p>
                                                            <p>Price : Rp. {{ $menu->price }}</p>
                                                            <div class="modal-footer"><button class="btn btn-secondary"
                                                                    data-dismiss="modal" type="button">Close</button>
                                                            </div>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                            {{-- end modal show --}}

                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $menu->title }}</td>
                                                <td>
                                                    @if ($menu->image)
                                                        <img src="{{ asset('storage/' . $menu->image) }}"
                                                            class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                                    @else
                                                        <img class="img-preview img-fluid mb-3 col-sm-5"
                                                            src="https://source.unsplash.com/100x100?food">
                                                    @endif
                                                </td>
                                                <td>{{ $menu->category }}</td>
                                                <td>Rp. {{ $menu->price }}</td>
                                                <td class="row-actions" style="float:left;">
                                                    {{-- Button modal edit --}}
                                                    <a href="" data-target="#editModal{{ $menu->id }}"
                                                        data-toggle="modal">
                                                        <i class="os-icon os-icon-ui-49 editModal"
                                                            style="color: blue"></i>
                                                    </a>

                                                    {{-- Button modal show --}}
                                                    <a href="" data-target="#showModal{{ $menu->id }}"
                                                        data-toggle="modal"><i class="os-icon os-icon-grid-10"
                                                            style="color: green"></i></a>

                                                    <form action="/admin/menu/{{ $menu->id }}" method="post"
                                                        class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="border border-0"
                                                            style="background: none; margin-left: -10px; color: rgb(199, 0, 0);"
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
            </div>
            {{-- end tabs --}}


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
