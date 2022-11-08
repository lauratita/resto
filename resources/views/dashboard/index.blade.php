@extends('dashboard.layouts.main')
@section('container')
    <div class="all-wrapper with-side-panel solid-bg-all">
        <!-- Modal start -->

        <!-- End Modal -->
        <div class="layout-w">
            @include('dashboard.partials.sidebar')
            <div class="content-w">
                @include('dashboard.partials.navbar')
                <div class="content-panel-toggler"><i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span>
                </div>
                <div class="content-i">
                    <div class="content-box">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="element-wrapper">
                                    
                                    <h6 class="element-header">Sales Dashboard</h6>
                                    <!-- cards -->
                                    <div class="element-content">
                                        <div class="row">
                                            <div class="col-sm-4 col-xxxl-3">
                                                <a class="element-box el-tablo">
                                                    <div class="label">LIst Order</div>
                                                    <div class="value">{{ $count_list }}</div>
                                                </a>
                                            </div>
                                            <div class="col-sm-4 col-xxxl-3">
                                                <a class="element-box el-tablo">
                                                    <div class="label">Check Order</div>
                                                    <div class="value">{{ $count_check }}</div>
                                                </a>
                                            </div>
                                            <div class="col-sm-4 col-xxxl-3">
                                                <a class="element-box el-tablo">
                                                    <div class="label">Success Order</div>
                                                    <div class="value">{{ $count_success }}</div>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- New Order -->
                        <div class="row">
                            <div class="col-sm-12 col-xxxl-6">
                                <div class="element-box">
                                    <h5 class="form-header">New Order</h5>
                                    <div class="table-responsive">
                                        <table width="100%" class="table table-striped table-lightfont">
                                            <thead>
                                                <tr>
                                                    <th>Id Order</th>
                                                    <th>Name / Person</th>
                                                    <th>Phone</th>
                                                    <th>Start date</th>
                                                    <th>Time</th>
                                                    <th>People</th>
                                                </tr>
                                            </thead>
                                            

                                            <tbody>
                                                @foreach ($orders as $order)
                                                    <tr>
                                                        <td>{{ $order->id }}</td>
                                                        <td>{{ $order->name }}</td>
                                                        <td>{{ $order->no_hp }}</td>
                                                        <td>{{ $order->date }}</td>
                                                        <td>{{ $order->time }}</td>
                                                        <td>{{ $order->people }}</td>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="content-panel">
                        <div class="content-panel-close"><i class="os-icon os-icon-close"></i></div>
                        <div class="element-wrapper">
                            <h6 class="element-header">Quick Links</h6>
                            <div class="element-box-tp">
                                <div class="el-buttons-list full-width">
                                    <a class="btn btn-white btn-sm" href="/admin/menu"><i
                                            class="os-icon os-icon-delivery-box-2"></i><span>List
                                            Menu</span></a><a class="btn btn-white btn-sm" href="/admin/order"><i
                                            class="os-icon os-icon-window-content"></i><span>List Orders</span></a><a
                                        class="btn btn-white btn-sm" href="#"><i
                                            class="os-icon os-icon-wallet-loaded"></i><span>Set Gallery</span></a>
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
