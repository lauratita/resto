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
                                        <table id="dataTable1" width="100%" class="table table-striped table-lightfont">
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
                                            <tfoot>
                                                <tr>
                                                    <th>Id Order</th>
                                                    <th>Name / Person</th>
                                                    <th>Phone</th>
                                                    <th>Start date</th>
                                                    <th>Time</th>
                                                    <th>People</th>
                                                </tr>
                                            </tfoot>

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
                            <div class="d-none d-xxxl-block col-xxxl-6">
                                <div class="element-wrapper">
                                    <div class="element-actions">
                                        <form class="form-inline justify-content-sm-end">
                                            <select class="form-control form-control-sm rounded">
                                                <option value="Pending">Today</option>
                                                <option value="Active">Last Week</option>
                                                <option value="Cancelled">Last 30 Days</option>
                                            </select>
                                        </form>
                                    </div>
                                    <h6 class="element-header">Inventory Stats</h6>
                                    <div class="element-box">
                                        <div class="os-progress-bar primary">
                                            <div class="bar-labels">
                                                <div class="bar-label-left"><span class="bigger">Eyeglasses</span></div>
                                                <div class="bar-label-right"><span class="info">25 items / 10
                                                        remaining</span></div>
                                            </div>
                                            <div class="bar-level-1" style="width: 100%">
                                                <div class="bar-level-2" style="width: 70%">
                                                    <div class="bar-level-3" style="width: 40%"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="os-progress-bar primary">
                                            <div class="bar-labels">
                                                <div class="bar-label-left"><span class="bigger">Outwear</span></div>
                                                <div class="bar-label-right"><span class="info">18 items / 7
                                                        remaining</span></div>
                                            </div>
                                            <div class="bar-level-1" style="width: 100%">
                                                <div class="bar-level-2" style="width: 40%">
                                                    <div class="bar-level-3" style="width: 20%"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="os-progress-bar primary">
                                            <div class="bar-labels">
                                                <div class="bar-label-left"><span class="bigger">Shoes</span></div>
                                                <div class="bar-label-right"><span class="info">15 items / 12
                                                        remaining</span></div>
                                            </div>
                                            <div class="bar-level-1" style="width: 100%">
                                                <div class="bar-level-2" style="width: 60%">
                                                    <div class="bar-level-3" style="width: 30%"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="os-progress-bar primary">
                                            <div class="bar-labels">
                                                <div class="bar-label-left"><span class="bigger">Jeans</span></div>
                                                <div class="bar-label-right"><span class="info">12 items / 4
                                                        remaining</span></div>
                                            </div>
                                            <div class="bar-level-1" style="width: 100%">
                                                <div class="bar-level-2" style="width: 30%">
                                                    <div class="bar-level-3" style="width: 10%"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4 border-top pt-3">
                                            <div class="element-actions d-none d-sm-block">
                                                <form class="form-inline justify-content-sm-end">
                                                    <select class="form-control form-control-sm form-control-faded">
                                                        <option selected="true">Last 30 days</option>
                                                        <option>This Week</option>
                                                        <option>This Month</option>
                                                        <option>Today</option>
                                                    </select>
                                                </form>
                                            </div>
                                            <h6 class="element-box-header">Inventory History</h6>
                                            <div class="el-chart-w"><canvas
                                                    data-chart-data="13,28,19,24,43,49,40,35,42,46,38,32,45"
                                                    height="50" id="liteLineChartV3" width="300"></canvas></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- recent order -->
                        <div class="row">
                            <div class="col-sm-12">
                            </div>
                        </div>
                        <!-- Mode gelap -->
                        <div class="floated-colors-btn second-floated-btn">
                            <div class="os-toggler-w">
                                <div class="os-toggler-i">
                                    <div class="os-toggler-pill"></div>
                                </div>
                            </div>
                            <span>Dark </span><span>Colors</span>
                        </div>
                        <!-- customizer -->
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
