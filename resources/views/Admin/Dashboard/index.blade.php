@extends('layouts.main')
@extends('Partials.navbar')

@section('container')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <a href="/barang">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">TOTAL BARANG BANGUNAN</p>
                                        <h5 class="font-weight-bolder">
                                            1
                                        </h5>

                                    </div>
                                </a>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <a href="/suplier">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">TOTAL SUPPLIER</p>
                                        <h5 class="font-weight-bolder">
                                            {{ $total_supliers }}
                                        </h5>

                                    </div>
                                </a>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <a href="/barang">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">TOTAL STOK BARANG</p>
                                        <h5 class="font-weight-bolder">
                                            3
                                        </h5>

                                    </div>
                                </a>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                    <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <a href="/usermanagement">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">TOTAL USER</p>
                                        <h5 class="font-weight-bolder">
                                            {{ $total_users }}
                                        </h5>

                                    </div>
                                </a>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                                    <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <footer class="footer pt-7  ">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>,
                            Copyright by
                            <a href="#" class="font-weight-bold" target="_blank">SIBANGUN</a>
                            Sistem Informasi Bahan Bangunan || HADIID ANDRI YULISON
                        </div>
                    </div>

                </div>
            </div>
        </footer>
    </div>
    </main>
@endsection
