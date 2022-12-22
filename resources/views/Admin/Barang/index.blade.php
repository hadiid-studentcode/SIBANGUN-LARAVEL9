@extends('layouts.main')
@extends('Partials.navbar')

@section('container')
   <div class="col-12 container">
             <div class="card mb-4">
                 <div class="card-header pb-0">
                     <h6>Data Barang</h6>
                     <!-- <div class="col-12 text-end">
                         <a class="btn bg-gradient-primary mb-0" href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-dotted" viewBox="0 0 16 16">
                                 <path d="M8 0c-.176 0-.35.006-.523.017l.064.998a7.117 7.117 0 0 1 .918 0l.064-.998A8.113 8.113 0 0 0 8 0zM6.44.152c-.346.069-.684.16-1.012.27l.321.948c.287-.098.582-.177.884-.237L6.44.153zm4.132.271a7.946 7.946 0 0 0-1.011-.27l-.194.98c.302.06.597.14.884.237l.321-.947zm1.873.925a8 8 0 0 0-.906-.524l-.443.896c.275.136.54.29.793.459l.556-.831zM4.46.824c-.314.155-.616.33-.905.524l.556.83a7.07 7.07 0 0 1 .793-.458L4.46.824zM2.725 1.985c-.262.23-.51.478-.74.74l.752.66c.202-.23.418-.446.648-.648l-.66-.752zm11.29.74a8.058 8.058 0 0 0-.74-.74l-.66.752c.23.202.447.418.648.648l.752-.66zm1.161 1.735a7.98 7.98 0 0 0-.524-.905l-.83.556c.169.253.322.518.458.793l.896-.443zM1.348 3.555c-.194.289-.37.591-.524.906l.896.443c.136-.275.29-.54.459-.793l-.831-.556zM.423 5.428a7.945 7.945 0 0 0-.27 1.011l.98.194c.06-.302.14-.597.237-.884l-.947-.321zM15.848 6.44a7.943 7.943 0 0 0-.27-1.012l-.948.321c.098.287.177.582.237.884l.98-.194zM.017 7.477a8.113 8.113 0 0 0 0 1.046l.998-.064a7.117 7.117 0 0 1 0-.918l-.998-.064zM16 8a8.1 8.1 0 0 0-.017-.523l-.998.064a7.11 7.11 0 0 1 0 .918l.998.064A8.1 8.1 0 0 0 16 8zM.152 9.56c.069.346.16.684.27 1.012l.948-.321a6.944 6.944 0 0 1-.237-.884l-.98.194zm15.425 1.012c.112-.328.202-.666.27-1.011l-.98-.194c-.06.302-.14.597-.237.884l.947.321zM.824 11.54a8 8 0 0 0 .524.905l.83-.556a6.999 6.999 0 0 1-.458-.793l-.896.443zm13.828.905c.194-.289.37-.591.524-.906l-.896-.443c-.136.275-.29.54-.459.793l.831.556zm-12.667.83c.23.262.478.51.74.74l.66-.752a7.047 7.047 0 0 1-.648-.648l-.752.66zm11.29.74c.262-.23.51-.478.74-.74l-.752-.66c-.201.23-.418.447-.648.648l.66.752zm-1.735 1.161c.314-.155.616-.33.905-.524l-.556-.83a7.07 7.07 0 0 1-.793.458l.443.896zm-7.985-.524c.289.194.591.37.906.524l.443-.896a6.998 6.998 0 0 1-.793-.459l-.556.831zm1.873.925c.328.112.666.202 1.011.27l.194-.98a6.953 6.953 0 0 1-.884-.237l-.321.947zm4.132.271a7.944 7.944 0 0 0 1.012-.27l-.321-.948a6.954 6.954 0 0 1-.884.237l.194.98zm-2.083.135a8.1 8.1 0 0 0 1.046 0l-.064-.998a7.11 7.11 0 0 1-.918 0l-.064.998zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                             </svg>&nbsp;&nbsp;Tambah Barang</a>
                     </div> -->
                    
                 </div>
                 <div class="card-body px-0 pt-0 pb-2">

                     <div class="table-responsive p-0">
                         <table class="table align-items-center mb-0" id="table_id">
                             <thead>
                                 <tr>
                                     <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                     <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kode Barang</th>
                                     <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Barang</th>
                                     <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jenis Barang</th>
                                     <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Satuan</th>
                                     <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Harga Barang</th>
                                     <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Harga Jual</th>
                                     <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Stok</th>
                                     <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                                 </tr>
                             </thead>
                          
                                 <tbody>
                                     <tr scope="row">
                                         <td>
                                             <div class="d-flex px-2 py-1">

                                                 <div class="d-flex flex-column justify-content-center">
                                                     <h6 class="mb-0 text-sm"></h6>

                                                 </div>
                                             </div>
                                         </td>
                                         <td>
                                             <p class="text-xs font-weight-bold mb-0">B</p>

                                         </td>
                                         <td class="align-middle text-center text-sm">
                                             <span class="badge badge-sm bg-gradient-success"></span>
                                         </td>
                                         <td class="align-middle text-center">
                                             <span class="text-secondary text-xs font-weight-bold"></span>
                                         </td>
                                         <td class="align-middle text-center">
                                             <span class="text-secondary text-xs font-weight-bold"></span>
                                         </td>
                                         <td class="align-middle text-center">
                                             <span class="text-secondary text-xs font-weight-bold">RP.</span>
                                         </td>
                                         <td class="align-middle text-center">
                                             <span class="text-secondary text-xs font-weight-bold">RP.</span>
                                         </td>
                                         <td class="align-middle text-center">
                                             <span class="text-secondary text-xs font-weight-bold"></span>
                                         </td>

                                         <td class="align-middle">
                                             <a data-bs-toggle="modal" data-bs-target="#ubahdata echo idbarang" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit barang">
                                                 <button type="button" class="btn ">
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FF8C00" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                         <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                         <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                     </svg>

                                                 </button>
                                             </a>
                                             <!-- Modal -->
                                             <div class="modal fade" id="ubahdata echo idbarang" tabindex="-1" aria-labelledby="ubahdata" aria-hidden="true">
                                                 <div class="modal-dialog">
                                                     <div class="modal-content">
                                                         <div class="modal-header">
                                                             <h5 class="modal-title" id="exampleModalLabel">Ubah Data Barang</h5>
                                                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" name="ubahdata"></button>
                                                         </div>
                                                         <div class="modal-body">
                                                             <!-- form -->
                                                             <form action="" method="POST">

                                                                 <input type="hidden" name="kb" value="idbarang">
                                                                 <div class="mb-3">
                                                                     <label for="nb" class="form-label">Nama Barang</label>
                                                                     <input type="text" class="form-control" id="nb" placeholder="masukkan nama barang" name="nb" value="" disabled>
                                                                 </div>
                                                                 <div class="mb-3">
                                                                     <label for="jb" class="form-label">Jenis Barang</label>
                                                                     <input type="text" class="form-control" id="jb" placeholder="ex : paku" name="jb" value="" disabled>
                                                                 </div>
                                                                 <div class="mb-3">
                                                                     <label for="stn" class="form-label">Satuan</label>
                                                                     <input type="text" class="form-control" id="stn" placeholder="KG,TON,M dll" name="stn" value="" disabled>
                                                                 </div>
                                                                 <div class="mb-3">
                                                                     <label for="hb" class="form-label">Harga Barang</label>
                                                                     <input type="number" class="form-control" id="hb" placeholder="RP.0000000" name="hb" value="" disabled>
                                                                 </div>
                                                                 <div class="mb-3">
                                                                     <label for="hj" class="form-label">Harga Jual</label>
                                                                     <input type="number" class="form-control" id="hj" placeholder="RP.0000000" name="hj" value="">
                                                                 </div>
                                                                 <div class="mb-3">
                                                                     <label for="sb" class="form-label">Stok Barang</label>
                                                                     <input type="number" class="form-control" id="sb" placeholder="000" name="sb" value="">
                                                                 </div>



                                                         </div>
                                                         <div class="modal-footer" name="tambahdata">
                                                             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                             <button type="submit" class="btn btn-primary" name="ubahdata" id="liveAlertBtn">Ubah Data</button>
                                                         </div>
                                                         </form>
                                                         <!-- form -->
                                                     </div>
                                                 </div>
                                             </div>
                                             <!-- akhir modal -->
                                             <a href="../del/delbrg.php?kdbrg=idbarang" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="del barang">
                                                 <button type="button" class="btn">
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-x-circle" viewBox="0 0 16 16">
                                                         <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                         <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
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

