<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pocoModel;
use App\Http\Requests\PocoRequest;
use Illuminate\Support\Facades\File;

class PocoController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:barang_show', ['only' => 'index']);
        $this->middleware('permission:barang_create', ['only' => 'create', 'store']);
        $this->middleware('permission:barang_update', ['only' => 'edit', 'update']);
        $this->middleware('permission:barang_delete', ['only' => 'destroy']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $datas = pocoModel::where('kode', 'LIKE', '%'.$keyword.'%')
            ->orWhere('nama', 'LIKE', '%'.$keyword.'%')
            ->orWhere('harga', 'LIKE', '%'.$keyword.'%')
            ->paginate (5);
        $datas->appends($request->all());
        return view('barang.xiaomi.poco.index',compact( 'datas', 'keyword' ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new pocoModel;
        return view('barang.xiaomi.poco.create', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PocoRequest $request)
    {
        $model = new pocoModel;
        $model->kode = $request->kode;
        $model->nama = $request->nama;
        if($request->file("foto"))
        {
        $file = $request->file('foto');
        $nama_file = time().str_replace(" ", "", $file->getClientOriginalName());
        $file->move('images/foto_poco', $nama_file);
        $model->foto = $nama_file;
        }
        $model->harga = $request->harga;
        $model->stok = $request->stok;

        $model->save();

        return redirect('poco')->with('success', "Data Berhasil Ditambahkan");
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
        $model = pocoModel::find($id);
        return view('barang.xiaomi.poco.edit', compact('model'));
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
        $model = pocoModel::find($id);
        $model->kode = $request->kode;
        $model->nama = $request->nama;
        if($request->hasfile("foto"))
        {
            $destination = 'images/foto_poco/'. $model->foto;
            if (File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('foto');
            $nama_file = time().str_replace(" ", "", $file->getClientOriginalName());
            $file->move('images/foto_poco', $nama_file);
            $model->foto = $nama_file;
        }
        $model->harga = $request->harga;
        $model->stok = $request->stok;

        $model->save();

        return redirect('poco')->with('success', "Data Berhasil Diubah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = pocoModel::find($id);
        $destination = 'images/foto_poco/'. $model->foto;
        if (File::exists($destination))
        {
            File::delete($destination);
        }
        $model->delete();
        return redirect('poco')->with('success', "Data Berhasil Dihapus");
    }
    public function cetak_poco()
    {
        $datas = pocoModel::get();
        return view('barang.xiaomi.poco.cetak',compact('datas'));
    }
}
