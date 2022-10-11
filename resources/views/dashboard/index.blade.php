@extends('dashboard.layouts.main')
@section('container')
    <div class="all-wrapper with-side-panel solid-bg-all">
        <!-- Modal start -->
        <div aria-hidden="true" class="onboarding-modal modal fade animated show-on-load" role="dialog" tabindex="-1">
            <div class="modal-dialog modal-centered" role="document">
                <div class="modal-content text-center">
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span
                            class="close-label">Skip Intro</span><span class="os-icon os-icon-close"></span></button>
                    <div class="onboarding-slider-w">
                        <div class="onboarding-slide">
                            <div class="onboarding-media"><img alt="" src="/images/bigicon2.png" width="200px" />
                            </div>
                            <div class="onboarding-content with-gradient">
                                <h4 class="onboarding-title"> !</h4>
                                <div class="onboarding-text">This is an example of a multistep onboarding screen, you can
                                    use it to introduce your customers to your app, or collect additional information from
                                    them before they start using your app.</div>
                            </div>
                        </div>
                        <div class="onboarding-slide">
                            <div class="onboarding-media"><img alt="" src="/images/bigicon5.png" width="200px" />
                            </div>
                            <div class="onboarding-content with-gradient">
                                <h4 class="onboarding-title">Example Request Information</h4>
                                <div class="onboarding-text">In this example you can see a form where you can request some
                                    additional information from the customer when they land on the app page.</div>
                                <form>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group"><label for="">Your Full Name</label><input
                                                    class="form-control" placeholder="Enter your full name..."
                                                    value="" /></div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="">Your Role</label><select class="form-control">
                                                    <option>Web Developer</option>
                                                    <option>Business Owner</option>
                                                    <option>Other</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="onboarding-slide">
                            <div class="onboarding-media"><img alt="" src="/images/bigicon6.png" width="200px" />
                            </div>
                            <div class="onboarding-content with-gradient">
                                <h4 class="onboarding-title">Showcase App Features</h4>
                                <div class="onboarding-text">In this example you can showcase some of the features of your
                                    application, it is very handy to make new users aware of your hidden features. You can
                                    use boostrap columns to split them up.</div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="features-list">
                                            <li>Fully Responsive design</li>
                                            <li>Pre-built app layouts</li>
                                            <li>Incredible Flexibility</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="features-list">
                                            <li>Boxed & Full Layouts</li>
                                            <li>Based on Bootstrap 4</li>
                                            <li>Developer Friendly</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                                    <div class="element-actions">
                                        <form class="form-inline justify-content-sm-end">
                                            <select class="form-control form-control-sm">
                                                <option value="Pending">Today</option>
                                                <option value="Active">Last Week</option>
                                                <option value="Cancelled">Last 30 Days</option>
                                            </select>
                                        </form>
                                    </div>
                                    <h6 class="element-header">Sales Dashboard</h6>
                                    <!-- cards -->
                                    <div class="element-content">
                                        <div class="row">
                                            <div class="col-sm-4 col-xxxl-3">
                                                <a class="element-box el-tablo" href="#">
                                                    <div class="label">Products Sold</div>
                                                    <div class="value">57</div>
                                                    <div class="trending trending-up-basic"><span>12%</span><i
                                                            class="os-icon os-icon-arrow-up2"></i></div>
                                                </a>
                                            </div>
                                            <div class="col-sm-4 col-xxxl-3">
                                                <a class="element-box el-tablo" href="#">
                                                    <div class="label">Gross Profit</div>
                                                    <div class="value">$457</div>
                                                    <div class="trending trending-down-basic"><span>12%</span><i
                                                            class="os-icon os-icon-arrow-down"></i></div>
                                                </a>
                                            </div>
                                            <div class="col-sm-4 col-xxxl-3">
                                                <a class="element-box el-tablo" href="#">
                                                    <div class="label">New Customers</div>
                                                    <div class="value">125</div>
                                                    <div class="trending trending-down-basic"><span>9%</span><i
                                                            class="os-icon os-icon-arrow-down"></i></div>
                                                </a>
                                            </div>
                                            <div class="d-none d-xxxl-block col-xxxl-3">
                                                <a class="element-box el-tablo" href="#">
                                                    <div class="label">Refunds Processed</div>
                                                    <div class="value">$294</div>
                                                    <div class="trending trending-up-basic"><span>12%</span><i
                                                            class="os-icon os-icon-arrow-up2"></i></div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- New Order -->
                        <div class="row">
                            <div class="col-sm-8 col-xxxl-6">
                                <div class="element-wrapper">
                                    <h6 class="element-header">New Orders</h6>
                                    <div class="element-box">
                                        <div class="table-responsive">
                                            <table class="table table-lightborder">
                                                <thead>
                                                    <tr>
                                                        <th>Customer</th>
                                                        <th>Products</th>
                                                        <th class="text-center">Status</th>
                                                        <th class="text-right">Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="nowrap">John Mayers</td>
                                                        <td>
                                                            <div class="cell-image-list">
                                                                <div class="cell-img"
                                                                    style="background-image: url(/images/portfolio9.jpg)">
                                                                </div>
                                                                <div class="cell-img"
                                                                    style="background-image: url(/images/portfolio2.jpg)">
                                                                </div>
                                                                <div class="cell-img"
                                                                    style="background-image: url(/images/portfolio12.jpg)">
                                                                </div>
                                                                <div class="cell-img-more">+ 5 more</div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="status-pill green" data-title="Complete"
                                                                data-toggle="tooltip"></div>
                                                        </td>
                                                        <td class="text-right">$354</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="nowrap">Kelly Brans</td>
                                                        <td>
                                                            <div class="cell-image-list">
                                                                <div class="cell-img"
                                                                    style="background-image: url(/images/portfolio14.jpg)">
                                                                </div>
                                                                <div class="cell-img"
                                                                    style="background-image: url(/images/portfolio8.jpg)">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="status-pill red" data-title="Cancelled"
                                                                data-toggle="tooltip"></div>
                                                        </td>
                                                        <td class="text-right">$94</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="nowrap">Tim Howard</td>
                                                        <td>
                                                            <div class="cell-image-list">
                                                                <div class="cell-img"
                                                                    style="background-image: url(/images/portfolio16.jpg)">
                                                                </div>
                                                                <div class="cell-img"
                                                                    style="background-image: url(/images/portfolio14.jpg)">
                                                                </div>
                                                                <div class="cell-img"
                                                                    style="background-image: url(/images/portfolio5.jpg)">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="status-pill green" data-title="Complete"
                                                                data-toggle="tooltip"></div>
                                                        </td>
                                                        <td class="text-right">$156</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="nowrap">Joe Trulli</td>
                                                        <td>
                                                            <div class="cell-image-list">
                                                                <div class="cell-img"
                                                                    style="background-image: url(/images/portfolio1.jpg)">
                                                                </div>
                                                                <div class="cell-img"
                                                                    style="background-image: url(/images/portfolio5.jpg)">
                                                                </div>
                                                                <div class="cell-img"
                                                                    style="background-image: url(/images/portfolio6.jpg)">
                                                                </div>
                                                                <div class="cell-img-more">+ 2 more</div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="status-pill yellow" data-title="Pending"
                                                                data-toggle="tooltip"></div>
                                                        </td>
                                                        <td class="text-right">$1,120</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="nowrap">Jerry Lingard</td>
                                                        <td>
                                                            <div class="cell-image-list">
                                                                <div class="cell-img"
                                                                    style="background-image: url(/images/portfolio9.jpg)">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="status-pill green" data-title="Complete"
                                                                data-toggle="tooltip"></div>
                                                        </td>
                                                        <td class="text-right">$856</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 d-xxxl-none">
                                <div class="element-wrapper">
                                    <h6 class="element-header">Top Selling Today</h6>
                                    <div class="element-box">
                                        <div class="el-chart-w">
                                            <canvas height="120" id="donutChart" width="120"></canvas>
                                            <div class="inside-donut-chart-label"><strong>142</strong><span>Total
                                                    Orders</span></div>
                                        </div>
                                        <div class="el-legend condensed">
                                            <div class="row">
                                                <div class="col-auto col-xxxxl-6 ml-sm-auto mr-sm-auto col-6">
                                                    <div class="legend-value-w">
                                                        <div class="legend-pin legend-pin-squared"
                                                            style="background-color: #6896f9"></div>
                                                        <div class="legend-value">
                                                            <span>Prada</span>
                                                            <div class="legend-sub-value">14 Pairs</div>
                                                        </div>
                                                    </div>
                                                    <div class="legend-value-w">
                                                        <div class="legend-pin legend-pin-squared"
                                                            style="background-color: #85c751"></div>
                                                        <div class="legend-value">
                                                            <span>Maui Jim</span>
                                                            <div class="legend-sub-value">26 Pairs</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6 d-lg-none d-xxl-block">
                                                    <div class="legend-value-w">
                                                        <div class="legend-pin legend-pin-squared"
                                                            style="background-color: #806ef9"></div>
                                                        <div class="legend-value">
                                                            <span>Gucci</span>
                                                            <div class="legend-sub-value">17 Pairs</div>
                                                        </div>
                                                    </div>
                                                    <div class="legend-value-w">
                                                        <div class="legend-pin legend-pin-squared"
                                                            style="background-color: #d97b70"></div>
                                                        <div class="legend-value">
                                                            <span>Armani</span>
                                                            <div class="legend-sub-value">12 Pairs</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                                <div class="element-wrapper">
                                    <h6 class="element-header">Recent Orders</h6>
                                    <div class="element-box-tp">
                                        <div class="controls-above-table">
                                            <div class="row">
                                                <div class="col-sm-6"><a class="btn btn-sm btn-secondary"
                                                        href="#">Download CSV</a><a class="btn btn-sm btn-secondary"
                                                        href="#">Archive</a><a class="btn btn-sm btn-danger"
                                                        href="#">Delete</a></div>
                                                <div class="col-sm-6">
                                                    <form class="form-inline justify-content-sm-end">
                                                        <input class="form-control form-control-sm rounded bright"
                                                            placeholder="Search" /><select
                                                            class="form-control form-control-sm rounded bright">
                                                            <option selected="selected" value="">Select Status
                                                            </option>
                                                            <option value="Pending">Pending</option>
                                                            <option value="Active">Active</option>
                                                            <option value="Cancelled">Cancelled</option>
                                                        </select>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-lg table-v2 table-striped">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center"><input class="form-control"
                                                                type="checkbox" /></th>
                                                        <th>Customer Name</th>
                                                        <th>Country</th>
                                                        <th>Order Total</th>
                                                        <th>Referral</th>
                                                        <th>Status</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center"><input class="form-control"
                                                                type="checkbox" /></td>
                                                        <td>John Mayers</td>
                                                        <td><img alt="" src="/images/flags-icons/us.png"
                                                                width="25px" /></td>
                                                        <td class="text-right">$245</td>
                                                        <td>Organic</td>
                                                        <td class="text-center">
                                                            <div class="status-pill green" data-title="Complete"
                                                                data-toggle="tooltip"></div>
                                                        </td>
                                                        <td class="row-actions">
                                                            <a href="#"><i class="os-icon os-icon-ui-49"></i></a><a
                                                                href="#"><i
                                                                    class="os-icon os-icon-grid-10"></i></a><a
                                                                class="danger" href="#"><i
                                                                    class="os-icon os-icon-ui-15"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center"><input class="form-control"
                                                                type="checkbox" /></td>
                                                        <td>Mike Astone</td>
                                                        <td><img alt="" src="/images/flags-icons/fr.png"
                                                                width="25px" /></td>
                                                        <td class="text-right">$154</td>
                                                        <td>Organic</td>
                                                        <td class="text-center">
                                                            <div class="status-pill red" data-title="Cancelled"
                                                                data-toggle="tooltip"></div>
                                                        </td>
                                                        <td class="row-actions">
                                                            <a href="#"><i class="os-icon os-icon-ui-49"></i></a><a
                                                                href="#"><i
                                                                    class="os-icon os-icon-grid-10"></i></a><a
                                                                class="danger" href="#"><i
                                                                    class="os-icon os-icon-ui-15"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center"><input class="form-control"
                                                                type="checkbox" /></td>
                                                        <td>Kira Knight</td>
                                                        <td><img alt="" src="/images/flags-icons/us.png"
                                                                width="25px" /></td>
                                                        <td class="text-right">$23</td>
                                                        <td>Adwords</td>
                                                        <td class="text-center">
                                                            <div class="status-pill green" data-title="Complete"
                                                                data-toggle="tooltip"></div>
                                                        </td>
                                                        <td class="row-actions">
                                                            <a href="#"><i class="os-icon os-icon-ui-49"></i></a><a
                                                                href="#"><i
                                                                    class="os-icon os-icon-grid-10"></i></a><a
                                                                class="danger" href="#"><i
                                                                    class="os-icon os-icon-ui-15"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center"><input class="form-control"
                                                                type="checkbox" /></td>
                                                        <td>Jessica Bloom</td>
                                                        <td><img alt="" src="/images/flags-icons/ca.png"
                                                                width="25px" /></td>
                                                        <td class="text-right">$112</td>
                                                        <td>Organic</td>
                                                        <td class="text-center">
                                                            <div class="status-pill green" data-title="Complete"
                                                                data-toggle="tooltip"></div>
                                                        </td>
                                                        <td class="row-actions">
                                                            <a href="#"><i class="os-icon os-icon-ui-49"></i></a><a
                                                                href="#"><i
                                                                    class="os-icon os-icon-grid-10"></i></a><a
                                                                class="danger" href="#"><i
                                                                    class="os-icon os-icon-ui-15"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center"><input class="form-control"
                                                                type="checkbox" /></td>
                                                        <td>Gary Lineker</td>
                                                        <td><img alt="" src="/images/flags-icons/ca.png"
                                                                width="25px" /></td>
                                                        <td class="text-right">$64</td>
                                                        <td>Organic</td>
                                                        <td class="text-center">
                                                            <div class="status-pill yellow" data-title="Pending"
                                                                data-toggle="tooltip"></div>
                                                        </td>
                                                        <td class="row-actions">
                                                            <a href="#"><i class="os-icon os-icon-ui-49"></i></a><a
                                                                href="#"><i
                                                                    class="os-icon os-icon-grid-10"></i></a><a
                                                                class="danger" href="#"><i
                                                                    class="os-icon os-icon-ui-15"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="controls-below-table">
                                            <div class="table-records-info">Showing records 1 - 5</div>
                                            <div class="table-records-pages">
                                                <ul>
                                                    <li><a href="#">Previous</a></li>
                                                    <li><a class="current" href="#">1</a></li>
                                                    <li><a href="#">2</a></li>
                                                    <li><a href="#">3</a></li>
                                                    <li><a href="#">4</a></li>
                                                    <li><a href="#">Next</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                    <a class="btn btn-white btn-sm" href="#"><i
                                            class="os-icon os-icon-delivery-box-2"></i><span>Create New
                                            Product</span></a><a class="btn btn-white btn-sm" href="#"><i
                                            class="os-icon os-icon-window-content"></i><span>Customer Comments</span></a><a
                                        class="btn btn-white btn-sm" href="#"><i
                                            class="os-icon os-icon-wallet-loaded"></i><span>Store Settings</span></a>
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
