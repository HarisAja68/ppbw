<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\suppliersModel;
use App\Http\Requests\SuppliersRequest;
use Illuminate\Database\Eloquent\Model;

class SuppliersController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:suppliers_show', ['only' => 'index']);
        $this->middleware('permission:suppliers_create', ['only' => 'create', 'store']);
        $this->middleware('permission:suppliers_update', ['only' => 'edit', 'update']);
        $this->middleware('permission:suppliers_delete', ['only' => 'destroy']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $datas = suppliersModel::Where('nama', 'LIKE', '%'.$keyword.'%')
            ->orWhere('alamat', 'LIKE', '%'.$keyword.'%')
            ->paginate (5);
        $datas->appends($request->all());
        return view('suppliers.index',compact( 'datas', 'keyword' ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $model = new suppliersModel;
       return view('suppliers.create', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SuppliersRequest $request)
    {
        $model = new suppliersModel;
        $model->kode = $request->kode;
        $model->nama = $request->nama;
        $model->barang = $request->barang;
        $model->alamat = $request->alamat;
        $model->no_hp = $request->no_hp;
        $model->save();

        return redirect('suppliers')->with('success', "Data Berhasil Ditambahkan");
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
        $model = suppliersModel::find($id);
        return view('suppliers.edit', compact('model'));
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
        $model = suppliersModel::find($id);
        $model->kode = $request->kode;
        $model->nama = $request->nama;
        $model->barang = $request->barang;
        $model->alamat = $request->alamat;
        $model->no_hp = $request->no_hp;
        $model->save();

        return redirect('suppliers')->with('success', "Data Berhasil Diubah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        suppliersModel::destroy($id);
        return redirect('suppliers')->with('success', "Data Berhasil Dihapus");

    }

    public function cetak_suppliers()
    {
        $datas = suppliersModel::get();
        return view('suppliers.cetak',compact('datas'));
    }
}
