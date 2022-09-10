<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Golongan;

class GolonganController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        $data = Golongan::all();
        return view('dashboard.master.golongan.index', compact('data'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nm_golongan' => 'required',
            'ket_golongan'     => 'required'
        ], [
            'nm_golongan.required'   => 'Silahkan isi nama golongan terlebih dahulu!',
            'ket_golongan.required'   => 'Silahkan isi keterangan golongan terlebih dahulu!'
        ]);

        Golongan::create([
            'nm_golongan' => $request->nm_golongan,
            'ket_golongan' => $request->ket_golongan,
        ]);

        return response()->json(['success' => 'Golongan successfully added']);
    }

    public function edit($id)
    {
        $data = Golongan::find($id);
        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nm_golongan' => 'required',
            'ket_golongan'     => 'required'
        ], [
            'nm_golongan.required'   => 'Silahkan isi nama golongan terlebih dahulu!',
            'ket_golongan.required'   => 'Silahkan isi keterangan golongan terlebih dahulu!'
        ]);

        $data = Golongan::find($id);
        $data->nm_golongan = $request->nm_golongan;
        $data->ket_golongan = $request->ket_golongan;
        $data->update();
        return response()->json(['success' => 'Golongan successfully updated!']);
    }

    public function destroy($id)
    {
        Golongan::find($id)->delete();
        return redirect()->route('golongan')->with(['success' => 'Golongan successfully deleted!']);
    }
}
