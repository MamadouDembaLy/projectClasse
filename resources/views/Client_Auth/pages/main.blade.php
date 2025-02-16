@extends('Admin.index')
@section('container')
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Dashboard
                        <small>Bigdeal Admin panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a>
                    </li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-3 col-md-6 xl-50">
            <div class="card o-hidden  widget-cards">
                <div class="bg-secondary card-body">
                    <div class="media static-top-widget">
                        <div class="media-body"><span class="m-0">Products</span>
                            <h3 class="mb-0">$ <span class="counter">9856</span><small> This
                                    Month</small></h3>
                        </div>
                        <div class="icons-widgets">
                            <i data-feather="box"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 xl-50">
            <div class="card o-hidden widget-cards">
                <div class="bg-primary card-body">
                    <div class="media static-top-widget">
                        <div class="media-body"><span class="m-0">Messages</span>
                            <h3 class="mb-0">$ <span class="counter">893</span><small> This
                                    Month</small></h3>
                        </div>
                        <div class="icons-widgets">
                            <i data-feather="message-square"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 xl-50">
            <div class="card o-hidden widget-cards">
                <div class="bg-warning card-body">
                    <div class="media static-top-widget">
                        <div class="media-body"><span class="m-0">Earnings</span>
                            <h3 class="mb-0">$ <span class="counter">6659</span><small> This
                                    Month</small></h3>
                        </div>
                        <div class="icons-widgets">
                            <i data-feather="navigation"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 xl-50">
            <div class="card o-hidden widget-cards">
                <div class="bg-success card-body">
                    <div class="media static-top-widget">
                        <div class="media-body"><span class="m-0">New Vendors</span>
                            <h3 class="mb-0">$ <span class="counter">45631</span><small> This
                                    Month</small></h3>
                        </div>
                        <div class="icons-widgets">
                            <i data-feather="users"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 xl-100">
            <div class="card height-equal">
                <div class="card-header">
                    <h5>Order Activity</h5>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li><i class="icofont icofont-simple-left"></i></li>
                            <li><i class="view-html fa fa-code"></i></li>
                            <li><i class="icofont icofont-maximize full-card"></i></li>
                            <li><i class="icofont icofont-minus minimize-card"></i></li>
                            <li><i class="icofont icofont-refresh reload-card"></i></li>
                            <li><i class="icofont icofont-error close-card"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="order-timeline">
                        <div class="media">
                            <div class="timeline-line"></div>
                            <div class="timeline-icon-primary">
                                <i data-feather="map-pin"></i>
                            </div>
                            <div class="media-body">
                                <span class="font-primary">Delivered</span>
                                <p>56 mins ago</p>
                            </div>
                            <span class="pull-right text-muted">Today</span>
                        </div>
                        <div class="media">
                            <div class="timeline-icon-secondary">
                                <i data-feather="shopping-cart"></i>
                            </div>
                            <div class="media-body">
                                <span class="font-secondary">In Transit</span>
                                <p>18 Hour ago</p>
                            </div>
                            <span class="pull-right text-muted">Yesterday</span>
                        </div>
                        <div class="media">
                            <div class="timeline-icon-warning">
                                <i data-feather="box"></i>
                            </div>
                            <div class="media-body">
                                <span class="font-warning">Dispatched</span>
                                <p>3 Days Ago</p>
                            </div>
                            <span class="pull-right text-muted">12 Sep</span>
                        </div>
                        <div class="media">
                            <div class="timeline-icon-success">
                                <i data-feather="user"></i>
                            </div>
                            <div class="media-body">
                                <span class="font-success">Order Received</span>
                                <p>8 Days Ago</p>
                            </div>
                            <span class="pull-right text-muted">05 Sep</span>
                        </div>
                    </div>
                    <div class="code-box-copy">
                        <button class="code-box-copy__btn btn-clipboard"
                            data-clipboard-target="#example-head4" title=""
                            data-original-title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                        <pre class=" language-html"><code class=" language-html" id="example-head4">
