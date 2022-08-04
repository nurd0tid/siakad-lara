<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords"
    content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="pixelstrap">
  <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
  <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
  <title>SIAKAD - Media Informatika</title>
  <!-- Google font-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
    rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
    rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
    rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/icofont.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/themify.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/flag-icon.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/feather-icon.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
  @stack('css')
</head>

<body>
  <!-- Loader starts-->
  <div class="loader-wrapper">
    <div class="theme-loader">
      <div class="loader-p"></div>
    </div>
  </div>
  <!-- Loader ends-->
  <!-- page-wrapper Start       -->
  <div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <div class="page-main-header">
      <div class="main-header-right row m-0">
        <div class="main-header-left">
          <div class="logo-wrapper"><a href="/home"><img class="img-fluid" src="../assets/images/logo/logo.png"
                alt=""></a></div>
          <div class="dark-logo-wrapper"><a href="/home"><img class="img-fluid"
                src="../assets/images/logo/dark-logo.png" alt=""></a></div>
          <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center"
              id="sidebar-toggle"></i></div>
        </div>
        <div class="left-menu-header col">
          <ul>
            <li>
              <form class="form-inline search-form">
                <div class="search-bg"><i class="fa fa-search"></i>
                  <input class="form-control-plaintext" placeholder="Search here.....">
                </div>
              </form><span class="d-sm-none mobile-search search-bg"><i class="fa fa-search"></i></span>
            </li>
          </ul>
        </div>
        <div class="nav-right col pull-right right-menu p-0">
          <ul class="nav-menus">
            <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i
                  data-feather="maximize"></i></a></li>
            <li class="onhover-dropdown">
              <div class="bookmark-box"><i data-feather="star"></i></div>
              <div class="bookmark-dropdown onhover-show-div">
                <div class="form-group mb-0">
                  <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"><i
                          class="fa fa-search"></i></span>
                    </div>
                    <input class="form-control" type="text" placeholder="Search for bookmark...">
                  </div>
                </div>
                <ul class="m-t-5">
                  <li class="add-to-bookmark"><i class="bookmark-icon" data-feather="inbox"></i>Email<span
                      class="pull-right"><i data-feather="star"></i></span></li>
                  <li class="add-to-bookmark"><i class="bookmark-icon" data-feather="message-square"></i>Chat<span
                      class="pull-right"><i data-feather="star"></i></span></li>
                  <li class="add-to-bookmark"><i class="bookmark-icon" data-feather="command"></i>Feather Icon<span
                      class="pull-right"><i data-feather="star"></i></span></li>
                  <li class="add-to-bookmark"><i class="bookmark-icon" data-feather="airplay"></i>Widgets<span
                      class="pull-right"><i data-feather="star"> </i></span></li>
                </ul>
              </div>
            </li>
            <li class="onhover-dropdown">
              <div class="notification-box"><i data-feather="bell"></i><span class="dot-animated"></span></div>
              <ul class="notification-dropdown onhover-show-div">
                <li>
                  <p class="f-w-700 mb-0">You have 3 Notifications<span
                      class="pull-right badge badge-primary badge-pill">4</span></p>
                </li>
                <li class="noti-primary">
                  <div class="media"><span class="notification-bg bg-light-primary"><i data-feather="activity">
                      </i></span>
                    <div class="media-body">
                      <p>Delivery processing </p><span>10 minutes ago</span>
                    </div>
                  </div>
                </li>
                <li class="noti-secondary">
                  <div class="media"><span class="notification-bg bg-light-secondary"><i
                        data-feather="check-circle"> </i></span>
                    <div class="media-body">
                      <p>Order Complete</p><span>1 hour ago</span>
                    </div>
                  </div>
                </li>
                <li class="noti-success">
                  <div class="media"><span class="notification-bg bg-light-success"><i data-feather="file-text">
                      </i></span>
                    <div class="media-body">
                      <p>Tickets Generated</p><span>3 hour ago</span>
                    </div>
                  </div>
                </li>
                <li class="noti-danger">
                  <div class="media"><span class="notification-bg bg-light-danger"><i data-feather="user-check">
                      </i></span>
                    <div class="media-body">
                      <p>Delivery Complete</p><span>6 hour ago</span>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <li>
              <div class="mode"><i class="fa fa-moon-o"></i></div>
            </li>
            <li class="onhover-dropdown"><i data-feather="message-square"></i>
              <ul class="chat-dropdown onhover-show-div">
                <li>
                  <div class="media"><img class="img-fluid rounded-circle me-3" src="../assets/images/user/4.jpg"
                      alt="">
                    <div class="media-body"><span>Ain Chavez</span>
                      <p class="f-12 light-font">Lorem Ipsum is simply dummy...</p>
                    </div>
                    <p class="f-12">32 mins ago</p>
                  </div>
                </li>
                <li>
                  <div class="media"><img class="img-fluid rounded-circle me-3" src="../assets/images/user/1.jpg"
                      alt="">
                    <div class="media-body"><span>Erica Hughes</span>
                      <p class="f-12 light-font">Lorem Ipsum is simply dummy...</p>
                    </div>
                    <p class="f-12">58 mins ago</p>
                  </div>
                </li>
                <li>
                  <div class="media"><img class="img-fluid rounded-circle me-3" src="../assets/images/user/2.jpg"
                      alt="">
                    <div class="media-body"><span>Kori Thomas</span>
                      <p class="f-12 light-font">Lorem Ipsum is simply dummy...</p>
                    </div>
                    <p class="f-12">1 hr ago</p>
                  </div>
                </li>
                <li class="text-center"> <a class="f-w-700" href="javascript:void(0)">See All </a></li>
              </ul>
            </li>
            <li class="onhover-dropdown p-0">

              <button class="btn btn-primary-light" type="button"><a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><i
                    data-feather="log-out"></i>{{ __('Logout') }}</a>
              </button>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </li>
          </ul>
        </div>
        <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
      </div>
    </div>
    <!-- Page Header Ends                              -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper sidebar-icon">
      <!-- Page Sidebar Start-->
      <header class="main-nav">
        <div class="sidebar-user text-center"><a class="setting-primary" href="javascript:void(0)"><i
              data-feather="settings"></i></a><img class="img-90 rounded-circle"
            src="../assets/images/dashboard/1.png" alt="">
          <div class="badge-bottom"><span class="badge badge-primary">New</span></div><a href="user-profile.html">
            <h6 class="mt-3 f-14 f-w-600">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h6>
          </a>
          <p class="mb-0 font-roboto">Human Resources Department</p>
          <ul>
            <li><span><span class="counter">19.8</span>k</span>
              <p>Follow</p>
            </li>
            <li><span>2 year</span>
              <p>Experince</p>
            </li>
            <li><span><span class="counter">95.2</span>k</span>
              <p>Follower </p>
            </li>
          </ul>
        </div>
        <nav>
          <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
              <ul class="nav-menu custom-scrollbar">
                <li class="back-btn">
                  <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                      aria-hidden="true"></i></div>
                </li>
                <li class="sidebar-main-title">
                  <div>
                    <h6>General </h6>
                  </div>
                </li>
                <li class="dropdown"><a class="nav-link menu" href="{{ route('home') }}"><i
                      data-feather="home"></i><span>Dashboard</span></a>
                </li>
                <li class="sidebar-main-title">
                  <div>
                    <h6>Applications </h6>
                  </div>
                </li>
                <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i
                      data-feather="grid"></i><span>Data Master</span></a>
                  <ul class="nav-submenu menu-content">
                    <li><a href="http://">Kurikulum</a></li>
                    <li><a href="http://">Tahun Akademik</a></li>
                    <li><a href="http://">Gedung</a></li>
                    <li><a href="http://">Ruangan</a></li>
                    <li><a href="http://">Golongan</a></li>
                    <li><a href="http://">Ptk</a></li>
                    <li><a href="http://">Jurusan</a></li>
                    <li><a href="http://">Kelas</a></li>
                    <li><a href="http://">Kepegawaian</a></li>
                    <li><a href="http://">Identitas Sekolah</a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i
                      data-feather="users"></i><span>Data Pengguna</span></a>
                  <ul class="nav-submenu menu-content">
                    <li><a href="http://">Siswa</a></li>
                    <li><a href="http://">Guru</a></li>
                    <li><a href="http://">Kepala Sekolah</a></li>
                    <li><a href="http://">Admin</a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i
                      data-feather="book"></i><span>Data Akademik</span></a>
                  <ul class="nav-submenu menu-content">
                    <li><a href="http://">Kelompok Mapel</a></li>
                    <li><a href="http://">Mata Pelajaran</a></li>
                    <li><a href="http://">Jadwal Pelajaran</a></li>
                    <li><a href="http://">Bahan & Tugas</a></li>
                    <li><a href="http://">Kompetensi Dasar</a></li>
                    <li><a href="http://">Penilaian Diri</a></li>
                    <li><a href="http://">Rentang Nilai</a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i
                      data-feather="calendar"></i><span>Data Absensi</span></a>
                  <ul class="nav-submenu menu-content">
                    <li><a href="http://">Absensi Guru</a></li>
                    <li><a href="http://">Absensi Siswa</a></li>
                    <li><a href="http://">Rekap Absensi</a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i
                      data-feather="file-text"></i><span>Laporan Nilai Siswa</span></a>
                  <ul class="nav-submenu menu-content">
                    <li><a href="http://">Nilai UTS</a></li>
                    <li><a href="http://">Nilai Raport</a></li>
                    <li><a href="http://">Capaian Belajar</a></li>
                    <li><a href="http://">Extrakulikuler</a></li>
                    <li><a href="http://">Presentasi</a></li>
                    <li><a href="http://">Raport UTS</a></li>
                    <li><a href="http://">Cetak Raport</a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="nav-link menu" href="javascript:void(0)"><i
                      data-feather="book-open"></i><span>Jurnal KBM</span></a>
                </li>
                <li class="sidebar-main-title">
                  <div>
                    <h6>Miscellaneous </h6>
                  </div>
                </li>
                <li class="dropdown"><a class="nav-link menu" href="{{ route('job') }}"><i
                      data-feather="pocket"></i><span>Job Search</span></a>
                </li>
              </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
          </div>
        </nav>
      </header>
      <!-- Page Sidebar Ends-->
      @yield('content')
      <!-- footer start-->
      <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 footer-copyright">
              <p class="mb-0">SIAKAD - Media Informatika.</p>
            </div>
            <div class="col-md-6">
              <p class="pull-right mb-0">Hand crafted & made with <i class="fa fa-heart font-secondary"></i> nurd0tid
              </p>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script src="../assets/js/jquery-3.5.1.min.js"></script>
  <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
  <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
  <script src="../assets/js/sidebar-menu.js"></script>
  <script src="../assets/js/config.js"></script>
  <script src="../assets/js/bootstrap/popper.min.js"></script>
  <script src="../assets/js/bootstrap/bootstrap.min.js"></script>
  <script src="../assets/js/script.js"></script>
  @stack('scripts')
</body>

</html>
