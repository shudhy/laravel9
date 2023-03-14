<?php

namespace App\Http\Controllers;

use App\Models\item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ItemController extends Controller
{
    public function index(){
        $item = item::all();
        //dd($warga);
        return view('item.index',compact(['item']));
    }

    public function create()
    {
        return view('item.create');
    }

    public function store(Request $request)
    {
        $foto_file = $request->file('foto_produk');
        $foto_ekstensi = $foto_file->extension();
        $foto_nama = date('ymdhis').".". $foto_ekstensi;
        $foto_file->move(public_path('item_foto'),$foto_nama);

        $data =[
            'barcode' => $request->input('barcode'),
            'stok_produk' => $request->input('stok_produk'),
            'terjual_produk' => $request->input('terjual_produk'),
            'nm_produk' => $request->input('nm_produk'),
            'aktif_produk' => $request->input('aktif_produk'),
            'isi_produk' => $request->input('isi_produk'),
            'foto_produk' => $foto_nama,
            'harga_produk' => $request->input('harga_produk'),
            'diskon_produk' => $request->input('diskon_produk'),
            'berat_produk' => $request->input('berat_produk'),

        ];

        item::create($data);
        return redirect('/item');
    }

    public function edit($id)
    {
        $item= item::find($id);
        return view('item.edit',compact(['item']));
    }

    public function update($id, Request $request)
    {
        // $item= item::find($id);

        $data =[
            'barcode' => $request->input('barcode'),
            'stok_produk' => $request->input('stok_produk'),
            'terjual_produk' => $request->input('terjual_produk'),
            'nm_produk' => $request->input('nm_produk'),
            'aktif_produk' => $request->input('aktif_produk'),
            'isi_produk' => $request->input('isi_produk'),
            'harga_produk' => $request->input('harga_produk'),
            'diskon_produk' => $request->input('diskon_produk'),
            'berat_produk' => $request->input('berat_produk'),

        ];

        if ($request->hasFile('foto_produk'))
        {
            $foto_file = $request->file('foto_produk');
            $foto_ekstensi = $foto_file->extension();
            $foto_nama = date('ymdhis').".". $foto_ekstensi;
            $foto_file->move(public_path('item_foto'),$foto_nama);

            $data_foto = item::where('id',$id)->first();
            File::delete(public_path('item_foto').'/'.$data_foto->foto_produk);
            $data['foto_produk'] = $foto_nama;
        }


        item::where('id',$id)->update($data);
        return redirect('/item');
    }

    public function destroy ($id)
    {
        $data = item::where('id', $id)->first();
        File:: delete(public_path('item_foto').'/'.$data->foto_produk);
        item::where('id',$id)->delete();
        return redirect('/item');
    }
}
