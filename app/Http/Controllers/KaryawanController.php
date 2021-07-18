<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KaryawanModel;
use App\Http\Requests\KaryawanRequest;
use Illuminate\Support\Facades\File;

class KaryawanController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:karyawan_show', ['only' => 'index']);
        $this->middleware('permission:karyawan_create', ['only' => 'create', 'store']);
        $this->middleware('permission:karyawan_update', ['only' => 'edit', 'update']);
        $this->middleware('permission:karyawan_delete', ['only' => 'destroy']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $datas = KaryawanModel::where('nip', 'LIKE', '%'.$keyword.'%')
            ->orWhere('nama', 'LIKE', '%'.$keyword.'%')
            ->orWhere('alamat', 'LIKE', '%'.$keyword.'%')

            ->paginate (5);
        $datas->appends($request->all());
        return view('karyawan.index',compact( 'datas', 'keyword' ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new KaryawanModel;
        return view('karyawan.create', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KaryawanRequest $request)
    {
        $model = new KaryawanModel;
        $model->nip = $request->nip;
        $model->nama = $request->nama;
        $model->alamat = $request->alamat;
        $model->no_hp = $request->no_hp;
        if($request->file("foto"))
        {
        $file = $request->file('foto');
        $nama_file = time().str_replace(" ", "", $file->getClientOriginalName());
        $file->move('images/foto_karyawan', $nama_file);
        $model->foto = $nama_file;
        }
        $model->save();

        return redirect('karyawan')->with('success', "Suksesssss!\nData Berhasil Ditambahkan");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = KaryawanModel::find($id);
        return view('karyawan.show', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = KaryawanModel::find($id);
        return view('karyawan.edit', compact('model'));
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
        $model = KaryawanModel::find($id);
        $model->nip = $request->nip;
        $model->nama = $request->nama;
        $model->alamat = $request->alamat;
        $model->no_hp = $request->no_hp;
        if($request->hasfile("foto"))
        {
            $destination = 'images/foto_karyawan/'. $model->foto;
            if (File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('foto');
            $nama_file = time().str_replace(" ", "", $file->getClientOriginalName());
            $file->move('images/foto_karyawan', $nama_file);
            $model->foto = $nama_file;
        }
        $model->save();
        return redirect('karyawan')->with('success', "Suksesssss!\nData Berhasil Diubah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = KaryawanModel::find($id);
        $destination = 'images/foto_karyawan/'. $model->foto;
            if (File::exists($destination))
            {
                File::delete($destination);
            }
        $model->delete();
        return redirect('karyawan')->with('success', "Suksesssss!\nData Berhasil Dihapus");
    }
    public function cetak_karyawan()
    {
        $datas = KaryawanModel::get();
        return view('karyawan.cetak',compact('datas'));
    }
}
