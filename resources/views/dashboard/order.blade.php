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
                                    <button style="outline: 0; border: none;" class="nav-link active" id="home-tab"
                                        data-bs-toggle="tab" data-bs-target="#list-tab-pane" type="button" role="tab"
                                        aria-controls="list-tab-pane" aria-selected="true">List Order</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button style="outline: 0; border: none;" class="nav-link" id="profile-tab"
                                        data-bs-toggle="tab" data-bs-target="#check-tab-pane" type="button" role="tab"
                                        aria-controls="check-tab-pane" aria-selected="false">Check Order</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button style="outline: 0; border: none;" class="nav-link" id="contact-tab"
                                        data-bs-toggle="tab" data-bs-target="#success-tab-pane" type="button"
                                        role="tab" aria-controls="success-tab-pane" aria-selected="false">Success
                                        Order</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="list-tab-pane" role="tabpanel"
                                    aria-labelledby="home-tab" tabindex="0">
                                    <!-- status 1 -->
                                    <div class="element-box">
                                        <h5 class="form-header">List Order</h5>
                                        <div class="table-responsive">
                                            <table id="dataTable1" width="100%"
                                                class="table table-striped table-lightfont">
                                                <thead>
                                                    <tr>
                                                        <th>Code</th>
                                                        <th>Name / Person</th>
                                                        <th>Phone</th>
                                                        <th>Start date</th>
                                                        <th>Time</th>
                                                        <th>People</th>
                                                        <th>Status</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>Code</th>
                                                        <th>Name / Person</th>
                                                        <th>Phone</th>
                                                        <th>Start date</th>
                                                        <th>Time</th>
                                                        <th>People</th>
                                                        <th>Status</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </tfoot>

                                                <tbody>
                                                    @foreach ($orders as $order)
                                                        <!-- Modal edit -->

                                                        <div aria-hidden="true" aria-labelledby="editModalLabel"
                                                            class="modal fade" id="editModal{{ $order->id }}"
                                                            role="dialog" tabindex="-1">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="editModalLabel">Edit
                                                                            Order</h5>
                                                                        <button aria-label="Close" type="button"
                                                                            class="close" data-dismiss="modal"><span
                                                                                aria-hidden="true"> &times;</span></button>
                                                                    </div>


                                                                    <div class="modal-body">
                                                                        <form action="/admin/order/{{ $order->id }}"
                                                                            method="POST" enctype="multipart/form-data">


                                                                            @method('put')
                                                                            @csrf
                                                                            <div class="form-group">
                                                                                <label for="">Name</label>
                                                                                <input type="text" name="name"
                                                                                    class="form-control @error('name') is-invalid @enderror"
                                                                                    placeholder="Name" id="name"
                                                                                    required autofocus
                                                                                    value="{{ old('name', $order->name) }}">
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <label for="">Start Date</label>
                                                                                <input type="date" name="date"
                                                                                    class="form-control @error('date') is-invalid @enderror"
                                                                                    placeholder="Start Date" required
                                                                                    autofocus
                                                                                    value="{{ old('date', $order->date) }}">
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <label for="">Time</label>
                                                                                <input type="time" name="time"
                                                                                    class="form-control @error('time') is-invalid @enderror"
                                                                                    placeholder="Time" required autofocus
                                                                                    value="{{ old('time', $order->time) }}">
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <label for="">People</label>
                                                                                <input type="number" name="people"
                                                                                    class="form-control @error('people') is-invalid @enderror"
                                                                                    placeholder="people" required autofocus
                                                                                    value="{{ old('people', $order->people) }}">
                                                                            </div>

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Close</button>
                                                                        <button type="submit"
                                                                            class="btn btn-primary">Update</button>
                                                                    </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Modal edit-->

                                                        <!-- Modal show -->
                                                        <div aria-hidden="true" aria-labelledby="showModalLabel"
                                                            class="modal fade" id="showModal{{ $order->id }}"
                                                            role="dialog" tabindex="-1">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="showModalLabel">Show
                                                                            Order</h5>
                                                                        <button aria-label="Close" type="button"
                                                                            class="close" data-dismiss="modal"><span
                                                                                aria-hidden="true"> &times;</span></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <ul class="list-group">
                                                                            <li class="list-group-item">
                                                                                <b>Code :
                                                                                    {{ $order->code }}</b>
                                                                            </li>
                                                                            <li class="list-group-item">Name :
                                                                                {{ $order->name }}</li>
                                                                            <li class="list-group-item">Email :
                                                                                {{ $order->email }}</li>
                                                                            <li class="list-group-item">Phone :
                                                                                {{ $order->no_hp }}</li>
                                                                            <li class="list-group-item">People :
                                                                                {{ $order->people }} people</li>
                                                                            <li class="list-group-item">Time :
                                                                                {{ $order->time }}</li>
                                                                            <li class="list-group-item">Date :
                                                                                {{ $order->date }}</li>
                                                                            <li class="list-group-item">Message :
                                                                                {{ $order->message }}</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <!-- End Modal show-->


                                                                <tr>
                                                                    <td><b>{{ $order->code }}</b></td>
                                                                    <td>{{ $order->name }}</td>
                                                                    <td>{{ $order->no_hp }}</td>
                                                                    <td>{{ $order->date }}</td>
                                                                    <td>{{ $order->time }}</td>
                                                                    <td>{{ $order->people }}</td>
                                                                    @if ($order->status == 1)
                                                                        <td class="text-center">
                                                                            <div class="status-pill red"
                                                                                data-title="Not yet paid"
                                                                                data-toggle="tooltip"></div>
                                                                        </td>
                                                                    @elseif($order->status == 2)
                                                                        <td class="text-center">
                                                                            <div class="status-pill yellow"
                                                                                data-title="Pending"
                                                                                data-toggle="tooltip"></div>
                                                                        </td>
                                                                    @else
                                                                        <td class="text-center">
                                                                            <div class="status-pill green"
                                                                                data-title="Success"
                                                                                data-toggle="tooltip"></div>
                                                                        </td>
                                                                    @endif
                                                                    <td class="row-actions" style="float : left;">
                                                                        <a data-target="#editModal{{ $order->id }}"
                                                                            data-toggle="modal">
                                                                            <i class="os-icon os-icon-ui-49 editModal"
                                                                                style="color: blue"></i>
                                                                        </a>

                                                                        <a data-target="#showModal{{ $order->id }}"
                                                                            data-toggle="modal">
                                                                            <i class="os-icon os-icon-grid-10 showModal"
                                                                                style="color: green"></i>
                                                                        </a>

                                                                        <form action="/admin/order/{{ $order->id }}"
                                                                            method="post" class="d-inline">
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
                                    <!-- end status 1 -->
                                </div>
                                <div class="tab-pane fade" id="check-tab-pane" role="tabpanel"
                                    aria-labelledby="profile-tab" tabindex="0">
                                    <!--status 2 -->
                                    <div class="element-box">
                                        <h5 class="form-header">Check payment</h5>
                                        <div class="table-responsive">
                                            <table id="dataTable2" width="100%"
                                                class="table table-striped table-lightfont">
                                                <thead>
                                                    <tr>
                                                        <th>Code</th>
                                                        <th>Name / Person</th>
                                                        <th>Phone</th>
                                                        <th>Start date</th>
                                                        <th>Time</th>
                                                        <th>People</th>
                                                        <th>Status</th>
                                                        <th>Check</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>Code</th>
                                                        <th>Name / Person</th>
                                                        <th>Phone</th>
                                                        <th>Start date</th>
                                                        <th>Time</th>
                                                        <th>People</th>
                                                        <th>Status</th>
                                                        <th>Check</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </tfoot>

                                                <tbody>
                                                    @foreach ($order2 as $order)
                                                        <!-- Modal edit -->
                                                        <div aria-hidden="true" aria-labelledby="editModalLabel"
                                                            class="modal fade" id="editModalCheck{{ $order->id }}"
                                                            role="dialog" tabindex="-1">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="editModalLabel">Edit
                                                                            Order</h5>
                                                                        <button aria-label="Close" type="button"
                                                                            class="close" data-dismiss="modal"><span
                                                                                aria-hidden="true"> &times;</span></button>
                                                                    </div>


                                                                    <form action="/admin/order/{{ $order->id }}"
                                                                        method="POST" enctype="multipart/form-data">
                                                                        @method('put')
                                                                        @csrf
                                                                        <div class="modal-body">
                                                                            <div class="form-group">
                                                                                <label for="">Name</label>
                                                                                <input type="text" name="name"
                                                                                    class="form-control @error('name') is-invalid @enderror"
                                                                                    placeholder="Name" id="name"
                                                                                    required autofocus
                                                                                    value="{{ old('name', $order->name) }}">
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <label for="">Start Date</label>
                                                                                <input type="date" name="date"
                                                                                    class="form-control @error('date') is-invalid @enderror"
                                                                                    placeholder="Start Date" required
                                                                                    autofocus
                                                                                    value="{{ old('date', $order->date) }}">
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <label for="">Time</label>
                                                                                <input type="time" name="time"
                                                                                    class="form-control @error('time') is-invalid @enderror"
                                                                                    placeholder="Time" required autofocus
                                                                                    value="{{ old('time', $order->time) }}">
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <label for="">People</label>
                                                                                <input type="number" name="people"
                                                                                    class="form-control @error('people') is-invalid @enderror"
                                                                                    placeholder="people" required autofocus
                                                                                    value="{{ old('people', $order->people) }}">
                                                                            </div>

                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary"
                                                                                data-dismiss="modal">Close</button>
                                                                            <button type="submit"
                                                                                class="btn btn-primary">Update</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Modal edit-->

                                                        <!-- Modal Check Payment -->
                                                        <div aria-hidden="true" aria-labelledby="buttonModalLabel"
                                                            class="modal fade" id="buttonModal{{ $order->id }}"
                                                            role="dialog" tabindex="-1">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="buttonModalLabel">
                                                                            Check Payment</h5>
                                                                        <button aria-label="Close" type="button"
                                                                            class="close" data-dismiss="modal"><span
                                                                                aria-hidden="true"> &times;</span></button>
                                                                    </div>


                                                                    <div class="modal-body">
                                                                        <form action="/order/check/{{ $order->id }}"
                                                                            method="POST" enctype="multipart/form-data">
                                                                            @method('put')
                                                                            @csrf
                                                                            <input type="hidden" name="id"
                                                                                value="{{ $order->id }}">
                                                                            {{-- <input type="hidden" name="status" value="{{ 3 }}"> --}}
                                                                            <div class="form-group">
                                                                                <img src="{{ asset('storage/' . $order->image) }}"
                                                                                    class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                                                            </div>

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Cancel</button>
                                                                        <button type="submit"
                                                                            class="btn btn-primary">Confirm</button>
                                                                    </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Modal Check Payment-->

                                                        <!-- Modal show -->
                                                        <div aria-hidden="true" aria-labelledby="showModalLabel"
                                                            class="modal fade" id="modalShowCheck{{ $order->id }}"
                                                            role="dialog" tabindex="-1">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="showModalLabel">Show
                                                                            Order</h5>
                                                                        <button aria-label="Close" type="button"
                                                                            class="close" data-dismiss="modal"><span
                                                                                aria-hidden="true"> &times;</span></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <ul class="list-group">
                                                                            <li class="list-group-item"><b>Code :
                                                                                {{ $order->code }}</b></li>
                                                                            <li class="list-group-item">Name :
                                                                                {{ $order->name }}</li>
                                                                            <li class="list-group-item">Email :
                                                                                {{ $order->email }}</li>
                                                                            <li class="list-group-item">Phone :
                                                                                {{ $order->no_hp }}</li>
                                                                            <li class="list-group-item">People :
                                                                                {{ $order->people }} people</li>
                                                                            <li class="list-group-item">Time :
                                                                                {{ $order->time }}</li>
                                                                            <li class="list-group-item">Date :
                                                                                {{ $order->date }}</li>
                                                                            <li class="list-group-item">Message :
                                                                                {{ $order->message }}</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <!-- End Modal show-->
                                                            </div>
                                                        </div>

                                                        <tr>
                                                            <td><b>{{ $order->code }}</b></td>
                                                            <td>{{ $order->name }}</td>
                                                            <td>{{ $order->no_hp }}</td>
                                                            <td>{{ $order->date }}</td>
                                                            <td>{{ $order->time }}</td>
                                                            <td>{{ $order->people }}</td>
                                                            @if ($order->status == 1)
                                                                <td class="text-center">
                                                                    <div class="status-pill red" data-title="Not yet paid"
                                                                        data-toggle="tooltip"></div>
                                                                </td>
                                                            @elseif($order->status == 2)
                                                                <td class="text-center">
                                                                    <div class="status-pill yellow" data-title="Pending"
                                                                        data-toggle="tooltip"></div>
                                                                </td>
                                                            @else
                                                                <td class="text-center">
                                                                    <div class="status-pill green" data-title="Success"
                                                                        data-toggle="tooltip"></div>
                                                                </td>
                                                            @endif
                                                            <td><button class="btn btn-sm btn-primary" data-toggle="modal"
                                                                    data-target="#buttonModal{{ $order->id }}">Check</button>
                                                            </td>
                                                            {{-- <td> <a href="" data-target="#buttonModal{{ $order->id }}" data-toggle="modal"><button class="btn btn-primary"></button></a></td> --}}
                                                            <td class="row-actions" style="float : left;">
                                                                <a data-target="#editModalCheck{{ $order->id }}"
                                                                    data-toggle="modal">
                                                                    <i class="os-icon os-icon-ui-49 editModal"
                                                                        style="color: blue"></i>
                                                                </a>

                                                                <a data-target="#modalShowCheck{{ $order->id }}"
                                                                    data-toggle="modal">
                                                                    <i class="os-icon os-icon-grid-10 showModal"
                                                                        style="color: green"></i>
                                                                </a>

                                                                <form action="/admin/order/{{ $order->id }}"
                                                                    method="post" class="d-inline">
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
                                    <!-- end status 2 -->
                                </div>
                                <div class="tab-pane fade" id="success-tab-pane" role="tabpanel"
                                    aria-labelledby="contact-tab" tabindex="0">
                                    <!-- status3 -->
                                    <div class="element-box">
                                        <h5 class="form-header">Success</h5>
                                        <div class="table-responsive">
                                            <table id="dataTable3" width="100%"
                                                class="table table-striped table-lightfont">
                                                <thead>
                                                    <tr>
                                                        <th>Code</th>
                                                        <th>Name / Person</th>
                                                        <th>Phone</th>
                                                        <th>Start date</th>
                                                        <th>Time</th>
                                                        <th>People</th>
                                                        <th>Status</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>Code</th>
                                                        <th>Name / Person</th>
                                                        <th>Phone</th>
                                                        <th>Start date</th>
                                                        <th>Time</th>
                                                        <th>People</th>
                                                        <th>Status</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </tfoot>

                                                <tbody>
                                                    @foreach ($order3 as $order)
                                                        <!-- Modal edit -->

                                                        <div aria-hidden="true" aria-labelledby="editModalLabel"
                                                            class="modal fade" id="editModalSuccess{{ $order->id }}"
                                                            role="dialog" tabindex="-1">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="editModalLabel">Edit
                                                                            Order</h5>
                                                                        <button aria-label="Close" type="button"
                                                                            class="close" data-dismiss="modal"><span
                                                                                aria-hidden="true"> &times;</span></button>
                                                                    </div>


                                                                    <div class="modal-body">
                                                                        <form action="/admin/order/{{ $order->id }}"
                                                                            method="POST" enctype="multipart/form-data">


                                                                            @method('put')
                                                                            @csrf
                                                                            <div class="form-group">
                                                                                <label for="">Name</label>
                                                                                <input type="text" name="name"
                                                                                    class="form-control @error('name') is-invalid @enderror"
                                                                                    placeholder="Name" id="name"
                                                                                    required autofocus
                                                                                    value="{{ old('name', $order->name) }}">
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <label for="">Start Date</label>
                                                                                <input type="date" name="date"
                                                                                    class="form-control @error('date') is-invalid @enderror"
                                                                                    placeholder="Start Date" required
                                                                                    autofocus
                                                                                    value="{{ old('date', $order->date) }}">
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <label for="">Time</label>
                                                                                <input type="time" name="time"
                                                                                    class="form-control @error('time') is-invalid @enderror"
                                                                                    placeholder="Time" required autofocus
                                                                                    value="{{ old('time', $order->time) }}">
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <label for="">People</label>
                                                                                <input type="number" name="people"
                                                                                    class="form-control @error('people') is-invalid @enderror"
                                                                                    placeholder="people" required autofocus
                                                                                    value="{{ old('people', $order->people) }}">
                                                                            </div>

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Close</button>
                                                                        <button type="submit"
                                                                            class="btn btn-primary">Update</button>
                                                                    </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Modal edit-->

                                                        <!-- Modal show -->
                                                        <div aria-hidden="true" aria-labelledby="showModalLabel"
                                                            class="modal fade" id="showModalCheck{{ $order->id }}"
                                                            role="dialog" tabindex="-1">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="showModalLabel">Show
                                                                            Order</h5>
                                                                        <button aria-label="Close" type="button"
                                                                            class="close" data-dismiss="modal"><span
                                                                                aria-hidden="true"> &times;</span></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <ul class="list-group">
                                                                            <li class="list-group-item"><b>Code :
                                                                                {{ $order->code }}</b></li>
                                                                            <li class="list-group-item">Name :
                                                                                {{ $order->name }}</li>
                                                                            <li class="list-group-item">Email :
                                                                                {{ $order->email }}</li>
                                                                            <li class="list-group-item">Phone :
                                                                                {{ $order->no_hp }}</li>
                                                                            <li class="list-group-item">People :
                                                                                {{ $order->people }} people</li>
                                                                            <li class="list-group-item">Time :
                                                                                {{ $order->time }}</li>
                                                                            <li class="list-group-item">Date :
                                                                                {{ $order->date }}</li>
                                                                            <li class="list-group-item">Message :
                                                                                {{ $order->message }}</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <!-- End Modal show-->


                                                                <tr>
                                                                    <td><b>{{ $order->code }}</b></td>
                                                                    <td>{{ $order->name }}</td>
                                                                    <td>{{ $order->no_hp }}</td>
                                                                    <td>{{ $order->date }}</td>
                                                                    <td>{{ $order->time }}</td>
                                                                    <td>{{ $order->people }}</td>
                                                                    @if ($order->status == 1)
                                                                        <td class="text-center">
                                                                            <div class="status-pill red"
                                                                                data-title="Not yet paid"
                                                                                data-toggle="tooltip"></div>
                                                                        </td>
                                                                    @elseif($order->status == 2)
                                                                        <td class="text-center">
                                                                            <div class="status-pill yellow"
                                                                                data-title="Pending"
                                                                                data-toggle="tooltip"></div>
                                                                        </td>
                                                                    @else
                                                                        <td class="text-center">
                                                                            <div class="status-pill green"
                                                                                data-title="Success"
                                                                                data-toggle="tooltip"></div>
                                                                        </td>
                                                                    @endif
                                                                    <td class="row-actions" style="float : left;">
                                                                        <a data-target="#editModalSuccess{{ $order->id }}"
                                                                            data-toggle="modal">
                                                                            <i class="os-icon os-icon-ui-49 editModal"
                                                                                style="color: blue"></i>
                                                                        </a>

                                                                        <a data-target="#showModalCheck{{ $order->id }}"
                                                                            data-toggle="modal">
                                                                            <i class="os-icon os-icon-grid-10 showModal"
                                                                                style="color: green"></i>
                                                                        </a>

                                                                        <form action="/admin/order/{{ $order->id }}"
                                                                            method="post" class="d-inline">
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
                                    <!-- end status 3 -->
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