&lt;div class="order-timeline"&gt;
&lt;div class="media"&gt;
&lt;div class="timeline-line"&gt;&lt;/div&gt;
&lt;div class="timeline-icon-primary"&gt;
&lt;i data-feather="map-pin"&gt;&lt;/i&gt;
&lt;/div&gt;
&lt;div class="media-body"&gt;
&lt;span class="font-primary"&gt;Delivered&lt;/span&gt;
&lt;p&gt;56 mins ago&lt;/p&gt;
&lt;/div&gt;
&lt;span class="pull-right text-muted"&gt;Today&lt;/span&gt;
&lt;/div&gt;
&lt;div class="media"&gt;
&lt;div class="timeline-icon-secondary"&gt;
&lt;i data-feather="shopping-cart"&gt;&lt;/i&gt;
&lt;/div&gt;
&lt;div class="media-body"&gt;
&lt;span class="font-secondary"&gt;In Transit&lt;/span&gt;
&lt;p&gt;18 Hour ago&lt;/p&gt;
&lt;/div&gt;
&lt;span class="pull-right text-muted"&gt;Yesterday&lt;/span&gt;
&lt;/div&gt;
&lt;div class="media"&gt;
&lt;div class="timeline-icon-warning"&gt;
&lt;i data-feather="box"&gt;&lt;/i&gt;
&lt;/div&gt;
&lt;div class="media-body"&gt;
&lt;span class="font-warning"&gt;Dispatched&lt;/span&gt;
&lt;p&gt;3 Days Ago&lt;/p&gt;
&lt;/div&gt;
&lt;span class="pull-right text-muted"&gt;12 Sep&lt;/span&gt;
&lt;/div&gt;
&lt;div class="media"&gt;
&lt;div class="timeline-icon-success"&gt;
&lt;i data-feather="user"&gt;&lt;/i&gt;
&lt;/div&gt;
&lt;div class="media-body"&gt;
&lt;span class="font-success"&gt;Order Received&lt;/span&gt;
&lt;p&gt;8 Days Ago&lt;/p&gt;
&lt;/div&gt;
&lt;span class="pull-right text-muted"&gt;05 Sep&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
                    </code></pre>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8 xl-100">
            <div class="card btn-months">
                <div class="card-header">
                    <h5>This Month Revenue</h5>
                    <div class="dashboard-btn-groups">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button class="btn btn-outline-light btn-js" type="button">Day</button>
                            <button class="btn btn-outline-light btn-js" type="button">Week</button>
                            <button class="btn btn-outline-light btn-js active"
                                type="button">Month</button>
                        </div>
                    </div>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li><i class="icofont icofont-simple-left"></i></li>
                            <li><i class="view-html fa fa-code"></i></li>
                            <li><i class="icofont icofont-maximize full-card"></i></li>
                            <li><i class="icofont icofont-minus minimize-card"></i></li>
                            <li><i class="icofont icofont-refresh reload-card"></i></li>
                            <li><i class="icofont icofont-error close-card"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="revenue-chart"></div>
                    <div class="code-box-copy">
                        <button class="code-box-copy__btn btn-clipboard"
                            data-clipboard-target="#example-head8" title=""
                            data-original-title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                        <pre class=" language-html"><code class=" language-html" id="example-head8">
