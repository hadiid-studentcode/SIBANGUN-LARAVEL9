@extends('Layouts.main')
@extends('Partials.navbar')

@section('container')
    <div class="col-12 container">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>Riwayat Transaksi Penjualan</h6>
                <div class="col-12 text-end">
                    <a class="btn bg-gradient-warning mb-0" href="/admin/transaksi/create"> <svg
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                            <path
                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                        </svg>&nbsp;&nbsp;Lakukan Transaksi</a>
                </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kode
                                    Transaksi</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Tanggal</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Pembeli</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Sub Total</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Uang Kembalian / hutang </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Pembayaran</th>

                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Keterangan</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                            </tr>

                        </thead>
                     
                        <tbody>
                            <tr scope="row">
                                <td>
                                    <div class="d-flex px-2 py-1">

                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">1</h6>

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">1</p>

                                </td>
                                <td class="align-middle text-center text-sm">
                                    <span class="badge badge-sm bg-gradient-success"></span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold"></span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">RP</span>
                                </td>

                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">RP</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold"></span>
                                </td>


                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold"></span>
                                </td>


                                <td class="align-middle">

                                    <button type="button" class="btn "
                                        onclick="window.open('kwitansi.php?trans=INI PHP $transaksi['id_transaksi'] ?>','name','width=1000px,height=1000px')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FF8C00"
                                            class="bi bi-printer" viewBox="0 0 16 16">
                                            <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                                            <path
                                                d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z" />
                                        </svg>

                                    </button>


                                    <a href="../del/deltrans.php?kt=INI PHP $transaksi['id_transaksi'] ?>"
                                        class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                        data-original-title="hapus">
                                        <button type="button" class="btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red"
                                                class="bi bi-x-circle" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                <path
                                                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                            </svg>

                                        </button>
                                    </a>
                                </td>
                            </tr>


                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </main>
@endsection
