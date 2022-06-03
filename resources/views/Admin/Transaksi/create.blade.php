@extends('Layouts.main')
@extends('Partials.navbar')

@section('container')
    <div class="col-12 container">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>Keranjang Belanjaan</h6>
                <div class="col-12 text-end">
                    <a class="btn bg-gradient-primary mb-0" data-bs-toggle="modal" data-bs-target="#pilihbarang"> <svg
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-cart" viewBox="0 0 16 16">
                            <path
                                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg>&nbsp;&nbsp;Pilih Barang</a>
                    <!-- Modal pilih barang -->
                    <div class="modal fade" id="pilihbarang" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">

                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Pilih Barang</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">


                                    <!-- pilih barang yang akan dipilih -->
                                    <div class="card-body px-0 pt-0 pb-2">

                                        <div class="table-responsive p-0">
                                            <table class="table align-items-center mb-0">
                                                <thead>
                                                    <tr>
                                                        <th
                                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            No</th>

                                                        <th
                                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            Nama Barang</th>



                                                        <th
                                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            Harga Jual</th>
                                                        <th
                                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            Jumlah Barang</th>
                                                        <th
                                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            Aksi</th>
                                                    </tr>
                                                </thead>
                                              
                                                <tbody>
                                                    <form method="POST">
                                                        <tr scope="row">
                                                            <td>
                                                                <div class="d-flex px-2 py-1">

                                                                    <div class="d-flex flex-column justify-content-center">
                                                                        <h6 class="mb-0 text-sm">INI PHP $i; ?></h6>

                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td class="align-middle text-center text-sm">
                                                                <span class="badge badge-sm bg-gradient-success">INI PHP
                                                                    $barang["nama_barang"]; ?></span>
                                                            </td>



                                                            <td class="align-middle text-center">
                                                                <span class="text-secondary text-xs font-weight-bold">RP.INI
                                                                    PHP $barang["harga_jual"]; ?></span>
                                                            </td>
                                                            <td class="align-middle text-center">
                                                                <input type="number" name="quantity" value="1"
                                                                    class="form-control" />
                                                                <input type="hidden" name="hidden_name"
                                                                    value="INI PHP $barang[" nama_barang"]; ?>" />
                                                                <input type="hidden" name="hidden_price"
                                                                    value="INI PHP $barang[" harga_jual"]; ?>" />
                                                                <input type="hidden" name="hidden_id"
                                                                    value="INI PHP $barang[" kode_barang"]; ?>" />
                                                            </td>

                                                            <td class="align-middle">

                                                                <button type="submit" class="btn "
                                                                    name="add_to_cart">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="#FF8C00" class="bi bi-bag-plus"
                                                                        viewBox="0 0 16 16">
                                                                        <path fill-rule="evenodd"
                                                                            d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                                                        <path
                                                                            d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                                                    </svg>
                                                                </button>
                                                            </td>
                                                        </tr>





                                                    </form>

                                                </tbody>
                                               
                                            </table>
                                        </div>
                                    </div>
                                    <!-- akhir -->


                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama
                                    Barang</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Harga Satuan</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Jumlah beli</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Total</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>

                            </tr>

                        </thead>
                        <?php
                                if (isset($_COOKIE["shopping_cart"])) {
                                    $total = 0;
                                    $cookie_data = stripslashes($_COOKIE['shopping_cart']);
                                    $cart_data = json_decode($cookie_data, true);
                                    $i = 1;
                                    foreach ($cart_data as $keys => $values) {
                                ?>

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


                                    <p class="text-xs font-weight-bold mb-0">INI PHP $values["item_name"]; ?></p>




                                </td>
                                <td class="align-middle text-center text-sm">
                                    <span class="text-secondary text-xs font-weight-bold">RP. INI PHP $values["item_price"];
                                        ?></span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">INI PHP $values["item_quantity"];
                                        ?></span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">INI PHP
                                        number_format($values["item_quantity"] * $values["item_price"], 2); ?></span>
                                </td>



                                <td class="align-middle">


                                    <a href="transaksipenjualan.php?action=delete&id=INI PHP $values[" item_id"]; ?>"
                                        class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                        data-original-title="Hapus">
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
                            <?php
                                        $total = $total + ($values["item_quantity"] * $values["item_price"]);
                                        $i++;
                                    }
                                        ?>



                            <tr>
                                <td colspan="4" class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">SUB TOTAL</span>
                                </td>
                                <td colspan="" class="align-middle text-start"> <span
                                        class="text-secondary text-xs font-weight-bold">RP. INI PHP number_format($total,
                                        2); ?></span></td>
                            </tr>
                            <?php
                                } else {
                                    echo '
    <tr>
     <td colspan="5" align="center">No Item in Cart</td>
    </tr>
    ';
                                }
                                    ?>




                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- form pembeli -->
    <!-- table -->
    <form action="" method="POST">

        <div class="col-9 container">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>From Pembelian</h6>
                    <div class="col-12 text-end">
                        <button type="submit" class="btn bg-gradient-success mb-0" name="simpan"> <svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-save2" viewBox="0 0 16 16">
                                <path
                                    d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v4.5h2a.5.5 0 0 1 .354.854l-2.5 2.5a.5.5 0 0 1-.708 0l-2.5-2.5A.5.5 0 0 1 5.5 6.5h2V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z" />
                            </svg>&nbsp;&nbsp;Simpan</button>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <div class="container">

                            <div class="mb-3">
                                <label for="nmpembeli" class="form-label">Nama Pembeli</label>
                                <input type="text" class="form-control" id="nmpembeli" name="nmpembeli"
                                    placeholder="Nama Pembeli">
                            </div>

                            <div class="mb-3">
                                <label for="ungdibyr" class="form-label"> Uang Dibayar</label>

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="ungdibyr">RP</span>
                                    <input type="number" class="form-control" placeholder="Uang Dibayar"
                                        aria-label="ungdibyr" aria-describedby="ungdibyr" name="ungdibyr" id="ungdibyr">
                                </div>
                            </div>

                            <div class="mb-3">
                                <select class="form-select" aria-label="Default select example" name="jenisbayar">
                                    <option selected>Jenis Pembayaran</option>
                                    <option value="Tunai">Tunai</option>
                                    <option value="Transfer">Transfer</option>
                                    <option value="Hutang">Hutang</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ket"></textarea>
                            </div>
                            <div class="mb-3" hidden="true">
                                <label for=" nmusr" class="form-label">User</label>



                                INI PHPusr = $_SESSION['username']; ?>
                                INI PHPuser = mysqli_query($conn, "SELECT id_user, username FROM user WHERE username =
                                '$usr'"); ?>
                                INI PHPusr = mysqli_fetch_array($user); ?>

                                <input type="text" name="nmusr" id="nmusr" value="INI PHP $usr[" id_user"]; ?>">


                                </select>

                            </div>




                            <!-- akhir -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- akhir form pembeli -->
    </main>
@endsection
