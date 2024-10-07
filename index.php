<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- End Required meta tags -->
    <!-- Begin SEO tag -->
    <title> Fullwidth Page Layout | Looper - Bootstrap 4 Admin Theme </title>
    <meta property="og:title" content="Fullwidth Page Layout">
    <meta name="author" content="Beni Arisandi">
    <meta property="og:locale" content="en_US">
    <meta name="description" content="Responsive admin theme build on top of Bootstrap 4">
    <meta property="og:description" content="Responsive admin theme build on top of Bootstrap 4">
    <link rel="canonical" href="//uselooper.com">
    <meta property="og:url" content="//uselooper.com">
    <meta property="og:site_name" content="Looper - Bootstrap 4 Admin Theme">
    <!-- End SEO tag -->
    <!-- FAVICONS -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/apple-touch-icon.png">
    <link rel="shortcut icon" href="assets/favicon.ico">
    <meta name="theme-color" content="#3063A0">
    <!-- End FAVICONS -->
    <script src="assets/vendor/pace/pace.min.js"></script>
    <!-- BEGIN BASE STYLES -->
    <link rel="stylesheet" href="assets/vendor/pace/pace.min.css">
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/open-iconic/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/fontawesome-all.min.css">
    <!-- END BASE STYLES -->
    <!-- BEGIN PLUGINS STYLES -->
    <link rel="stylesheet" href="assets/vendor/flatpickr/flatpickr.min.css">
    <!-- END PLUGINS STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" href="assets/stylesheets/main.min.css">
    <link rel="stylesheet" href="assets/stylesheets/custom.css">
    <!-- END THEME STYLES -->
    <style>
       .navbar {
            max-width: 1140px;
            margin: 0 auto;
        }
        .navbar ul{
            margin-left: 50px;
        }
        .stacked-menu {
            margin-bottom:0;
        }

        .content-quick-select{
            font-size: 13px;
        }


        .table-select-number {
            width: 100%;
            font-size: 13px;
            text-align: center;
        }
        .table-select-number input{
            border: none;
            width: 100%;
            border-radius: 11px;
            text-align: center;
            padding: 2px 0;
            font-size: 10px;
        }
        
        .table-select-number span{
            font-weight: bold;
        }

        .table-select-number .number{
            padding: 1px 1px;
            background: #efefef;
            border-radius: 10px;
        }

        .table-select-number .number-selected{
            padding: 1px 1px;
            background: orange;
            border-radius: 10px;
        }

        .ma-cuoc-gan-day-item .text-right{
            float: right;
        }


        @media (min-width: 600px) {
            .btn-loai-tro-choi {
                display: none !important;
            }
        }
        @media (max-width: 600px) {
            .menu-loai-tro-choi{
                display: none;
            }
            .quick-select-group{
                display: none;
            }
            .btn-account {
                border:none !important;
                padding-left: 0px !important;
            }
        }
    </style>
  </head>
  <body>
    <!-- .app -->
    <div class="app has-fullwidth">
      <!-- .app-header -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-3">
            <!--<a class="navbar-brand" href="#">Looper</a>-->
            <a href="index.html">
              <img src="one-logo.png" height="32" alt="">
            </a>
            <!-- toggle menu -->
            <button class="hamburger hamburger hamburger-squeeze js-hamburger d-lg-none" type="button" data-toggle="collapse" data-target="#navbarColor2" aria-controls="navbarColor2" aria-expanded="false" aria-label="Toggle navigation">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
            </button>
            <!-- /toggle menu -->
            <!-- .navbar-collapse -->
            <div class="collapse navbar-collapse" id="navbarColor2">
            <!-- .navbar-nav -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href="#">Xổ số
                    <span class="sr-only">(current)</span>
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Xóc đĩa</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">789Bong88</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Live Casino</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Thông báo</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Kết quả</a>
                </li>
            </ul>
            <!-- /.navbar-nav -->
                <div class="dropdown">
                    <button style="min-height: 2.5rem; background: none;" class="btn-account d-md-flex" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                    <span class="user-avatar">
                        <img src="assets/images/avatars/profile.jpg" alt="">
                    </span>
                    <span class="account-summary pr-lg-4 d-lg-block">
                        <span class="account-name">username</span>
                        <span class="account-description">5.000.000 coin</span>
                    </span>
                    </button>
                    <div class="dropdown-arrow dropdown-arrow-left"></div>
                    <!-- .dropdown-menu -->
                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; top: 56px; left: 0px; will-change: top, left;">
                    <a class="dropdown-item" href="#">
                        <span class="dropdown-icon oi oi-person"></span> Profile</a>
                    <a class="dropdown-item" href="#">
                        <span class="dropdown-icon oi oi-account-logout"></span> Logout</a>
                    
                    </div>
                    <!-- /.dropdown-menu -->
                </div>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
      </header>
      <!-- /.app-header -->
      <!-- .app-main -->
      <main class="app-main">
        <!-- .wrapper -->
        <div class="wrapper">
          <!-- .page -->
          <div class="page">
            <!-- .page-inner -->
            <div class="page-inner">
              
              <!-- .page-section -->
              <div class="page-section">
                
                <div class="row">
                  <!-- grid column -->
                  <div class="col-12 col-lg-12 col-xl-3">
                    <button style="font-size: 12px;width: 50%;margin: 0 auto;display: block;margin-bottom: 10px;" type="button" class="btn btn-primary btn-loai-tro-choi" data-toggle="dropdown" aria-expanded="false">Danh mục trò chơi<span class="caret"></span>
                    </button>
                    <!-- .card -->
                    <section class="card card-fluid menu-loai-tro-choi">
                        <nav id="stacked-menu" class="stacked-menu stacked-menu-has-collapsible">
                            <!-- .menu -->
                            <ul class="menu">
                                
                                <!-- .menu-item -->
                                <li class="menu-item has-child">
                                    <a href="#" class="menu-link">
                                        <span class="menu-icon oi oi-pencil"></span>
                                        <span class="menu-text">Miền Bắc 1</span>
                                    </a>
                                    <!-- child menu -->
                                    <ul class="menu"><li class="menu-subhead">Miền Bắc 2</li>
                                        <li class="menu-item">
                                        <a href="form-basic.html" class="menu-link" tabindex="-1">Đề</a>
                                        </li>
                                        <li class="menu-item">
                                        <a href="form-autocompletes.html" class="menu-link" tabindex="-1">Lô</a>
                                        </li>
                                        <li class="menu-item">
                                        <a href="form-pickers.html" class="menu-link" tabindex="-1">Pickers</a>
                                        </li>
                                        <li class="menu-item">
                                        <a href="form-editors.html" class="menu-link" tabindex="-1">Editors</a>
                                        </li>
                                    </ul>
                                    <!-- /child menu -->
                                </li>
                                <!-- /.menu-item -->
                                <!-- .menu-item -->
                                <li class="menu-item has-child">
                                <a href="#" class="menu-link">
                                    <span class="menu-icon oi oi-grid-two-up"></span>
                                    <span class="menu-text">Miền Bắc 2</span>
                                </a>
                                <!-- child menu -->
                                <ul class="menu"><li class="menu-subhead">Xóc đĩa 789</li>
                                    <li class="menu-item">
                                    <a href="table-basic.html" class="menu-link" tabindex="-1">Basic Table</a>
                                    </li>
                                    <li class="menu-item">
                                    <a href="table-datatables.html" class="menu-link" tabindex="-1">Datatables</a>
                                    </li>
                                </ul>
                                <!-- /child menu -->
                                </li>
                                <!-- /.menu-item -->
                                
                                <!-- .menu-item -->
                                <li class="menu-item has-child">
                                    <a href="#" class="menu-link">
                                        <span class="menu-icon oi oi-pencil"></span>
                                        <span class="menu-text">Miền Nam</span>
                                    </a>
                                    <!-- child menu -->
                                    <ul class="menu"><li class="menu-subhead">Miền Nam</li>
                                        <li class="menu-item">
                                        <a href="form-basic.html" class="menu-link" tabindex="-1">Basic Elements</a>
                                        </li>
                                        <li class="menu-item">
                                        <a href="form-autocompletes.html" class="menu-link" tabindex="-1">Autocompletes</a>
                                        </li>
                                        <li class="menu-item">
                                        <a href="form-pickers.html" class="menu-link" tabindex="-1">Pickers</a>
                                        </li>
                                        <li class="menu-item">
                                        <a href="form-editors.html" class="menu-link" tabindex="-1">Editors</a>
                                        </li>
                                    </ul>
                                    <!-- /child menu -->
                                </li>
                                <!-- /.menu-item -->


                                <!-- .menu-item -->
                                <li class="menu-item has-child">
                                <a href="#" class="menu-link">
                                    <span class="menu-icon oi oi-bar-chart"></span>
                                    <span class="menu-text">Bong88</span>
                                </a>
                                <!-- child menu -->
                                <ul class="menu"><li class="menu-subhead">Bong88</li>
                                    <li class="menu-item has-child">
                                    <a href="#" class="menu-link" tabindex="-1">Chart.js</a>
                                    <!-- grand child menu -->
                                    <ul class="menu">
                                        <li class="menu-item">
                                        <a href="collection-chartjs-line.html" class="menu-link" tabindex="-1">Line</a>
                                        </li>
                                        <li class="menu-item">
                                        <a href="collection-chartjs-bar.html" class="menu-link" tabindex="-1">Bar</a>
                                        </li>
                                        <li class="menu-item">
                                        <a href="collection-chartjs-radar-scatter.html" class="menu-link" tabindex="-1">Radar &amp; Scatter</a>
                                        </li>
                                        <li class="menu-item">
                                        <a href="collection-chartjs-others.html" class="menu-link" tabindex="-1">Others</a>
                                        </li>
                                    </ul>
                                    <!-- /grand child menu -->
                                    </li>
                                    <li class="menu-item">
                                    <a href="collection-flot-charts.html" class="menu-link" tabindex="-1">Flot</a>
                                    </li>
                                    <li class="menu-item">
                                    <a href="collection-inline-charts.html" class="menu-link" tabindex="-1">Inline charts</a>
                                    </li>
                                    <li class="menu-item">
                                    <a href="collection-jqvmap.html" class="menu-link" tabindex="-1">Vector Map</a>
                                    </li>
                                </ul>
                                <!-- /child menu -->
                                </li>
                                <!-- /.menu-item -->

                                <li class="menu-item">
                                <a href="index.html" class="menu-link">
                                    <span class="menu-icon oi oi-dashboard"></span>
                                    <span class="menu-text">Thông báo</span>
                                </a>
                                </li>

                                <li class="menu-item">
                                <a href="index.html" class="menu-link">
                                    <span class="menu-icon oi oi-browser"></span>
                                    <span class="menu-text">Kết quả</span>
                                </a>
                                </li>

                            </ul>
                            <!-- /.menu -->
                            </nav>
                    </section>
                    <!-- /.card -->
                  </div>
                  <!-- /grid column -->
                  <!-- grid column -->
                  <div class="col-12 col-lg-6 col-xl-6">
                    <!-- .card -->
                    <section class="card card-fluid">
                      <!-- .card-body -->
                      <div class="card-body">
                        <div class="form-row">
                                <div class="col-6 col-md-6 quick-select-group">
                                    <input type="text" class="form-control form-control-sm" placeholder="Dãy số">
                                </div>
                                <div class="col-6 col-md-6 quick-select-group">
                                    <button style="font-size: 12px;" type="button" class="btn btn-primary">Thêm</button>
                                    <button style="font-size: 12px;" type="button" class="btn btn-info btn-quick-select" data-toggle="dropdown" aria-expanded="false">Chọn nhanh
                                        <span class="caret"></span>
                                    </button>
                                </div>
                            <!-- /grid column -->
                            
                            <div class="col-12 col-md-12">
                                <section class="card content-quick-select" style="margin: 10px 0 0px 0; display:none;">
                                    <!-- .card-header -->
                                    <header class="card-header">
                                    <ul class="nav nav-tabs card-header-tabs">
                                        <li class="nav-item">
                                        <a class="nav-link active show" data-toggle="tab" href="#card-home">Con giáp</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#card-profile">Dàn</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#card-profile">Số kép</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#card-profile">Tổng</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#card-profile">Đầu đuôi</a>
                                        </li>
                                    </ul>
                                    </header>
                                    <!-- /.card-header -->
                                    <!-- .card-body -->
                                    <div class="card-body">
                                    <!-- .tab-content -->
                                    <div id="myTabCard" class="tab-content">
                                        <div class="tab-pane fade active show" id="card-home">
                                            <div class="row">
                                                <div class="col-3 col-md-3">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="g1">
                                                        <label class="custom-control-label" for="g1">Tý(9)</label>
                                                    </div>
                                                </div>
                                                <div class="col-3 col-md-3">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="g2">
                                                        <label class="custom-control-label" for="g2">Sửu(9)</label>
                                                    </div>
                                                </div>
                                                <div class="col-3 col-md-3">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="g3">
                                                        <label class="custom-control-label" for="g3">Dần(9)</label>
                                                    </div>
                                                </div>
                                                <div class="col-3 col-md-3">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="g4">
                                                        <label class="custom-control-label" for="g4">Mão(9)</label>
                                                    </div>
                                                </div>
                                                <div class="col-3 col-md-3">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="g5">
                                                        <label class="custom-control-label" for="g5">Thìn(8)</label>
                                                    </div>
                                                </div>
                                                <div class="col-3 col-md-3">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="g6">
                                                        <label class="custom-control-label" for="g6">Tị(8)</label>
                                                    </div>
                                                </div>
                                                <div class="col-3 col-md-3">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="g7">
                                                        <label class="custom-control-label" for="g7">Ngọ(8)</label>
                                                    </div>
                                                </div>
                                                <div class="col-3 col-md-3">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="g8">
                                                        <label class="custom-control-label" for="g8">Mùi(8)</label>
                                                    </div>
                                                </div>
                                                <div class="col-3 col-md-3">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="g9">
                                                        <label class="custom-control-label" for="g9">Thân(8)</label>
                                                    </div>
                                                </div>
                                                <div class="col-3 col-md-3">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="g10">
                                                        <label class="custom-control-label" for="g10">Dậu(8)</label>
                                                    </div>
                                                </div>
                                                <div class="col-3 col-md-3">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="g11">
                                                        <label class="custom-control-label" for="g11">Tuất(8)</label>
                                                    </div>
                                                </div>
                                                <div class="col-3 col-md-3">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="g12">
                                                        <label class="custom-control-label" for="g12">Hợi(8)</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="card-profile">
                                        <div class="row">
                                                <div class="col-3 col-md-3">
                                                    <div class="custom-control custom-radio mb-1">
                                                        <input type="radio" class="custom-control-input" id="rd1" checked="">
                                                        <label class="custom-control-label" for="rd1">05 có kép(36)</label>
                                                    </div>
                                                </div>
                                                <div class="col-3 col-md-3">
                                                    <div class="custom-control custom-radio mb-1">
                                                        <input type="radio" class="custom-control-input" id="rd1">
                                                        <label class="custom-control-label" for="rd1">bỏ kép(9)</label>
                                                    </div>
                                                </div>
                                                <div class="col-3 col-md-3">
                                                    <div class="custom-control custom-radio mb-1">
                                                        <input type="radio" class="custom-control-input" id="rd1">
                                                        <label class="custom-control-label" for="rd1">Dần(9)</label>
                                                    </div>
                                                </div>
                                                <div class="col-3 col-md-3">
                                                    <div class="custom-control custom-radio mb-1">
                                                        <input type="radio" class="custom-control-input" id="rd1">
                                                        <label class="custom-control-label" for="rd1">Mão(9)</label>
                                                    </div>
                                                </div>
                                                <div class="col-3 col-md-3">
                                                    <div class="custom-control custom-radio mb-1">
                                                        <input type="radio" class="custom-control-input" id="rd1">
                                                        <label class="custom-control-label" for="rd1">Thìn(8)</label>
                                                    </div>
                                                </div>
                                                <div class="col-3 col-md-3">
                                                    <div class="custom-control custom-radio mb-1">
                                                        <input type="radio" class="custom-control-input" id="rd1">
                                                        <label class="custom-control-label" for="rd1">Tị(8)</label>
                                                    </div>
                                                </div>
                                                <div class="col-3 col-md-3">
                                                    <div class="custom-control custom-radio mb-1">
                                                        <input type="radio" class="custom-control-input" id="rd1">
                                                        <label class="custom-control-label" for="rd1">Ngọ(8)</label>
                                                    </div>
                                                </div>
                                                <div class="col-3 col-md-3">
                                                    <div class="custom-control custom-radio mb-1">
                                                        <input type="radio" class="custom-control-input" id="rd1">
                                                        <label class="custom-control-label" for="rd1">Mùi(8)</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.tab-content -->
                                    </div>
                                    <!-- /.card-body -->
                                </section>
                            </div>

                            <div class="" style="width: 100%;">
                                <!-- .table -->
                                <table class="table-select-number" style="width: 100%;">
                                   
                                    <!-- tbody -->
                                    <tbody>
                                    <!-- tr -->
                                    <tr>
                                        <td class="align-middle col-checker">
                                            <div class="custom-control custom-control-nolabel custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="x0">
                                                <label class="custom-control-label" for="x0"></label>
                                            </div>
                                        </td>
                                        <td class="align-middle col-checker">
                                            <div class="custom-control custom-control-nolabel custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="x1">
                                                <label class="custom-control-label" for="x1"></label>
                                            </div>
                                        </td>
                                        <td class="align-middle col-checker">
                                            <div class="custom-control custom-control-nolabel custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="x2">
                                                <label class="custom-control-label" for="x2"></label>
                                            </div>
                                        </td>
                                        <td class="align-middle col-checker">
                                            <div class="custom-control custom-control-nolabel custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="x3">
                                                <label class="custom-control-label" for="x3"></label>
                                            </div>
                                        </td>
                                        <td class="align-middle col-checker">
                                            <div class="custom-control custom-control-nolabel custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="x4">
                                                <label class="custom-control-label" for="x4"></label>
                                            </div>
                                        </td>
                                        <td class="align-middle col-checker">
                                            <div class="custom-control custom-control-nolabel custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="x5">
                                                <label class="custom-control-label" for="x5"></label>
                                            </div>
                                        </td>
                                        <td class="align-middle col-checker">
                                            <div class="custom-control custom-control-nolabel custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="x6">
                                                <label class="custom-control-label" for="x6"></label>
                                            </div>
                                        </td>
                                        <td class="align-middle col-checker">
                                            <div class="custom-control custom-control-nolabel custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="x7">
                                                <label class="custom-control-label" for="x7"></label>
                                            </div>
                                        </td>
                                        <td class="align-middle col-checker">
                                            <div class="custom-control custom-control-nolabel custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="x8">
                                                <label class="custom-control-label" for="x8"></label>
                                            </div>
                                        </td>
                                        <td class="align-middle col-checker">
                                            <div class="custom-control custom-control-nolabel custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="x9">
                                                <label class="custom-control-label" for="x9"></label>
                                            </div>
                                        </td>
                                        <td class="align-middle col-checker">
                                            <div class="custom-control custom-control-nolabel custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="x10">
                                                <label class="custom-control-label" for="x10"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- /tr -->
                                    <!-- tr -->
                                    <tr>
                                        <td class="align-middle col-checker">
                                        <div class="custom-control custom-control-nolabel custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="selectedRow[]" id="y0">
                                            <label class="custom-control-label" for="y0"></label>
                                        </div>
                                        </td>
                                        <td><div class='number'><span> 00 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 01 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 02 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 03 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 04 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 05 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 06 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 07 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 08 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 09 </span><input type="text" value="705"></div></td>
                                    </tr>
                                    <!-- /tr -->
                                    <!-- tr -->
                                    <tr>
                                        <td class="align-middle col-checker">
                                        <div class="custom-control custom-control-nolabel custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="selectedRow[]" id="y1">
                                            <label class="custom-control-label" for="y1"></label>
                                        </div>
                                        </td>
                                        <td><div class='number'><span> 10 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 11 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 12 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 13 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 14 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 15 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 16 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 17 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 18 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 19 </span><input type="text" value="705"></div></td>
                                    </tr>
                                    <!-- /tr -->
                                    <!-- tr -->
                                    <tr>
                                        <td class="align-middle col-checker">
                                        <div class="custom-control custom-control-nolabel custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="selectedRow[]" id="y2">
                                            <label class="custom-control-label" for="y2"></label>
                                        </div>
                                        </td>
                                        <td><div class='number'><span> 20 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 21 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 22 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 23 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 24 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 25 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 26 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 27 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 28 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 29 </span><input type="text" value="705"></div></td>
                                    </tr>
                                    <!-- /tr -->
                                    <!-- tr -->
                                    <tr>
                                        <td class="align-middle col-checker">
                                        <div class="custom-control custom-control-nolabel custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="selectedRow[]" id="y3">
                                            <label class="custom-control-label" for="y3"></label>
                                        </div>
                                        </td>
                                        <td><div class='number'><span> 30 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 31 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 32 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 33 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 34 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 35 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 36 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 37 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 38 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 39 </span><input type="text" value="705"></div></td>
                                    </tr>
                                    <!-- /tr -->
                                    <!-- tr -->
                                    <tr>
                                        <td class="align-middle col-checker">
                                        <div class="custom-control custom-control-nolabel custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="selectedRow[]" id="y4">
                                            <label class="custom-control-label" for="y4"></label>
                                        </div>
                                        </td>
                                        <td><div class='number'><span> 40 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 41 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 42 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 43 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 44 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 45 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 46 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 47 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 48 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 49 </span><input type="text" value="705"></div></td>
                                    </tr>
                                    <!-- /tr -->
                                    <!-- tr -->
                                    <tr>
                                        <td class="align-middle col-checker">
                                        <div class="custom-control custom-control-nolabel custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="selectedRow[]" id="y5">
                                            <label class="custom-control-label" for="y5"></label>
                                        </div>
                                        </td>
                                        <td><div class='number'><span> 10 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 11 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 10 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 11 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 10 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 11 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 10 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 11 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 10 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 11 </span><input type="text" value="705"></div></td>
                                    </tr>
                                    <!-- /tr -->
                                    <!-- tr -->
                                    <tr>
                                        <td class="align-middle col-checker">
                                        <div class="custom-control custom-control-nolabel custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="selectedRow[]" id="y6">
                                            <label class="custom-control-label" for="y6"></label>
                                        </div>
                                        </td>
                                        <td><div class='number'><span> 10 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 11 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 10 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 11 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 10 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 11 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 10 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 11 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 10 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 11 </span><input type="text" value="705"></div></td>
                                    </tr>
                                    <!-- /tr -->
                                    <!-- tr -->
                                    <tr>
                                        <td class="align-middle col-checker">
                                        <div class="custom-control custom-control-nolabel custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="selectedRow[]" id="y7">
                                            <label class="custom-control-label" for="y7"></label>
                                        </div>
                                        </td>
                                        <td><div class='number'><span> 10 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 11 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 10 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 11 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 10 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 11 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 10 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 11 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 10 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 11 </span><input type="text" value="705"></div></td>
                                    </tr>
                                    <!-- /tr -->
                                    <!-- tr -->
                                    <tr>
                                        <td class="align-middle col-checker">
                                        <div class="custom-control custom-control-nolabel custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="selectedRow[]" id="y8">
                                            <label class="custom-control-label" for="y8"></label>
                                        </div>
                                        </td>
                                        <td><div class='number'><span> 10 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 11 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 10 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 11 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 10 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 11 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 10 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 11 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 10 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 11 </span><input type="text" value="705"></div></td>
                                    </tr>
                                    <!-- /tr -->
                                    <!-- tr -->
                                    <tr>
                                        <td class="align-middle col-checker">
                                        <div class="custom-control custom-control-nolabel custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="selectedRow[]" id="y9">
                                            <label class="custom-control-label" for="y9"></label>
                                        </div>
                                        </td>
                                        <td><div class='number'><span> 90 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 91 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 92 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 93 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 94 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 95 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 96 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 97 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 98 </span><input type="text" value="705"></div></td>
                                        <td><div class='number'><span> 99 </span><input type="text" value="705"></div></td>
                                    </tr>
                                    <!-- /tr -->
                                    </tbody>
                                    <!-- /tbody -->
                                </table>
                                <!-- /.table -->
                                </div>

                            
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </section>
                    <!-- /.card -->
                  </div>
                  <!-- /grid column -->
                  <!-- grid column -->
                  <div class="col-12 col-lg-6 col-xl-3">
                    <!-- .card -->
                    <section class="card">
                        <!-- .card-header -->
                        <header class="card-header"><span>Đặt cược</span> <span style="float: right;">Đề - Miền Bắc 1 </span></header>
                        <!-- .card-body -->
                        <div class="card-body">
                            <div class="form-row">
                                <!-- grid column -->
                                <div class="col-md-4" style="padding: 5px;text-align: right;text-transform: uppercase; ">
                                    Số điểm
                                </div>
                                <!-- /grid column -->
                                <!-- grid column -->
                                <div class="col-md-8">
                                    <input type="text" class="form-control" placeholder="0">
                                </div>
                                <!-- /grid column -->
                            </div>
                            <div class="form-row">
                                <!-- grid column -->
                                <div class="col-4 col-md-4" style="padding: 5px;text-align: right;text-transform: uppercase; ">
                                    <button style="width: 100%;" type="button" class="btn btn-warning">Hủy</button>
                                </div>
                                <!-- /grid column -->
                                <!-- grid column -->
                                <div class="col-8 col-md-8" style="padding: 5px;text-align: right;text-transform: uppercase; ">
                                    <button style="width: 100%;" type="button" class="btn btn-success">Đặt cược</button>
                                </div>
                                <!-- /grid column -->
                            </div>
                            <div class="custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ckb1" checked>
                                <label class="custom-control-label" for="ckb1">Không hỏi lại khi có giá thay đổi</label>
                            </div>

                            <div class="form-row">
                                <!-- grid column -->
                                <div class="col-md-4" style="font-weight:bold">
                                    Tổng điểm
                                </div>
                                <!-- /grid column -->
                                <!-- grid column -->
                                <div class="col-md-8">
                                    999.999
                                </div>
                                <!-- /grid column -->
                            </div>

                            <div class="form-row">
                                <!-- grid column -->
                                <div class="col-md-4" style="font-weight:bold">
                                    Thành tiền
                                </div>
                                <!-- /grid column -->
                                <!-- grid column -->
                                <div class="col-md-8">
                                    1.000.0000.000 đ
                                </div>
                                <!-- /grid column -->
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </section>
                    <!-- /.card -->

                    <section class="card">
                        <!-- .card-header -->
                        <header class="card-header"><span>Mã cược gần đây</span></header>
                        <!-- .card-body -->
                        <div class="card-body">
                            <section class="card card-expansion-item ma-cuoc-gan-day-item">
                            <header class="card-header border-0" id="headingOne">
                                <button class="btn btn-reset collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <span class="collapse-indicator mr-2">
                                    <i class="fa fa-fw fa-caret-right"></i>
                                </span>
                                <span>2,200 #1</span>
                                </button>
                            </header>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="">
                                <div class="card-body pt-0">
                                    <h6>ĐỀ - HÀ NỘI</h6>
                                    <div>
                                        <span>Danh sách: </span>
                                        <span class="text-right">00,01,02</span>
                                    </div>
                                    <div>
                                        <span>Tổng điểm: </span>
                                        <span class="text-right">3</span>
                                    </div>
                                    <div>
                                        <span>Thành tiền: </span>
                                        <span class="text-right">2,200</span>
                                    </div>
                                </div>
                            </div>
                            </section>

                            <section class="card card-expansion-item ma-cuoc-gan-day-item">
                            <header class="card-header border-0" id="headingOne">
                                <button class="btn btn-reset collapsed" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapseOne">
                                <span class="collapse-indicator mr-2">
                                    <i class="fa fa-fw fa-caret-right"></i>
                                </span>
                                <span>9,200 #2</span>
                                </button>
                            </header>
                            <div id="collapse3" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="">
                                <div class="card-body pt-0">
                                    <h6>ĐỀ - HÀ NỘI</h6>
                                    <div>
                                        <span>Danh sách: </span>
                                        <span class="text-right">05,06,07</span>
                                    </div>
                                    <div>
                                        <span>Tổng điểm: </span>
                                        <span class="text-right">9</span>
                                    </div>
                                    <div>
                                        <span>Thành tiền: </span>
                                        <span class="text-right">9,200</span>
                                    </div>
                                </div>
                            </div>
                            </section>


                        </div>
                        <!-- /.card-body -->
                    </section>

                    <!-- .card -->
                    <section class="card card-fluid">
                        <img alt="piano" src="https://77one789.net/assets/images/casino/piano.jpg">
                    </section>
                    <!-- /.card -->
                  </div>
                  <!-- /grid column -->
                </div>
                <!-- /grid row -->
              </div>
              <!-- /.page-section -->
            </div>
            <!-- /.page-inner -->
          </div>
          <!-- /.page -->
        </div>
        <!-- /.wrapper -->
      </main>
      <!-- /.app-main -->
    </div>
    <!-- /.app -->
    <!-- BEGIN BASE JS -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- END BASE JS -->
    <!-- BEGIN PLUGINS JS -->
    <script src="assets/vendor/stacked-menu/stacked-menu.min.js"></script>
    <script src="assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/vendor/flatpickr/flatpickr.min.js"></script>
    <script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="assets/vendor/chart.js/Chart.min.js"></script>
    <!-- END PLUGINS JS -->
    <!-- BEGIN THEME JS -->
    <script src="assets/javascript/main.min.js"></script>
    <!-- END THEME JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="assets/javascript/pages/easypiechart-demo.js"></script>
    <script src="assets/javascript/pages/dashboard-demo.js"></script>
    <!-- END PAGE LEVEL JS -->
    <script>
        $(document).ready(function(){
            $('.btn-quick-select').click(function(){
                $('.content-quick-select').toggle();
            });
            
            $('.btn-loai-tro-choi').click(function(){
                $('.menu-loai-tro-choi').toggle();
            });
            
            $('.number').click(function(){
                $(this).toggleClass('number-selected');
            });

            $('.number input').on('click', function(event) {
                event.stopPropagation();
            });
            
        });
    </script>
  </body>
</html>