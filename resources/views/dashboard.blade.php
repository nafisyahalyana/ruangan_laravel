
<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template"
    />
    <meta
      name="description"
      content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>SIRUANG | Dashboard</title>
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="{{ asset('../assets/images/logo.png') }}"
    />
    <!-- Custom CSS -->
    <link href="{{ asset('../assets/libs/flot/css/float-chart.css') }}" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="{{ asset('../dist/css/style.min.css') }}" rel="stylesheet" />
    <link
      href="../assets/libs/fullcalendar/dist/fullcalendar.min.css"
      rel="stylesheet"
    />
    <link href="../assets/extra-libs/calendar/calendar.css" rel="stylesheet" />
    <link href="../dist/css/style.min.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    {{-- <body class="antialiased">
      <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
          @if (Route::has('login'))
              <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                  @auth
                      <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                  @else
                      <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                      @if (Route::has('register'))
                          <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                      @endif
                  @endauth
              </div>
          @endif --}}
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin5"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    >
      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header" data-logobg="skin5">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="index.html">
              <!-- Logo icon -->
              <b class="logo-icon ps-2">
                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                <!-- Dark Logo icon -->
                <img
                  src="{{ asset('../assets/images/logo.png') }}"
                  alt="homepage"
                  class="light-logo"
                  width="45"
                />
              </b>
              <!--End Logo icon -->
              <!-- Logo text -->
              <span class="logo-text ms-2">
                <!-- dark Logo text -->
                <img
                  src="{{ asset('../assets/images/logo-text.png') }}"
                  alt="homepage"
                  class="light-logo"
                  width="115"
                />
              </span>
              <!-- Logo icon -->
              <!-- <b class="logo-icon"> -->
              <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
              <!-- Dark Logo icon -->
              <!-- <img src="../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

              <!-- </b> -->
              <!--End Logo icon -->
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a
              class="nav-toggler waves-effect waves-light d-block d-md-none"
              href="javascript:void(0)"
              ><i class="ti-menu ti-close"></i
            ></a>
          </div>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <div
            class="navbar-collapse collapse"
            id="navbarSupportedContent"
            data-navbarbg="skin5"
          >
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-start me-auto">
              <li class="nav-item d-none d-lg-block">
                <a
                  class="nav-link sidebartoggler waves-effect waves-light"
                  href="javascript:void(0)"
                  data-sidebartype="mini-sidebar"
                  ><i class="mdi mdi-menu font-24"></i
                ></a>
              </li>
              
              <!-- ============================================================== -->
              <!-- Search -->
              <!-- ============================================================== -->
              <li class="nav-item search-box">
                <a
                  class="nav-link waves-effect waves-dark"
                  href="javascript:void(0)"
                  ><i class="mdi mdi-magnify fs-4"></i
                ></a>
                <form class="app-search position-absolute">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Search &amp; enter"
                  />
                  <a class="srh-btn"><i class="mdi mdi-window-close"></i></a>
                </form>
              </li>
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-end">
              <!-- ============================================================== -->
              <!-- Comment -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-bell font-24"></i>
                </a>
               
              </li>
              

              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown">
                <a
                  class="
                    nav-link
                    dropdown-toggle
                    text-muted
                    waves-effect waves-dark
                    pro-pic
                  "
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <img
                    src="{{ asset('../assets/images/users/1.jpg') }}"
                    alt="user"
                    class="rounded-circle"
                    width="31"
                  />
                </a>
                <ul
                  class="dropdown-menu dropdown-menu-end user-dd animated"
                  aria-labelledby="navbarDropdown"
                >
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0)" onclick="logout()">
                  <i class="fa fa-power-off me-1 ms-1"></i> Logout
                </a>
                
                <script>
                function logout() {
                  // Redirect ke halaman login
                  window.location.href = "/";
                }
                </script>
                </ul>
              </li>
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
            </ul>
          </div>
        </nav>
      </header>
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <aside class="left-sidebar" data-sidebarbg="skin5" color="green">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="dashboard"
                  aria-expanded="false"
                  ><i class="mdi mdi-view-dashboard"></i
                  ><span class="hide-menu">Dashboard</span></a
                >
              </li>
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">Dashboard</h4>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Library
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Sales Cards  -->
          <!-- ============================================================== -->
          <div class="row">
            <!-- Column -->
            {{-- <div class="col-md-6 col-lg-2 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-cyan text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-view-dashboard"></i>
                  </h1>
                  <h6 class="text-white">Dashboard</h6>
                </div>
              </div>
            </div> --}}
            <!-- Column -->
            <div class="col-md-6 col-lg-3 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-success text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-chart-areaspline"></i>
                  </h1>
                  <h6 class="text-white text-decoration: none"><a href="pengguna" style="color:white">Pengguna</a></h6>
                </div>
              </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-3 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-warning text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-collage"></i>
                  </h1>
                  <h6 class="text-whitetext-decoration: none"><a href="ruangan" style="color:white">Ruangan</a></h6>
                </div>
              </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-3 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-danger text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-border-outside"></i>
                  </h1>
                  <h6 class="text-white text-decoration: none"><a href="peminjaman" style="color:white">Peminjaman</a></h6>
                </div>
              </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-3 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-info text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-arrow-all"></i>
                  </h1>
                  <h6 class="text-white"><a href="jadwal" style="color:white">Jadwal</a></h6>
                </div>
              </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            {{-- <div class="col-md-6 col-lg-4 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-danger text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-receipt"></i>
                  </h1>
                  <h6 class="text-white">Request Peminjaman</h6>
                </div>
              </div>
            </div> --}}
            <!-- Column -->
            {{-- <div class="col-md-6 col-lg-2 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-info text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-relative-scale"></i>
                  </h1>
                  <h6 class="text-white">Buttons</h6>
                </div>
              </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-cyan text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-pencil"></i>
                  </h1>
                  <h6 class="text-white">Elements</h6>
                </div>
              </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-success text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-calendar-check"></i>
                  </h1>
                  <h6 class="text-white">Calnedar</h6>
                </div>
              </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-warning text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-alert"></i>
                  </h1>
                  <h6 class="text-white">Errors</h6>
                </div>
              </div>
            </div> --}} 
            <!-- Column -->
            
          </div>
          <div class="col-md-12">
            <div class="card">
              <div class="">
                <div class="row">
                  <div class="col-lg-3 border-right pe-0">
                    <div class="card-body border-bottom">
                      <h4 class="card-title mt-2">Drag & Drop Event</h4>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-12">
                          <div id="calendar-events" class="">
                            <div
                              class="calendar-events mb-3"
                              data-class="bg-info"
                            >
                              <i class="fa fa-circle text-info me-2"></i>Event
                              One
                            </div>
                            <div
                              class="calendar-events mb-3"
                              data-class="bg-success"
                            >
                              <i class="fa fa-circle text-success me-2"></i>
                              Event Two
                            </div>
                            <div
                              class="calendar-events mb-3"
                              data-class="bg-danger"
                            >
                              <i class="fa fa-circle text-danger me-2"></i
                              >Event Three
                            </div>
                            <div
                              class="calendar-events mb-3"
                              data-class="bg-warning"
                            >
                              <i class="fa fa-circle text-warning me-2"></i
                              >Event Four
                            </div>
                          </div>
                          <!-- checkbox -->
                          <div class="form-check">
                            <input
                              type="checkbox"
                              class="form-check-input"
                              id="drop-remove"
                            />
                            <label class="cform-check-label" for="drop-remove"
                              >Remove after drop</label
                            >
                          </div>
                          <a
                            href="javascript:void(0)"
                            data-toggle="modal"
                            data-target="#add-new-event"
                            class="
                              d-flex
                              align-items-center
                              justify-content-center
                              btn
                              mt-3
                              btn-info
                              d-block
                              waves-effect waves-light
                            "
                          >
                            <i class="mdi mdi-plus fs-4 me-1"></i> Add New
                            Event
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-9">
                    <div class="card-body b-l calender-sidebar">
                      <div id="calendar"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal none-border" id="my-event">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title"><strong>Add Event</strong></h4>
                  <button
                    type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-hidden="true"
                  >
                    &times;
                  </button>
                </div>
                <div class="modal-body"></div>
                <div class="modal-footer">
                  <button
                    type="button"
                    class="btn btn-secondary waves-effect"
                    data-dismiss="modal"
                  >
                    Close
                  </button>
                  <button
                    type="button"
                    class="btn btn-success save-event waves-effect waves-light"
                  >
                    Create event
                  </button>
                  <button
                    type="button"
                    class="btn btn-danger delete-event waves-effect waves-light"
                    data-dismiss="modal"
                  >
                    Delete
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade none-border" id="add-new-event">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title"><strong>Add</strong> a category</h4>
                  <button
                    type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-hidden="true"
                  >
                    &times;
                  </button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="row">
                      <div class="col-md-6">
                        <label class="control-label">Category Name</label>
                        <input
                          class="form-control form-white"
                          placeholder="Enter name"
                          type="text"
                          name="category-name"
                        />
                      </div>
                      <div class="col-md-6">
                        <label class="control-label"
                          >Choose Category Color</label
                        >
                        <select
                          class="form-select shadow-none form-white"
                          data-placeholder="Choose a color..."
                          name="category-color"
                        >
                          <option value="success">Success</option>
                          <option value="danger">Danger</option>
                          <option value="info">Info</option>
                          <option value="primary">Primary</option>
                          <option value="warning">Warning</option>
                          <option value="inverse">Inverse</option>
                        </select>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button
                    type="button"
                    class="
                      btn btn-danger
                      waves-effect waves-light
                      save-category
                    "
                    data-dismiss="modal"
                  >
                    Save
                  </button>
                  <button
                    type="button"
                    class="btn btn-secondary waves-effect"
                    data-dismiss="modal"
                  >
                    Close
                  </button>
                </div>
              </div>
            </div>
          </div>
          <!-- ============================================================== -->
          <!-- Sales chart -->
          <!-- ============================================================== -->
          
          <!-- ============================================================== -->
          <!-- Sales chart -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Recent comment and chats -->
          <!-- ============================================================== -->
          
          <!-- ============================================================== -->
          <!-- Recent comment and chats -->
          <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">
          All Rights Reserved by SIRUANG. Designed and Developed by
          <a href="#">APAYACH</a>.
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('../assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('/dist/js/jquery.ui.touch-punch-improved.js') }}"></script>
    <script src="{{ asset('/dist/js/jquery-ui.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('../assets/extra-libs/sparkline/sparkline.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('../dist/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('../dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('../dist/js/custom.min.js') }}"></script>
    <!--This page JavaScript -->
    <!-- <script src="../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="{{ asset('../assets/libs/flot/excanvas.js') }}"></script>
    <script src="{{ asset('../assets/libs/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('../assets/libs/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('../assets/libs/flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('../assets/libs/flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('../assets/libs/flot/jquery.flot.crosshair.js') }}"></script>
    <script src="{{ asset('../assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('../dist/js/pages/chart/chart-page-init.js') }}"></script>
    <script src="{{ asset('/assets/libs/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('/assets/libs/fullcalendar/dist/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('/dist/js/pages/calendar/cal-init.js') }}"></script>
    
  </body>
</html>