&lt;div class="revenue-chart"&gt;&lt;/div&gt;
                    </code></pre>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 xl-100">
            <div class="card">
                <div class="card-header">
                    <h5>Product Value</h5>
                    <div class="chart-value-box pull-right">
                        <div class="value-square-box-success"></div><span
                            class="f-12 f-w-600">Physical</span>
                        <div class="value-square-box-secondary ms-3"></div><span
                            class="f-12 f-w-600">Digital</span>
                    </div>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li><i class="icofont icofont-simple-left"></i></li>
                            <li><i class="view-html fa fa-code"></i></li>
                            <li><i class="icofont icofont-maximize full-card"></i></li>
                            <li><i class="icofont icofont-minus minimize-card"></i></li>
                            <li><i class="icofont icofont-refresh reload-card"></i></li>
                            <li><i class="icofont icofont-error close-card"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="market-chart"></div>
                    <div class="code-box-copy">
                        <button class="code-box-copy__btn btn-clipboard"
                            data-clipboard-target="#example-head" title="Copy"><i
                                class="icofont icofont-copy-alt"></i></button>
                        <pre><code class="language-html" id="example-head">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="market-chart"&gt;&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 xl-100">
            <div class="card">
                <div class="card-header">
                    <h5>Latest Orders</h5>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li><i class="icofont icofont-simple-left"></i></li>
                            <li><i class="view-html fa fa-code"></i></li>
                            <li><i class="icofont icofont-maximize full-card"></i></li>
                            <li><i class="icofont icofont-minus minimize-card"></i></li>
                            <li><i class="icofont icofont-refresh reload-card"></i></li>
                            <li><i class="icofont icofont-error close-card"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="user-status table-responsive latest-order-table">
                        <table class="table table-bordernone">
                            <thead>
                                <tr>
                                    <th scope="col">Order ID</th>
                                    <th scope="col">Order Total</th>
                                    <th scope="col">Payment Method</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="digits">$120.00</td>
                                    <td class="font-danger">Bank Transfers</td>
                                    <td class="digits">On Way</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="digits">$90.00</td>
                                    <td class="font-secondary">Ewallets</td>
                                    <td class="digits">Delivered</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="digits">$240.00</td>
                                    <td class="font-warning">Cash</td>
                                    <td class="digits">Delivered</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="digits">$120.00</td>
                                    <td class="font-danger">Direct Deposit</td>
                                    <td class="digits">$6523</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td class="digits">$50.00</td>
                                    <td class="font-primary">Bank Transfers</td>
                                    <td class="digits">Delivered</td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="order.html" class="btn btn-primary">View All Orders</a>
                    </div>
                    <div class="code-box-copy">
                        <button class="code-box-copy__btn btn-clipboard"
                            data-clipboard-target="#example-head1" title=""
                            data-original-title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                        <pre class=" language-html"><code class=" language-html" id="example-head1">
&lt;div class="user-status table-responsive latest-order-table"&gt;
&lt;table class="table table-bordernone"&gt;
&lt;thead&gt;
&lt;tr&gt;
&lt;th scope="col"&gt;Order ID&lt;/th&gt;
&lt;th scope="col"&gt;Order Total&lt;/th&gt;
&lt;th scope="col"&gt;Payment Method&lt;/th&gt;
&lt;th scope="col"&gt;Status&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;td&gt;1&lt;/td&gt;
&lt;td class="digits"&gt;$120.00&lt;/td&gt;
&lt;td class="font-secondary"&gt;Bank Transfers&lt;/td&gt;
&lt;td class="digits"&gt;Delivered&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;2&lt;/td&gt;
&lt;td class="digits"&gt;$90.00&lt;/td&gt;
&lt;td class="font-secondary"&gt;Ewallets&lt;/td&gt;
&lt;td class="digits"&gt;Delivered&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;3&lt;/td&gt;
&lt;td class="digits"&gt;$240.00&lt;/td&gt;
&lt;td class="font-secondary"&gt;Cash&lt;/td&gt;
&lt;td class="digits"&gt;Delivered&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;4&lt;/td&gt;
&lt;td class="digits"&gt;$120.00&lt;/td&gt;
&lt;td class="font-primary"&gt;Direct Deposit&lt;/td&gt;
&lt;td class="digits"&gt;Delivered&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;5&lt;/td&gt;
&lt;td class="digits"&gt;$50.00&lt;/td&gt;
&lt;td class="font-primary"&gt;Bank Transfers&lt;/td&gt;
&lt;td class="digits"&gt;Delivered&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;
                    </code></pre>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="card btn-months">
                <div class="card-header">
                    <h5>Buy / Sell</h5>
                    <div class="dashboard-btn-groups">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button class="btn btn-outline-light btn-js1" type="button">Day</button>
                            <button class="btn btn-outline-light btn-js1" type="button">Week</button>
                            <button class="btn btn-outline-light btn-js1 active"
                                type="button">Month</button>
                        </div>
                    </div>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li><i class="icofont icofont-simple-left"></i></li>
                            <li><i class="view-html fa fa-code"></i></li>
                            <li><i class="icofont icofont-maximize full-card"></i></li>
                            <li><i class="icofont icofont-minus minimize-card"></i></li>
                            <li><i class="icofont icofont-refresh reload-card"></i></li>
                            <li><i class="icofont icofont-error close-card"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body sell-graph">
                    <div class="flot-chart-placeholder" id="multiple-real-timeupdate"></div>
                    <div class="code-box-copy">
                        <button class="code-box-copy__btn btn-clipboard"
                            data-clipboard-target="#example-head3" title=""
                            data-original-title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                        <pre class=" language-html"><code class=" language-html" id="example-head3">&lt;div class="card-body sell-graph"&gt;
