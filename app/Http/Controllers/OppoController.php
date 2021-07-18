<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\oppoModel;
use App\Http\Requests\OppoRequest;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class OppoController extends Controller
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
        $datas = oppoModel::where('kode', 'LIKE', '%'.$keyword.'%')
            ->orWhere('nama', 'LIKE', '%'.$keyword.'%')
            ->orWhere('harga', 'LIKE', '%'.$keyword.'%')
            ->paginate (5);
        $datas->appends($request->all());
        return view('barang.oppo.index',compact( 'datas', 'keyword' ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new oppoModel;
        return view('barang.oppo.create', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OppoRequest $request)
    {
        $model = new oppoModel;
        $model->kode = $request->kode;
        $model->nama = $request->nama;
        if($request->file("foto"))
        {
        $file = $request->file('foto');
        $nama_file = time().str_replace(" ", "", $file->getClientOriginalName());
        $file->move('images/foto_oppo', $nama_file);
        $model->foto = $nama_file;
        }
        $model->harga = $request->harga;
        $model->stok = $request->stok;

        $model->save();

        Alert::success("Suksessss","Data Barhasil Ditambahkan");
        return redirect('oppo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = oppoModel::find($id);
        return view('barang.oppo.edit', compact('model'));
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
        $model = oppoModel::find($id);
        $model->kode = $request->kode;
        $model->nama = $request->nama;
        if($request->hasfile("foto"))
        {
            $destination = 'images/foto_oppo/'. $model->foto;
            if (File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('foto');
            $nama_file = time().str_replace(" ", "", $file->getClientOriginalName());
            $file->move('images/foto_oppo', $nama_file);
            $model->foto = $nama_file;
        }
        $model->harga = $request->harga;
        $model->stok = $request->stok;
        $model->save();

        Alert::success("Suksessss","Data Barhasil Diubah");
        return redirect('oppo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = oppoModel::find($id);
        $destination = 'images/foto_oppo/'. $model->foto;
            if (File::exists($destination))
            {
                File::delete($destination);
            }
        $model->delete();
        Alert::success("Suksessss","Data Barhasil Dihapus");
        return redirect('oppo');
    }
    public function cetak_oppo()
    {
        $datas = OppoModel::get();
        return view('barang.oppo.cetak',compact('datas'));
    }
}
