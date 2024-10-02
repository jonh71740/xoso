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
                  <h1 class="page-title mr-sm-auto mb-0"> Quản lý user </h1>
                  <!-- .btn-toolbar -->
                  <div class="btn-toolbar">
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
                      <i class="oi oi-plus"></i>
                      <span class="ml-1">Thêm</span>
                    </button>
                    
                  </div>
                  <!-- /.btn-toolbar -->
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
                    <!-- .form-group -->
                    <div class="form-group">
                      <!-- .input-group -->
                      <div class="input-group input-group-alt">
                        
                        <!-- .input-group -->
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <span class="oi oi-magnifying-glass"></span>
                            </span>
                          </div>
                          <input type="text" class="form-control" placeholder="Search record"> </div>
                        <!-- /.input-group -->
                      </div>
                      <!-- /.input-group -->
                    </div>
                    <!-- /.form-group -->
                    <!-- .table-responsive -->
                    <div class="table-responsive">
                      <!-- .table -->
                      <table class="table">
                        <!-- thead -->
                        <thead>
                          <tr>
                            <th>STT</th>
                            <th>Tài khoản</th>
                            <th>Vai trò</th>
                            <th>Số dư</th>
                            <th>Trạng thái</th>
                            <th style="width:100px; min-width:100px;"> &nbsp; </th>
                          </tr>
                        </thead>
                        <!-- /thead -->
                        <!-- tbody -->
                        <tbody>
                          <!-- tr -->
                          <tr>
                            <td>1</td>
                            <td>Nguyễn văn A</td>
                            <td class="align-middle"> nguyenvana </td>
                            <td class="align-middle"> 100.000.000 </td>
                            <td class="align-middle"> 1 </td>
                            <td class="align-middle text-right">
                              <a href="#" class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#exampleModal2">
                                <i class="fa fa-pencil-alt"></i>
                                <span class="sr-only">Edit</span>
                              </a>
                              <a href="#" class="btn btn-sm btn-secondary">
                                <i class="far fa-trash-alt"></i>
                                <span class="sr-only">Remove</span>
                              </a>
                            </td>
                          </tr>
                          <!-- /tr -->
                          <!-- tr -->
                          <tr>
                            <td>2</td>
                            <td>Nguyễn văn B</td>
                            <td class="align-middle"> 329 </td>
                            <td class="align-middle"> 4 </td>
                            <td class="align-middle"> $31.70 </td>
                            <td class="align-middle text-right">
                              <a href="#" class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#exampleModal2">
                                <i class="fa fa-pencil-alt"></i>
                                <span class="sr-only">Edit</span>
                              </a>
                              <a href="#" class="btn btn-sm btn-secondary">
                                <i class="far fa-trash-alt"></i>
                                <span class="sr-only">Remove</span>
                              </a>
                            </td>
                          </tr>
                          <!-- /tr -->
                          <!-- tr -->
                          <tr>
                            <td>3</td>
                            <td>Nguyễn văn C</td>
                            <td class="align-middle"> 329 </td>
                            <td class="align-middle"> 4 </td>
                            <td class="align-middle"> $31.70 </td>
                            <td class="align-middle text-right">
                              <a href="#" class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#exampleModal2">
                                <i class="fa fa-pencil-alt"></i>
                                <span class="sr-only">Edit</span>
                              </a>
                              <a href="#" class="btn btn-sm btn-secondary">
                                <i class="far fa-trash-alt"></i>
                                <span class="sr-only">Remove</span>
                              </a>
                            </td>
                          </tr>
                          <!-- /tr -->
                        </tbody>
                        <!-- /tbody -->
                      </table>
                      <!-- /.table -->
                    </div>
                    <!-- /.table-responsive -->
                    <!-- .pagination -->
                    <ul class="pagination justify-content-center mt-4">
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">
                          <i class="fa fa-lg fa-angle-left"></i>
                        </a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">1</a>
                      </li>
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">...</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">13</a>
                      </li>
                      <li class="page-item active">
                        <a class="page-link" href="#">14</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">15</a>
                      </li>
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">...</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">24</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">
                          <i class="fa fa-lg fa-angle-right"></i>
                        </a>
                      </li>
                    </ul>
                    <!-- /.pagination -->
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

    <!-- Modal Add -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm user</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <div class="form-group">
                            <label for="username">Tài khoản</label>
                            <input type="text" class="form-control" id="username" placeholder="Username" required="">
                    </div>
                    <div class="form-group">
                            <label for="username">Vai trò</label>
                            <select class="custom-select d-block w-100" id="country" required="">
                                <option value=""> Choose... </option>
                                <option value=""> User </option>
                                <option value=""> Mode </option>
                                <option value=""> Admin </option>
                            </select>
                    </div>
                    <div class="form-group">
                            <label for="username">Số dư</label>
                            <input type="number" class="form-control">
                    </div>
                    <div class="form-group">
                            <label for="username">Trạng thái</label>
                            <select class="custom-select d-block w-100" id="country" required="">
                                <option value=""> Mở </option>
                                <option value=""> Đóng </option>
                            </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">Sửa user</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <div class="form-group">
                            <label for="username">Tài khoản</label>
                            <input type="text" class="form-control" id="username" placeholder="Username" required="">
                    </div>
                    <div class="form-group">
                            <label for="username">Vai trò</label>
                            <select class="custom-select d-block w-100" id="country" required="">
                                <option value=""> Choose... </option>
                                <option value=""> User </option>
                                <option value=""> Mode </option>
                                <option value=""> Admin </option>
                            </select>
                    </div>
                    <div class="form-group">
                            <label for="username">Số dư</label>
                            <input type="number" class="form-control">
                    </div>
                    <div class="form-group">
                            <label for="username">Trạng thái</label>
                            <select class="custom-select d-block w-100" id="country" required="">
                                <option value=""> Mở </option>
                                <option value=""> Đóng </option>
                            </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
    </div>


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