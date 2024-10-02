<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- End Required meta tags -->
    <!-- Begin SEO tag -->
    <title>Quản lý user</title>
    <meta property="og:title" content="Basic Table">
    <meta name="author" content="Beni Arisandi">
    <meta property="og:locale" content="en_US">
    <meta name="description" content="Responsive admin theme build on top of Bootstrap 4">
    <meta property="og:description" content="Responsive admin theme build on top of Bootstrap 4">
    <meta property="og:site_name" content="Admin Theme">
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
    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" href="assets/stylesheets/main.min.css">
    <link rel="stylesheet" href="assets/stylesheets/custom.css">
    <!-- END THEME STYLES -->
    <style>
            .page-section, .page-title-bar {
                max-width: 96%;
            }
            .table-setting-type input{
                min-width: 50px;
                padding: 0 2px;
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

            @media (min-width: 900px) {
                .table-select-number {
                    font-size: 16px;
                }
                .table-select-number input {
                    font-size: 14px;
                }
                .table-select-number .number {
                    margin: 5px;
                }
            }

    </style>
  </head>
  <body>
    <!-- .app -->
    <div class="app">
      <!-- .app-header -->
      <header class="app-header">
        <!-- .top-bar -->
        <div class="top-bar">
          <!-- .top-bar-brand -->
          <div class="top-bar-brand">
            <a href="index.html">
              <img src="one-logo.png" height="32" alt="">
            </a>
          </div>
          <!-- /.top-bar-brand -->
          <!-- .top-bar-list -->
          <div class="top-bar-list">
            <!-- .top-bar-item -->
            <div class="top-bar-item px-2 d-md-none d-lg-none d-xl-none">
              <!-- toggle menu -->
              <button class="hamburger hamburger-squeeze" type="button" data-toggle="aside" aria-label="Menu" aria-controls="navigation">
                <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                </span>
              </button>
              <!-- /toggle menu -->
            </div>
            <!-- /.top-bar-item -->
            <!-- .top-bar-item -->
            <div class="top-bar-item top-bar-item-full">
              <!-- .top-bar-search -->
              <div class="top-bar-search">
                <div class="input-group input-group-search">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <span class="oi oi-magnifying-glass"></span>
                    </span>
                  </div>
                  <input type="text" class="form-control" aria-label="Search" placeholder="Search"> </div>
              </div>
              <!-- /.top-bar-search -->
            </div>
            <!-- /.top-bar-item -->
            <!-- .top-bar-item -->
            <div class="top-bar-item top-bar-item-right px-0 d-none d-sm-flex">
              
              <!-- .btn-account -->
              <div class="dropdown">
                <button class="btn-account d-none d-md-flex" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="user-avatar">
                    <img src="assets/images/avatars/profile.jpg" alt="">
                  </span>
                  <span class="account-summary pr-lg-4 d-none d-lg-block">
                    <span class="account-name">Beni Arisandi</span>
                    <span class="account-description">Marketing Manager</span>
                  </span>
                </button>
                <div class="dropdown-arrow dropdown-arrow-left"></div>
                <!-- .dropdown-menu -->
                <div class="dropdown-menu">
                  <h6 class="dropdown-header d-none d-md-block d-lg-none"> Beni Arisandi </h6>
                  <a class="dropdown-item" href="user-profile.html">
                    <span class="dropdown-icon oi oi-person"></span> Profile</a>
                  <a class="dropdown-item" href="auth-signin-v1.html">
                    <span class="dropdown-icon oi oi-account-logout"></span> Logout</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Help Center</a>
                  <a class="dropdown-item" href="#">Ask Forum</a>
                  <a class="dropdown-item" href="#">Keyboard Shortcuts</a>
                </div>
                <!-- /.dropdown-menu -->
              </div>
              <!-- /.btn-account -->
            </div>
            <!-- /.top-bar-item -->
          </div>
          <!-- /.top-bar-list -->
        </div>
        <!-- /.top-bar -->
      </header>
      <!-- /.app-header -->
      <!-- .app-aside -->
      <aside class="app-aside">
        <!-- .aside-content -->
        <div class="aside-content">
          <!-- .aside-header -->
          <header class="aside-header d-block d-md-none">
            <!-- .btn-account -->
            <button class="btn-account" type="button" data-toggle="collapse" data-target="#dropdown-aside">
              <span class="user-avatar user-avatar-lg">
                <img src="assets/images/avatars/profile.jpg" alt="">
              </span>
              <span class="account-icon">
                <span class="fa fa-caret-down fa-lg"></span>
              </span>
              <span class="account-summary">
                <span class="account-name">Beni Arisandi</span>
                <span class="account-description">Marketing Manager</span>
              </span>
            </button>
            <!-- /.btn-account -->
            <!-- .dropdown-aside -->
            <div id="dropdown-aside" class="dropdown-aside collapse">
              <!-- dropdown-items -->
              <div class="pb-3">
                <a class="dropdown-item" href="user-profile.html">
                  <span class="dropdown-icon oi oi-person"></span> Profile</a>
                <a class="dropdown-item" href="auth-signin-v1.html">
                  <span class="dropdown-icon oi oi-account-logout"></span> Logout</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Help Center</a>
                <a class="dropdown-item" href="#">Ask Forum</a>
                <a class="dropdown-item" href="#">Keyboard Shortcuts</a>
              </div>
              <!-- /dropdown-items -->
            </div>
            <!-- /.dropdown-aside -->
          </header>
          <!-- /.aside-header -->
          <!-- .aside-menu -->
          <section class="aside-menu has-scrollable">
            <!-- .stacked-menu -->
            <nav id="stacked-menu" class="stacked-menu">
              <!-- .menu -->
              <ul class="menu">
                <!-- .menu-item -->
                <li class="menu-item">
                  <a href="#" class="menu-link">
                    <span class="menu-icon oi oi-dashboard"></span>
                    <span class="menu-text">Dashboard</span>
                  </a>
                </li>
                <!-- /.menu-item -->
                
                <!-- .menu-header -->
                <li class="menu-header">Quản lý </li>
                <!-- /.menu-header -->
                <li class="menu-item">
                  <a href="qluser.php" class="menu-link">
                    <span class="menu-icon oi oi-people"></span>
                    <span class="menu-text">User</span>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="settings.php" class="menu-link">
                    <span class="menu-icon oi oi-wrench"></span>
                    <span class="menu-text">Settings</span>
                  </a>
                </li>
              </ul>
              <!-- /.menu -->
            </nav>
            <!-- /.stacked-menu -->
          </section>
          <!-- /.aside-menu -->
        </div>
        <!-- /.aside-content -->
      </aside>
      <!-- /.app-aside -->
      <!-- .app-main -->
      <main class="app-main">
        <!-- .wrapper -->
        <div class="wrapper">
          <!-- .page -->
          <div class="page">
            <!-- .page-inner -->
            <div class="page-inner">
              <!-- .page-title-bar -->
              <header class="page-title-bar">
                
                
                <!-- title and toolbar -->
                <div class="d-sm-flex align-items-sm-center">
                  <h1 class="page-title mr-sm-auto mb-0"> Cài đặt </h1>
                </div>
                <!-- /title and toolbar -->
              </header>
              <!-- /.page-title-bar -->
              <!-- .page-section -->
              <div class="page-section">
                <!-- .card -->
                <section class="card card-fluid">
                  
                  <!-- /.card-header -->
                  <!-- .card-body -->
                    <div class="card-body">
                        <div class="form-group">
                            <label class="col-form-label col-form-label-sm" for="selSmall">Chọn kiểu chơi</label>
                            <select class="custom-select custom-select-sm" id="selSmall">
                            <option value='2'> Đề</option>
                            <option value='1'> Lô </option>
                            <option value='3'> Lô xiên</option>
                            </select>
                        </div>
                    

                        <div class="" style="width: 100%;">
                                <!-- .table -->
                                <table class="table-select-number" style="width: 100%;">
                                   
                                    <!-- tbody -->
                                    <tbody>
                                    <!-- tr -->
                                    <tr>
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
                  <!-- /.card-body -->
                </section>
                <!-- /.card -->
                
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
    <!-- END PLUGINS JS -->
    <!-- BEGIN THEME JS -->
    <script src="assets/javascript/main.min.js"></script>
    <!-- END THEME JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="assets/javascript/pages/table-demo.js"></script>
    <!-- END PAGE LEVEL JS -->
  </body>
</html>