 <div class="min-height-300 bg-primary position-absolute w-100"></div>
 <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
     id="sidenav-main">

     <div class="sidenav-header">
         <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
             aria-hidden="true" id="iconSidenav"></i>
         <a class="navbar-brand m-0" href="/dashboard">
             <img src="{{ asset('assets/images/icons/logo.png') }}" class="navbar-brand-img h-100" alt="main_logo">
             <span class="ms-1 font-weight-bold">SIBANGUN</span>
         </a>
     </div>
     <hr class="horizontal dark mt-0">
     <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
         <ul class="navbar-nav">
             <li class="nav-item">
                 <a class="nav-link {{ $active == 'dashboard' ? 'active' : '' }}" href="/admin/dashboard">
                     <div
                         class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                         <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                     </div>
                     <span class="nav-link-text ms-1">Dashboard</span>
                 </a>
             </li>
             <li class="nav-item mt-3">
                 <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Inventory</h6>
             </li>
             <li class="nav-item">
                 <a class="nav-link  {{ $active == 'Supplier' ? 'active' : '' }} " href="/admin/suppliers">
                     <div
                         class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                         <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
                     </div>
                     <span class="nav-link-text ms-1">Supplier</span>
                 </a>
             </li>
             <li class="nav-item">
                 <a class="nav-link  {{ $active == 'Barang' ? 'active' : '' }} " href="/admin/barang">
                     <div
                         class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                         <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
                     </div>
                     <span class="nav-link-text ms-1">Barang Bangunan</span>
                 </a>
             </li>
             <li class="nav-item mt-3">
                 <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Transaksi</h6>
             </li>
             <li class="nav-item">
                 <a class="nav-link  {{ $active == 'BarangMasuk' ? 'active' : '' }} " href="/admin/barangmasuk">
                     <div
                         class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                         <i class="ni ni-app text-info text-sm opacity-10"></i>
                     </div>
                     <span class="nav-link-text ms-1">Barang Masuk</span>
                 </a>
             </li>
             <li class="nav-item">
                 <a class="nav-link  {{ $active == 'transaksi' ? 'active' : '' }} " href="/admin/transaksi">
                     <div
                         class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                         <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
                     </div>
                     <span class="nav-link-text ms-1">Transaksi Penjualan</span>
                 </a>
             </li>
             <li class="nav-item mt-3">
                 <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Cetak</h6>
             </li>
             <li class="nav-item">
                 <a class="nav-link {{ $active == 'cetak' ? 'active' : '' }} " href="/admin/cetak">
                     <div
                         class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                         <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                     </div>
                     <span class="nav-link-text ms-1">Cetak Laporan</span>
                 </a>
             </li>
             <li class="nav-item mt-3">
                 <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">User</h6>
             </li>
             <li class="nav-item">
                 <a class="nav-link {{ $active == 'users' ? 'active' : '' }} " href="/admin/usermanagement">
                     <div
                         class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                         <i class="ni ni-single-copy-04 text-warning text-sm opacity-10"></i>
                     </div>
                     <span class="nav-link-text ms-1">User management</span>
                 </a>
             </li>

         </ul>
     </div>

 </aside>
 <main class="main-content position-relative border-radius-lg ">
     <!-- Navbar -->
     <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
         data-scroll="false">
         <div class="container-fluid py-1 px-3">
             <nav aria-label="breadcrumb">
                 <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                     <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white">Pages</a></li>
                     <li class="breadcrumb-item text-sm text-white active" aria-current="page">{{ $title }}</li>
                 </ol>
                 <h6 class="font-weight-bolder text-white mb-0">{{ $title }}</h6>
             </nav>
             <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                 <div class="ms-md-auto pe-md-3 d-flex align-items-center">

                 </div>
                 <ul class="navbar-nav  justify-content-end">
                     <li class="nav-item d-flex align-items-center">
                         <a href="/profile" class="nav-link text-white font-weight-bold px-0">
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                 class="bi bi-person-fill" viewBox="0 0 16 16">
                                 <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                             </svg>
                             <span class="d-sm-inline d-none">{{ Auth::user()->username }} |</span>


                         </a>

                     </li>

                     <li class="nav-item px-3 d-flex align-items-center">
                         <a href="/logout" class="nav-link text-white p-0">
                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                 <path fill-rule="evenodd"
                                     d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                 <path fill-rule="evenodd"
                                     d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                             </svg>
                             <span class="d-sm-inline d-none">Logout</span>

                         </a>
                     </li>

                 </ul>
             </div>
         </div>
     </nav>
     <!-- End Navbar -->
