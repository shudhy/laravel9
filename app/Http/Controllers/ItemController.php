<?php

namespace App\Http\Controllers;

use App\Models\item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(){
        $item = item::all();
        //dd($warga);
        return view('item.index',compact(['item']));
    }

    public function create()
    {
        return view('warga.create');
    }

    public function store(Request $request)
    {
        Warga::create($request->except(['_token','submit']));
        return redirect('/warga');
    }

    public function edit($id)
    {
        $warga= Warga::find($id);
        return view('warga.edit',compact(['warga']));
    }

    public function update($id, Request $request)
    {
        $warga= Warga::find($id);
        $warga->update($request->except(['_token','submit']));
        return redirect('/warga');
    }

    public function destroy ($id)
    {
        $warga= Warga::find($id);
        $warga->delete();
        return redirect('/warga');
    }
}
