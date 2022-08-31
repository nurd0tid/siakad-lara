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
        //validate form
        $this->validate($request, [
            'nm_golongan'     => 'required',
            'ket_golongan'     => 'required'
        ]);

        Golongan::create([
            'nm_golongan' => $request->nm_golongan,
            'ket_golongan' => $request->ket_golongan,
        ]);

        return redirect()->route('golongan')->with(['success' => 'Data Berhasil Ditambahkan!']);
    }

    public function edit($id)
    {
        $data = Golongan::find($id);
        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        // //validate form
        // $this->validate($request, [
        //     'nm_golongan'     => 'required',
        //     'ket_golongan'     => 'required'
        // ]);

        $data = Golongan::find($id);
        $data->nm_golongan = $request->nm_golongan;
        $data->ket_golongan = $request->ket_golongan;
        $data->update();
        return redirect()->route('golongan')->with(['success' => 'Data Berhasil Diupdate!']);
    }

    public function destroy($id)
    {
        Golongan::find($id)->delete();
        return redirect()->route('golongan')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