&lt;canvas id="myGraph"&gt;&lt;/canvas&gt;
&lt;/div&gt;</code></pre>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 xl-50">
            <div class="card customers-card">
                <div class="card-header">
                    <h5>New Customers</h5>
                    <div class="chart-value-box pull-right">
                        <div class="value-square-box-secondary"></div><span
                            class="f-12 f-w-600">Customers</span>
                    </div>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li><i class="icofont icofont-simple-left"></i></li>
                            <li><i class="view-html fa fa-code"></i></li>
                            <li><i class="icofont icofont-maximize full-card"></i></li>
                            <li><i class="icofont icofont-minus minimize-card"></i></li>
                            <li><i class="icofont icofont-refresh reload-card"></i></li>
                            <li><i class="icofont icofont-error close-card"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="apex-chart-container">
                        <div id="customers"></div>
                    </div>
                    <div class="code-box-copy">
                        <button class="code-box-copy__btn btn-clipboard"
                            data-clipboard-target="#example-head7" title=""
                            data-original-title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                        <pre class=" language-html"><code class=" language-html" id="example-head7">
&lt;div id="customers"&gt;&lt;/div&gt;
                    </code></pre>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8 xl-50">
            <div class="card height-equal">
                <div class="card-header">
                    <h5>Empolyee Status</h5>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li><i class="icofont icofont-simple-left"></i></li>
                            <li><i class="view-html fa fa-code"></i></li>
                            <li><i class="icofont icofont-maximize full-card"></i></li>
                            <li><i class="icofont icofont-minus minimize-card"></i></li>
                            <li><i class="icofont icofont-refresh reload-card"></i></li>
                            <li><i class="icofont icofont-error close-card"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="user-status table-responsive products-table">
                        <table class="table table-bordernone mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Designation</th>
                                    <th scope="col">Skill Level</th>
                                    <th scope="col">Experience</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="bd-t-none u-s-tb">
                                        <div class="align-middle image-sm-size"><img
                                                class="img-radius align-top m-r-15 rounded-circle blur-up lazyloaded"
                                                src="../assets/images/dashboard/user2.jpg" alt=""
                                                data-original-title="" title="">
                                            <div class="d-inline-block">
                                                <h6>John Deo <span class="text-muted digits">(14+
                                                        Online)</span></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Designer</td>
                                    <td>
                                        <div class="progress-showcase">
                                            <div class="progress" style="height: 8px;">
                                                <div class="progress-bar bg-primary" role="progressbar"
                                                    style="width: 30%" aria-valuenow="50"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="digits">2 Year</td>
                                </tr>
                                <tr>
                                    <td class="bd-t-none u-s-tb">
                                        <div class="align-middle image-sm-size"><img
                                                class="img-radius align-top m-r-15 rounded-circle blur-up lazyloaded"
                                                src="../assets/images/dashboard/man.png" alt=""
                                                data-original-title="" title="">
                                            <div class="d-inline-block">
                                                <h6>Mohsib lara<span class="text-muted digits">(99+
                                                        Online)</span></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Tester</td>
                                    <td>
                                        <div class="progress-showcase">
                                            <div class="progress" style="height: 8px;">
                                                <div class="progress-bar bg-primary" role="progressbar"
                                                    style="width: 60%" aria-valuenow="50"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="digits">5 Month</td>
                                </tr>
                                <tr>
                                    <td class="bd-t-none u-s-tb">
                                        <div class="align-middle image-sm-size"><img
                                                class="img-radius align-top m-r-15 rounded-circle blur-up lazyloaded"
                                                src="../assets/images/dashboard/user.png" alt=""
                                                data-original-title="" title="">
                                            <div class="d-inline-block">
                                                <h6>Hileri Soli <span class="text-muted digits">(150+
                                                        Online)</span></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Designer</td>
                                    <td>
                                        <div class="progress-showcase">
                                            <div class="progress" style="height: 8px;">
                                                <div class="progress-bar bg-secondary"
                                                    role="progressbar" style="width: 30%"
                                                    aria-valuenow="50" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="digits">3 Month</td>
                                </tr>
                                <tr>
                                    <td class="bd-t-none u-s-tb">
                                        <div class="align-middle image-sm-size"><img
                                                class="img-radius align-top m-r-15 rounded-circle blur-up lazyloaded"
                                                src="../assets/images/dashboard/designer.jpg" alt=""
                                                data-original-title="" title="">
                                            <div class="d-inline-block">
                                                <h6>Pusiz bia <span class="text-muted digits">(14+
                                                        Online)</span></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Designer</td>
                                    <td>
                                        <div class="progress-showcase">
                                            <div class="progress" style="height: 8px;">
                                                <div class="progress-bar bg-primary" role="progressbar"
                                                    style="width: 90%" aria-valuenow="50"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="digits">5 Year</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="code-box-copy">
                        <button class="code-box-copy__btn btn-clipboard"
                            data-clipboard-target="#example-head5" title=""
                            data-original-title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                        <pre class=" language-html"><code class=" language-html" id="example-head5">
