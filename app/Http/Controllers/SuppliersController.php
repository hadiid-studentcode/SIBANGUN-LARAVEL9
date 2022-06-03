<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Suplier;
use Illuminate\Support\Facades\Validator;

class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('Admin.Supliers.index', [
            'supliers' => Suplier::all(),
            'title' => 'Supliers',
            'active' => 'Supplier'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validate = Validator::make($request->all(), [
            'nama_suplier' => 'required|max:20',
            'alamat_suplier' => 'required|max:255',
            'no_telp_suplier' => 'required|max:16',
            'keterangan' => 'required|max:255',

        ]);

        $nama_suplier    = $request->input('nama_suplier');
        $alamat_suplier       = $request->input('alamat_suplier');
        $no_telp_suplier     = $request->input('no_telp_suplier');
        $keterangan       = $request->input('keterangan');


        $data = [
            'nama_suplier' => $nama_suplier,
            'alamat_suplier' => $alamat_suplier,
            'no_telp_suplier' => $no_telp_suplier,
            'keterangan' => $keterangan
        ];


        Suplier::create($data);

        return redirect('/admin/suppliers')->with('success', 'Data Telah Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {



        $request->validate([
            'nama_suplier' => 'required',
            'no_telp_suplier' => 'required',
            'alamat_suplier'  => 'required',
            'keterangan'   => 'required',

        ]);

        $suplier = Suplier::find($id);
        $suplier->nama_suplier = $request->get('nama_suplier');
        $suplier->no_telp_suplier = $request->get('no_telp_suplier');
        $suplier->alamat_suplier = $request->get('alamat_suplier');
        $suplier->keterangan = $request->get('keterangan');

       $suplier->update();

    

        return redirect('/admin/suppliers')->with('success', 'Data Telah Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Suplier $suplier, $id)
    {

        Suplier::destroy($id);

        return redirect('/admin/suppliers')->with('success', 'Data Telah Dihapus!');
    }
}
