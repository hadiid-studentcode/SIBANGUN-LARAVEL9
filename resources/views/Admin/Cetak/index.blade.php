@extends('Layouts.main')
@extends('Partials.navbar')


@section('container')
    <div class="col-12 container">
        <div class="card mb-4">
            <div class="card-header pb-0 text-center">
                <h4>Laporan Transaksi</h4>

            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <!-- form cetak -->
                    <form action="" method="POST">

                        <div class="col-9 container">
                            <div class="card mb-4">
                                <div class="card-header pb-0">
                                    <h6>From Laporan</h6>

                                </div>
                                <div class="card-body px-0 pt-0 pb-2">
                                    <div class="table-responsive p-0">
                                        <div class="container">

                                            <div class="mb-3">
                                                <label for="nmpembeli" class="form-label">Laporan Transaksi</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="barang_masuk"
                                                        id="flexCheckDefault" name="brgmsk">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Barang Masuk
                                                    </label>

                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="penjualan"
                                                        id="flexCheckChecked" name="pjl">
                                                    <label class="form-check-label" for="flexCheckChecked">
                                                        Penjualan
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="laba"
                                                        id="flexCheckChecked" name="laba">
                                                    <label class="form-check-label" for="flexCheckChecked">
                                                        Laba
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="ungdibyr" class="form-label">Tanggal</label>

                                                <div class="input-group mb-3">
                                                    <input type="date" class="form-control" placeholder="tanggalAwal"
                                                        aria-label="tanggalAwal" name="tanggalAwal">
                                                    <span class="input-group-text">-</span>
                                                    INI PHPnow = date('Y-m-d');

                                                    ?>
                                                    <input type="date" class="form-control" placeholder="tanggalAkhir"
                                                        aria-label="tanggalAkhir" name="tanggalAkhir"
                                                        value="INI PHP $now; ?>">
                                                </div>
                                            </div>



                                            <div class="mb-3" hidden="true">
                                                <label for=" nmusr" class="form-label">User</label>



                                                INI PHPusr = $_SESSION['username']; ?>
                                                INI PHPuser = mysqli_query($conn, "SELECT id_user, username FROM user WHERE
                                                username = '$usr'"); ?>
                                                INI PHPusr = mysqli_fetch_array($user); ?>

                                                <input type="text" name="nmusr" id="nmusr" value="INI PHP $usr[" id_user"];
                                                    ?>">


                                                </select>

                                            </div>

                                            <button type="submit" class="btn btn-info" name="cetak"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
                                                    <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                                                    <path
                                                        d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z" />
                                                </svg> Cetak</button>





                                            <!-- akhir -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- akhir -->
                </div>
            </div>
        </div>
    </div>
    </main>
@endsection
