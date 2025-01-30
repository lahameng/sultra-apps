<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sultra Apps</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('AdminLTE') }}/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('AdminLTE') }}/dist/css/adminlte.min.css">
</head>
<body class="layout-top-nav" style="height: auto;">

  <!-- Navbar -->
  <nav class="navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a><img src="{{ asset('Img/logo-bpk.png') }}" width="35"></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="https://sultra.bpk.go.id" target="_blank" class="nav-link"><h4>BPK PERWAKILAN SULAWESI TENGGARA</h4></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <img src="{{ asset('Img/no_photo.png') }}" class="user-image img-circle elevation-2" alt="User Image">
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-primary">
            <img src="{{ asset('Img/no_photo.png') }}" class="img-circle elevation-2" alt="User Image">
            <p>
              {{ Auth::user()->nama }}
              <small>{{ Auth::user()->nip }} - {{ Auth::user()->jabatan }}</small>
            </p>
          </li>
      
          <!-- Menu Footer-->
          <li class="user-footer">
            <form action="{{ route('logout') }}" method="POST">
              @csrf
              <a href="#" class="btn btn-default btn-flat">Setting Akses</a>
              <button type="submit" class="btn btn-default btn-flat float-right">Sign out</button>
            </form>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-1">
          <div class="col-sm-6">
            <h5><i class="fas fa-home"></i> Sultra-Apps</h5>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-lightblue card-outline">
              <div class="card-body box-profile">
                <div class="card-header text-muted border-bottom-0">
                  {{ Auth::user()->jabatan }}
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>{{ Auth::user()->nama }}</b></h2>
                      <p class="text-muted text-sm"><b>NIP: </b> {{ Auth::user()->nip }} / {{ Auth::user()->nip_baru }} </p>
                    </div>
                    <div class="col-5 text-center">
                      <img src="{{ asset('Img/no_photo.png') }}" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                    <div>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> {{ Auth::user()->satker_nama }}</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-book"></i></span> {{ Auth::user()->email }}</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> {{ Auth::user()->mobile }}</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <form action="{{ route('logout') }}" method="POST">
                   @csrf
                    <button type="submit" class="btn btn-default btn-block"><i class="fas fa-share"></i> Sign Out</button>
                  </form>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-lightblue card-outline">
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-link mr-1"></i> WHISTLEBLOWING</strong>

                <p class="text-muted">
                  Pelaporan Indikasi Pelanggaran <br>
                  <a href="https://wbs.bpk.go.id/" target="_blank"> https://wbs.bpk.go.id/</a>
                </p>

                <hr>

                <strong><i class="fas fa-link mr-1"></i> PPG</strong>

                <p class="text-muted">Pelaporan Pengendalian Gratifikasi <br>
                <a href="https://gratifikasi.bpk.go.id/" target="_blank"> https://gratifikasi.bpk.go.id/</a></p>

                <hr>

                <strong><i class="fas fa-link mr-1"></i> PORTAL BPK RI</strong>

                <p class="text-muted">Portal Ilmu BPK RI, Kolaborasi dan Enterprise Search <br>
                <a href="https://portal.bpk.go.id/" target="_blank"> https://portal.bpk.go.id/</a></p>
              </div>
              <!-- /.card-body -->
            </div>
            <img src="{{ asset('Img/logo_kitamalulomi.jpeg') }}" height="100" width="200">
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9 "> 
            <div class="card card-lightblue card-outline">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#aplikasi" data-toggle="tab">Aplikasi</a></li>
                  <li class="nav-item"><a class="nav-link" href="#profil" data-toggle="tab">Profil</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="aplikasi">
                    <!-- Small Box (Stat card) -->
                    <div class="row">
                      <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-indigo">
                          <div class="inner">
                            <h3>HATI</h3>
                            <p>Helpdesk Subbagain Umum dan TI</p>
                          </div>
                          <div class="col">
                            <a href="{{ route('hati') }}"><img class="img-circle" src="{{ asset('Img/logo_hati.png') }}" width="100"></a>
                          </div><br>
                          <a href="{{ route('hati') }}" class="small-box-footer">
                            Masuk <i class="fas fa-arrow-circle-right"></i>
                          </a>
                        </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-success">
                          <div class="inner">
                            <h3>SIMVER</h3>
                            <p>Sistem Informasi Verifikasi Keuangan</p>
                          </div>
                          <div class="col">
                            <a><img class="img-circle" src="{{ asset('Img/logo_simver.png') }}" width="100"></a>
                          </div><br>
                          <a href="#" class="small-box-footer">
                            Masuk <i class="fas fa-arrow-circle-right"></i>
                          </a>
                        </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-warning">
                          <div class="inner">
                            <h3>SUNDARI</h3>
                            <p>Penyusunan Produk Hukum Online</p>
                          </div>
                          <div class="col">
                            <a><img class="img-circle" src="{{ asset('Img/logo_sundari.png') }}" width="100"></a>
                          </div><br>
                          <a href="#" class="small-box-footer">
                            Masuk <i class="fas fa-arrow-circle-right"></i>
                          </a>
                        </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-danger">
                          <div class="inner">
                            <h3>INTI</h3>
                            <p>Pencatatan, Peminjaman, dan Pelaporan</p>
                          </div>
                          <div class="col">
                            <a><img class="img-circle" src="{{ asset('Img/logo_inti.png') }}" width="100"></a>
                          </div><br>
                          <a href="#" class="small-box-footer">
                            Masuk <i class="fas fa-arrow-circle-right"></i>
                          </a>
                        </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-light">
                          <div class="inner">
                            <h3>KLINIK</h3>
                            <p>Aplikask Klinik Online</p>
                          </div>
                          <div class="col">
                            <a><img class="img-circle" src="{{ asset('Img/logo_klinik_sultra.png') }}" width="100"></a>
                          </div><br>
                          <a href="#" class="small-box-footer">
                            Masuk <i class="fas fa-arrow-circle-right"></i>
                          </a>
                        </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-light">
                          <div class="inner">
                            <h3>PIAWAI</h3>
                            <p>Aplikasi Penilaian Pegawai</p>
                          </div>
                          <div class="col">
                            <a><img class="img-circle" src="{{ asset('Img/logo_piawai.png') }}" width="100"></a>
                          </div><br>
                          <a href="#" class="small-box-footer">
                            Masuk <i class="fas fa-arrow-circle-right"></i>
                          </a>
                        </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-lg-3 col-6">
                       <!-- small card -->
                        <div class="small-box bg-light">
                          <div class="inner">
                            <h3>SIRIKA</h3>
                            <p>Aplikasi Kriteria Pemeriksaan</p>
                          </div>
                          <div class="col">
                           <a><img class="img-circle" src="{{ asset('Img/logo_sirika.png') }}" width="100"></a>
                          </div><br>
                         <a href="#" class="small-box-footer">
                           Masuk <i class="fas fa-arrow-circle-right"></i>
                         </a>
                        </div>
                      </div>
                     <!-- ./col -->
                     <div class="col-lg-3 col-6">
                        <!-- small card -->
                       <div class="small-box bg-light">
                         <div class="inner">
                           <h3>GUESTBOOK</h3>
                           <p>Aplikasi Buku Tamu</p>
                          </div>
                          <div class="col">
                            <a><img class="img-circle" src="{{ asset('Img/logo_guestbook.png') }}" width="100"></a>
                          </div><br>
                          <a href="#" class="small-box-footer">
                           Masuk <i class="fas fa-arrow-circle-right"></i>
                          </a>
                       </div>
                     </div>
                     <!-- ./col -->
                      <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-orange">
                          <div class="inner">
                            <h3>ED-SHIRANS</h3>
                           <p>Sistem Informasi Data Pegawai</p>
                          </div>
                          <div class="col">
                           <a><img class="img-circle" src="{{ asset('Img/logo_edshirans.png') }}" width="100"></a>
                          </div><br>
                          <a href="#" class="small-box-footer">
                          Masuk <i class="fas fa-arrow-circle-right"></i>
                          </a>
                        </div>
                      </div>
                      <!-- ./col -->
                     <div class="col-lg-3 col-6">
                       <!-- small card -->
                       <div class="small-box bg-purple">
                          <div class="inner">
                           <h3>DEP</h3>
                            <p>Database Entitas Pemeriksaan</p>
                          </div>
                         <div class="col">
                            <a><img class="img-circle" src="{{ asset('Img/logo_dep.png') }}" width="100"></a>
                          </div><br>
                         <a href="#" class="small-box-footer">
                            Masuk <i class="fas fa-arrow-circle-right"></i>
                          </a>
                       </div>
                      </div>
                      <!-- ./col -->
                     <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-maroon">
                          <div class="inner">
                           <h3>INFOGRAFIS</h3>
                           <p>Infografis BPK Perwakilan Sultra</p>
                          </div>
                          <div class="col">
                            <a><img class="img-circle" src="{{ asset('Img/logo_infografis.png') }}" width="100"></a>
                          </div><br>
                          <a href="#" class="small-box-footer">
                            Masuk <i class="fas fa-arrow-circle-right"></i>
                          </a>
                        </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-teal">
                          <div class="inner">
                            <h3>LITERASI</h3>
                            <p>Ruang Literasi Hukum BPK Sultra</p>
                          </div>
                          <div class="col">
                            <a><img class="img-circle" src="{{ asset('Img/logo_rlh.png') }}" width="100"></a>
                          </div><br>
                          <a href="#" class="small-box-footer">
                            Masuk <i class="fas fa-arrow-circle-right"></i>
                          </a>
                        </div>
                      </div>
                      <!-- ./col -->
                    </div>
                    <!-- /.row -->
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="profil">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">NIP</label>
                        <div class="col-sm-8">
                          <input class="form-control" placeholder="{{ Auth::user()->nip }} / {{ Auth::user()->nip_baru }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-8">
                          <input type="email" class="form-control" placeholder="{{ Auth::user()->nama }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Tempat / Tgl Lahir</label>
                        <div class="col-sm-8">
                          <input type="email" class="form-control" placeholder="{{ Auth::user()->tpt_lahir }} / {{ Auth::user()->tgl_lahir }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-8">
                          <input type="email" class="form-control" placeholder="{{ Auth::user()->jenis_kelamin }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Agama</label>
                        <div class="col-sm-8">
                          <input type="email" class="form-control" placeholder="{{ Auth::user()->agama }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Status Pernikahan</label>
                        <div class="col-sm-8">
                          <input type="email" class="form-control" placeholder="{{ Auth::user()->status_perkawinan }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Pendidikan Terakhir</label>
                        <div class="col-sm-8">
                          <input type="email" class="form-control" placeholder="{{ Auth::user()->pendidikan_formal }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Pangkat / TMT</label>
                        <div class="col-sm-8">
                          <input type="email" class="form-control" placeholder="{{ Auth::user()->nama_pangkat }} / {{ Auth::user()->tmt_cpns }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Jabatan</label>
                        <div class="col-sm-8">
                          <input type="email" class="form-control" placeholder="{{ Auth::user()->jabatan }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-8">
                          <input type="email" class="form-control" placeholder="{{ Auth::user()->email }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Telepon</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" placeholder="{{ Auth::user()->mobile }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Alamat</label>
                        <div class="col-sm-8">
                          <textarea class="form-control" placeholder="{{ Auth::user()->alamat }}"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Unit Kerja</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" placeholder="{{ Auth::user()->unit_kerja_nama }} | {{ Auth::user()->satker_nama }}">
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal">
                      <div class="col-lg-6">
                        <div class="card">
                          <div class="card-header">
                            <h5 class="m-0">Penggantian Password Terakhir</h5>
                          </div>
                          <div class="card-body">
                            <p class="card-text">{{ Auth::user()->updated_at }}</p>
                            <a href="https://resetpassword.bpk.go.id" target="_blank" class="btn btn-warning">Ganti Password</a>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-md-6 -->
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0.a
    </div>
    <strong>Copyright &copy; 2024-2025 <a href="https://sultra.bpk.go.id" target="_blank">BPK Perwakilan Provinsi Sulawesi Tenggara</a>.</strong> All rights reserved.
  </footer>

<!-- jQuery -->
<script src="{{ asset('AdminLTE') }}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('AdminLTE') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('AdminLTE') }}/dist/js/adminlte.min.js"></script>
</body>
</html>
