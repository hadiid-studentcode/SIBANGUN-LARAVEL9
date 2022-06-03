@extends('Layouts.main')
@extends('Partials.navbar')

@section('container')
    <div class="col-12 container">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>Data User</h6>
                <div class="col-12 text-end">
                    <a class="btn bg-gradient-primary mb-0" href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="16"
                            height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                            <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            <path fill-rule="evenodd"
                                d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
                        </svg>&nbsp;&nbsp;Tambah User</a>
                </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Username</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    No.telp</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Level</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                            </tr>
                        </thead>
                      
                        <tbody>
                            <tr scope="row">
                                <td>
                                    <div class="d-flex px-2 py-1">

                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">INI PHP $i; ?></h6>

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">INI PHP $pemilik["nama_pemilik"]; ?></p>

                                </td>
                                <td class="align-middle text-center text-sm">
                                    <span class="badge badge-sm bg-gradient-success">INI PHP $pemilik["username"]; ?></span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">INI PHP
                                        $pemilik["no_telp_pemilik"]; ?></span>

                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">INI PHP $pemilik["level"];
                                        ?></span>
                                </td>

                                <td class="align-middle">
                                    <!-- ubah password -->
                                    <a href="#" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                        data-original-title="Edit user">
                                        <button type="button" class="btn ">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                            </svg>

                                        </button>
                                    </a>
                                    <!-- akhir -->
                                    <!-- ubah user -->
                                    <a href="#" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                        data-original-title="Edit user">
                                        <button type="button" class="btn ">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FF8C00"
                                                class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                <path
                                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                <path fill-rule="evenodd"
                                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                            </svg>

                                        </button>
                                    </a>
                                    <!-- akhir -->
                                    <!-- hapus user -->
                                    <a href="#" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                        data-original-title="Edit user">
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
                                    <!-- akhir -->
                                </td>
                            </tr>

                      
                        </tbody>


                     

                        <tbody>
                            <tr scope="row">
                                <td>
                                    <div class="d-flex px-2 py-1">

                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">INI PHP $i; ?></h6>

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">INI PHP $pegawai["nama_pegawai"]; ?></p>

                                </td>
                                <td class="align-middle text-center text-sm">
                                    <span class="badge badge-sm bg-gradient-success">INI PHP $pegawai["username"]; ?></span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">INI PHP
                                        $pegawai["no_telp_pegawai"]; ?></span>

                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">INI PHP $pegawai["level"];
                                        ?></span>
                                </td>

                                <td class="align-middle">
                                    <!-- ubah password -->
                                    <a href="#" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                        data-original-title="Edit user">
                                        <button type="button" class="btn ">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                            </svg>

                                        </button>
                                    </a>
                                    <!-- akhir -->
                                    <a href="#" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                        data-original-title="Edit user">
                                        <button type="button" class="btn ">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FF8C00"
                                                class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                <path
                                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                <path fill-rule="evenodd"
                                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                            </svg>

                                        </button>
                                    </a>
                                    <a href="#" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                        data-original-title="Edit user">
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
