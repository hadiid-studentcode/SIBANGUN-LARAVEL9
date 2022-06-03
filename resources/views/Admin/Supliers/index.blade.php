@extends('layouts.main')
@extends('Partials.navbar')

{{-- ini tampilan navbar --}}

@section('container')
    <div class="col-12 container">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>Data Supplier</h6>


                @if (session()->has('success'))
                    <div class="alert alert-success alert fade show col-lg-3" role="alert">
                        <strong> {{ session('success') }} </strong>
                        <button type="button" class="btn-close text-light" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>
                @endif





                <div data-bs-toggle="modal" data-bs-target="#tambahdata" style="float: right;">
                    <button class="btn bg-gradient-primary mb-0"> <svg xmlns="http://www.w3.org/2000/svg" width="16"
                            height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                            <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            <path fill-rule="evenodd"
                                d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
                        </svg>&nbsp;&nbsp;Tambah Supplier</button>


                </div>


                <!-- modal -->



                <!-- Modal -->
                <div class="modal fade" id="tambahdata" tabindex="-1" aria-labelledby="tambahdata" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Suplier</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                    name="tambahdata"></button>
                            </div>
                            <div class="modal-body">
                                <!-- form -->
                                <form action="/admin/suppliers" method="POST">
                                    @csrf

                                    <div class="mb-3">
                                        <label for="nama_supplier" class="form-label">Nama Supplier</label>
                                        <input type="text" class="form-control" id="nama_supplier"
                                            placeholder="masukkan nama" name="nama_suplier" required autofocus>
                                    </div>
                                    <div class="mb-3">
                                        <label for="notelp_supplier" class="form-label">No.Telepon</label>
                                        <input type="number" class="form-control" id="notelp_supplier"
                                            placeholder="masukkan nomor telepon" name="no_telp_suplier" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="alamat_supplier" class="form-label">Alamat Supplier</label>
                                        <input type="text" class="form-control" id="alamat_supplier"
                                            placeholder="masukkan Alamat Supplier" name="alamat_suplier" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="keterangan_supplier" class="form-label">Keterangan</label>
                                        <input type="text" class="form-control" id="keterangan_supplier"
                                            placeholder="Keterangan" name="keterangan" required>
                                    </div>



                            </div>
                            <div class="modal-footer" name="tambahdata">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary" id="liveAlertBtn">Simpan
                                    Data</button>
                            </div>
                            </form>
                            <!-- form -->
                        </div>
                    </div>
                </div>
                <!-- akhir modal -->


            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <div id="container">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Nama</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        No. Telepon</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Alamat</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Keterangan</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi
                                    </th>
                                </tr>
                            </thead>

                            @foreach ($supliers as $suplier)
                                <tbody>
                                    <tr scope="row">
                                        <td>
                                            <div class="d-flex px-2 py-1">

                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $loop->iteration }}</h6>

                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $suplier->nama_suplier }}</p>

                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span
                                                class="badge badge-sm bg-gradient-success">{{ $suplier->no_telp_suplier }}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span
                                                class="text-secondary text-xs font-weight-bold">{{ $suplier->alamat_suplier }}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span
                                                class="text-secondary text-xs font-weight-bold">{{ $suplier->keterangan }}</span>
                                        </td>

                                        <td class="align-middle">
                                            <a data-bs-toggle="modal" data-bs-target="#ubahdata{{ $suplier->id }}"
                                                class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                                data-original-title="Edit suplier">
                                                <button type="button" class="btn ">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="#FF8C00" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                        <path
                                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                        <path fill-rule="evenodd"
                                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                    </svg>

                                                </button>
                                            </a>

                                            <!-- Modal -->
                                            <div class="modal fade" id="ubahdata{{ $suplier->id }}" tabindex="-1"
                                                aria-labelledby="ubahdata" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <form action="/admin/suppliers/{{ $suplier->id }}" method="POST">
                                                            @csrf
                                                            @method('put')

                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Ubah Data
                                                                    Suplier
                                                                </h5>
                                                                <button class="btn-close" data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <!-- form -->

                                                                <div class="mb-3">
                                                                    <label for="nama_supplier" class="form-label">Nama
                                                                        Supplier</label>
                                                                    <input type="text" class="form-control"
                                                                        id="nama_supplier" placeholder="masukkan nama"
                                                                        name="nama_suplier"
                                                                        value="{{ $suplier->nama_suplier }}">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="notelp_supplier"
                                                                        class="form-label">No.Telepon</label>
                                                                    <input type="text" class="form-control"
                                                                        id="notelp_supplier"
                                                                        placeholder="masukkan nomor telepon"
                                                                        name="no_telp_suplier"
                                                                        value="{{ $suplier->no_telp_suplier }}">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="alamat_supplier"
                                                                        class="form-label">Alamat
                                                                        Supplier</label>
                                                                    <input type="text" class="form-control"
                                                                        id="alamat_supplier"
                                                                        placeholder="masukkan Alamat Supplier"
                                                                        name="alamat_suplier"
                                                                        value="{{ $suplier->alamat_suplier }}">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="keterangan_supplier"
                                                                        class="form-label">Keterangan</label>
                                                                    <input type="text" class="form-control"
                                                                        id="keterangan_supplier" placeholder="Keterangan"
                                                                        name="keterangan"
                                                                        value="{{ $suplier->keterangan }}">
                                                                </div>

                                                            </div>

                                                            <div class="modal-footer" name="tambahdata">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Tutup</button>
                                                                <button type="submit" class="btn btn-primary"
                                                                    id="liveAlertBtn">Ubah Data</button>
                                                            </div>
                                                        </form>
                                                        <!-- form -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- akhir modal -->

                                            <div class="text-secondary font-weight-bold text-xs d-inline"
                                                data-toggle="tooltip" data-original-title="hapus supplier">
                                                <form action="/admin/suppliers/{{ $suplier->id }}" method="POST"
                                                    class="d-inline">
                                                    @method('delete')
                                                    @csrf

                                                    <button class="btn"
                                                        onclick="return confirm('Are you sure?')">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="red" class="bi bi-x-circle" viewBox="0 0 16 16">
                                                            <path
                                                                d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                            <path
                                                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                                        </svg>

                                                    </button>
                                                </form>
                                            </div>

                                        </td>
                                    </tr>



                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </main>
@endsection
