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
                            <h6 class="element-header">List Order</h6>
                            @if (session()->has('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <div class="element-box">
                                <h5 class="form-header">Data Table</h5>
                                <div class="table-responsive">
                                    <table id="dataTable1" width="100%" class="table table-striped table-lightfont">
                                        <thead>
                                            <tr>
                                                <th>Id Order</th>
                                                <th>Name / Person</th>
                                                <th>Menu</th>
                                                <th>Start date</th>
                                                <th>Time</th>
                                                <th>Price</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Id Order</th>
                                                <th>Name / Person</th>
                                                <th>Menu</th>
                                                <th>Start date</th>
                                                <th>Time</th>
                                                <th>Price</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </tfoot>

                                        <tbody>
                                            @foreach ($orders as $order)

                                            <!-- Modal edit -->

                                        <div aria-hidden="true" aria-labelledby="editModalLabel"  class="modal fade" id="editModal{{ $order->id }}" role="dialog" tabindex="-1">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editModalLabel">Edit Order</h5>
                                                    <button aria-label="Close" type="button" class="close" data-dismiss="modal"><span aria-hidden="true"> &times;</span></button>
                                                </div>
                                                

                                            <div class="modal-body">
                                                <form action="/admin/order/{{ $order->id }}" method="POST" enctype="multipart/form-data">

                                                
                                                    @method('put')
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="">Name</label>
                                                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name" id="name" required autofocus value="{{ old('name', $order->name) }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="">Menu</label>
                                                        <input type="text" name="menu" class="form-control @error('menu') is-invalid @enderror" placeholder="Menu" required autofocus value="{{ old('menu', $order->menu) }}">
                                                    </div>

                                                    <!-- <div class="form-group">
                                                        <label for="">Start Date</label>
                                                        <input type="date" name="date" class="form-control @error('created_at') is-invalid @enderror" placeholder="Start Date" required autofocus value="{{ old('created_at', $order->created_at) }}">
                                                    </div> -->

                                                    <!-- <div class="form-group">
                                                        <label for="">Time</label>
                                                        <input type="number" name="time" class="form-control @error('time') is-invalid @enderror" placeholder="Time" required autofocus value="{{ old('time', $order->time) }}">
                                                    </div> -->

                                                    <div class="form-group">
                                                        <label for="">Price</label>
                                                        <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" placeholder="Price" required autofocus value="{{ old('price', $order->price) }}">
                                                    </div>

                                                    <!-- <div class="form-group">
                                                        <div class="form-group">
                                                            <label for="exampleFormControlSelect1">Status</label>
                                                            <select class="form-control" id="exampleFormControlSelect1" name="status">
                                                                <option>Pending</option>
                                                                <option>Cancel</option>
                                                                <option>Complete</option>
                                                            </select>
                                                        </div>
                                                    </div> -->

                                                </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Modal edit-->

                                        <!-- Modal show -->

                                        <div aria-hidden="true" aria-labelledby="showModalLabel"  class="modal fade" id="showModal{{ $order->id }}" role="dialog" tabindex="-1">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="showModalLabel">Show Order</h5>
                                                    <button aria-label="Close" type="button" class="close" data-dismiss="modal"><span aria-hidden="true"> &times;</span></button>
                                                </div>
                                                

                                            <div class="modal-body">
                                                <form action="/admin/order/{{ $order->id }}" method="POST" enctype="multipart/form-data">

                                                
                                                    @method('put')
                                                    @csrf


                                                    <div class="">
                                                        <h6 class="">ID : {{ $order->id }}</h6>
                                                        <h6 class="">NAME : {{ $order->name }}</h6>
                                                        <h6 class="">MENU : {{ $order->menu }}</h6>
                                                        <h6 class="">DATE : {{ $order->date }}</h6>
                                                        <h6 class="">TIME : {{ $order->time }} Hour</h6>
                                                        <h6 class="">PRICE : Rp{{ $order->price }}</h6>
                                                        <h6 class="">STATUS : {{ $order->status }}</h6>
                                                        
                                                    </div>

                                                
                                                    </form>

                                            </div>
                                        </div>
                                        <!-- End Modal show-->


                                            <tr>
                                                <td>{{ $order->id }}</td>
                                                <td>{{ $order->name }}</td>
                                                <td>
                                                    <ul>
                                                        <li style="float: left;">{{ $order->menu }}</li>
                                                    </ul>
                                                </td>
                                                <td>{{ $order->created_at }}</td>
                                                <td>{{ $order->time }} Hour</td>
                                                <td>Rp{{ $order->price }} </td>
                                                <td>{{ $order->status }}</td>
                                                <td class="row-actions" style="float : left;">
                                                    <a data-target="#editModal{{ $order->id }}" data-toggle="modal" >
                                                        <i class="os-icon os-icon-ui-49 editModal"></i>
                                                    </a>
                                                    
                                                    <a data-target="#showModal{{ $order->id }}" data-toggle="modal" >
                                                        <i class="os-icon os-icon-grid-10 showModal"></i>
                                                    </a>
                                                    
                                                    <form action="/admin/order/{{ $order->id }}" method="post" class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" class="danger border-0" onclick="return confirm('Yakin?')"><i class="os-icon os-icon-ui-15"></i></button>
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
                                                <div class="color-selector menu-color-selector color-dark">
                                                </div>
                                                <div class="color-selector menu-color-selector color-light">
                                                </div>
                                                <div class="color-selector menu-color-selector color-transparent">
                                                </div>
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
                                                <div class="color-selector sub-menu-color-selector color-dark">
                                                </div>
                                                <div class="color-selector sub-menu-color-selector color-light">
                                                </div>
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
                                                <div class="color-selector top-bar-color-selector color-dark">
                                                </div>
                                                <div class="color-selector top-bar-color-selector color-light">
                                                </div>
                                                <div class="color-selector top-bar-color-selector color-transparent">
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
    </div>
@endsection