&lt;div class="user-status table-responsive products-table"&gt;
&lt;table class="table table-bordernone mb-0"&gt;
&lt;thead&gt;
&lt;tr&gt;
&lt;th scope="col"&gt;Name&lt;/th&gt;
&lt;th scope="col"&gt;Designation&lt;/th&gt;
&lt;th scope="col"&gt;Skill Level&lt;/th&gt;
&lt;th scope="col"&gt;Experience&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
    &lt;td class="bd-t-none u-s-tb"&gt;
        &lt;div class="align-middle image-sm-size"&gt;&lt;img class="img-radius align-top m-r-15 rounded-circle blur-up lazyloaded" src="../assets/images/dashboard/user2.jpg" alt="" data-original-title="" title=""&gt;
        &lt;div class="d-inline-block"&gt;
        &lt;h6&gt;John Deo &lt;span class="text-muted digits"&gt;(14+ Online)&lt;/span&gt;&lt;/h6&gt;
        &lt;/div&gt;
        &lt;/div&gt;
    &lt;/td&gt;
    &lt;td&gt;Designer&lt;/td&gt;
    &lt;td&gt;
        &lt;div class="progress-showcase"&gt;
        &lt;div class="progress" style="height: 8px;"&gt;
        &lt;div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
        &lt;/div&gt;
        &lt;/div&gt;
    &lt;/td&gt;
    &lt;td class="digits"&gt;2 Year&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td class="bd-t-none u-s-tb"&gt;
    &lt;div class="align-middle image-sm-size"&gt;&lt;img class="img-radius align-top m-r-15 rounded-circle blur-up lazyloaded" src="../assets/images/dashboard/man.png" alt="" data-original-title="" title=""&gt;
    &lt;div class="d-inline-block"&gt;
    &lt;h6&gt;Mohsib lara&lt;span class="text-muted digits"&gt;(99+ Online)&lt;/span&gt;&lt;/h6&gt;
    &lt;/div&gt;
    &lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;Tester&lt;/td&gt;
&lt;td&gt;
    &lt;div class="progress-showcase"&gt;
    &lt;div class="progress" style="height: 8px;"&gt;
    &lt;div class="progress-bar bg-primary" role="progressbar" style="width: 60%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
&lt;/td&gt;
&lt;td class="digits"&gt;5 Month&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td class="bd-t-none u-s-tb"&gt;
    &lt;div class="align-middle image-sm-size"&gt;&lt;img class="img-radius align-top m-r-15 rounded-circle blur-up lazyloaded" src="../assets/images/dashboard/user.png" alt="" data-original-title="" title=""&gt;
    &lt;div class="d-inline-block"&gt;
    &lt;h6&gt;Hileri Soli &lt;span class="text-muted digits"&gt;(150+ Online)&lt;/span&gt;&lt;/h6&gt;
    &lt;/div&gt;
    &lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;Designer&lt;/td&gt;
&lt;td&gt;
    &lt;div class="progress-showcase"&gt;
    &lt;div class="progress" style="height: 8px;"&gt;
    &lt;div class="progress-bar bg-secondary" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
&lt;/td&gt;
&lt;td class="digits"&gt;3 Month&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td class="bd-t-none u-s-tb"&gt;
    &lt;div class="align-middle image-sm-size"&gt;&lt;img class="img-radius align-top m-r-15 rounded-circle blur-up lazyloaded" src="../assets/images/dashboard/designer.jpg" alt="" data-original-title="" title=""&gt;
    &lt;div class="d-inline-block"&gt;
    &lt;h6&gt;Pusiz bia &lt;span class="text-muted digits"&gt;(14+ Online)&lt;/span&gt;&lt;/h6&gt;
    &lt;/div&gt;
    &lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;Designer&lt;/td&gt;
&lt;td&gt;
    &lt;div class="progress-showcase"&gt;
    &lt;div class="progress" style="height: 8px;"&gt;
    &lt;div class="progress-bar bg-primary" role="progressbar" style="width: 90%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
&lt;/td&gt;
&lt;td class="digits"&gt;5 Year&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;
                    </code></pre>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Top Selling Country</h5>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li><i class="icofont icofont-simple-left"></i></li>
                            <li><i class="view-html fa fa-code"></i></li>
                            <li><i class="icofont icofont-maximize full-card"></i></li>
                            <li><i class="icofont icofont-minus minimize-card"></i></li>
                            <li><i class="icofont icofont-refresh reload-card"></i></li>
                            <li><i class="icofont icofont-error close-card"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="jvector-map-height" id="world"></div>
                        </div>
                        <div class="col-xl-4">
                            <div class="table-responsive map-table">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th>Country</th>
                                            <th>2018</th>
                                            <th>2019</th>
                                            <th>Change</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Bhopal</td>
                                            <td>1,048</td>
                                            <td>2,213</td>
                                            <td>6.8%</td>
                                        </tr>
                                        <tr>
                                            <td>Saudi Arbia</td>
                                            <td>576</td>
                                            <td>1,297</td>
                                            <td>4.3%</td>
                                        </tr>
                                        <tr>
                                            <td>Kazakstan</td>
                                            <td>879</td>
                                            <td>1,985</td>
                                            <td>7.0%</td>
                                        </tr>
                                        <tr>
                                            <td>Canada</td>
                                            <td>1,871</td>
                                            <td>2,546</td>
                                            <td>6.2%</td>
                                        </tr>
                                        <tr>
                                            <td>Brazil</td>
                                            <td>957</td>
                                            <td>1,975</td>
                                            <td>5.6%</td>
                                        </tr>
                                        <tr>
                                            <td>Russia</td>
                                            <td>1,480</td>
                                            <td>1,631</td>
                                            <td>8.7%</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="code-box-copy">
                        <button class="code-box-copy__btn btn-clipboard"
                            data-clipboard-target="#example-hea6" title="" data-original-title="Copy"><i
                                class="icofont icofont-copy-alt"></i></button>
                        <pre class=" language-html"><code class=" language-html" id="example-head6">
&lt;div class="row"&gt;
&lt;div class="col-xl-8"&gt;
&lt;div class="jvector-map-height" id="world"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-xl-4"&gt;
&lt;div class="table-responsive map-table"&gt;
&lt;table class="table"&gt;
&lt;thead&gt;
&lt;tr&gt;
   &lt;th&gt;Country&lt;/th&gt;
   &lt;th&gt;2018&lt;/th&gt;
   &lt;th&gt;2019&lt;/th&gt;
   &lt;th&gt;Change&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
   &lt;td&gt;Bhopal&lt;/td&gt;
   &lt;td&gt;1,048&lt;/td&gt;
   &lt;td&gt;2,213&lt;/td&gt;
   &lt;td&gt;6.8%&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
   &lt;td&gt;Saudi Arbia&lt;/td&gt;
   &lt;td&gt;576&lt;/td&gt;
   &lt;td&gt;1,297&lt;/td&gt;
   &lt;td&gt;4.3%&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
   &lt;td&gt;Kazakstan&lt;/td&gt;
   &lt;td&gt;879&lt;/td&gt;
   &lt;td&gt;1,985&lt;/td&gt;
   &lt;td&gt;7.0%&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Canada&lt;/td&gt;
    &lt;td&gt;1,871&lt;/td&gt;
    &lt;td&gt;2,546&lt;/td&gt;
    &lt;td&gt;6.2%&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Brazil&lt;/td&gt;
    &lt;td&gt;957&lt;/td&gt;
    &lt;td&gt;1,975&lt;/td&gt;
    &lt;td&gt;5.6%&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
   &lt;td&gt;Russia&lt;/td&gt;
   &lt;td&gt;1,480&lt;/td&gt;
   &lt;td&gt;1,631&lt;/td&gt;
   &lt;td&gt;8.7%&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
                    </code></pre>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection