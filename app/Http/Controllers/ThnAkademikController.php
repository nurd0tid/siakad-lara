<?php

namespace App\Http\Controllers;

use App\Models\ThnAkademik;
use Illuminate\Http\Request;

class ThnAkademikController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        $data = ThnAkademik::all();
        return view('dashboard.master.thnakademik.index', compact('data'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'kd_tahun' => 'required|unique:thn_akademiks,kd_tahun',
            'nm_tahun'     => 'required',
            'ket_tahun'    => 'required'
        ], [
            'kd_tahun.required'   => 'Silahkan isi kode tahun akademik terlebih dahulu!',
            'kd_tahun.unique'     => 'Kode tahun akademik sudah digunakan!',
            'nm_tahun.required'    => 'Silahkan pilih nama tahun akademik terlebih dahulu!'
        ]);

        //create post
        ThnAkademik::create([
            'kd_tahun'     => $request->kd_tahun,
            'nm_tahun'     => $request->nm_tahun,
            'ket_tahun'     => $request->ket_tahun,
            'stts_tahun'   => $request->stts_tahun
        ]);

        return response()->json(['success' => 'Tahun Akademik successfully added']);
    }

    public function edit($id)
    {
        $data = ThnAkademik::find($id);
        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'kd_tahun'     =>
            'required|unique:thn_akademiks,kd_tahun,' . $id . ',id_tahun|min:5',
            'nm_tahun'     => 'required',
            'ket_tahun'    => 'required'
        ], [
            'kd_tahun.required' => 'Silahkan isi kode tahun terlebih dahulu!',
            'kd_tahun.unique' => 'Kode tahun sudah digunakan!',
            'nm_tahun.required' => 'Silahkan isi nama tahun akademik terlebih dahulu!',
            'ket_tahun.required' => 'Silahkan isi keterangan tahun akademik terlebih dahulu!'
        ]);

        $data = ThnAkademik::find($id);
        $data->kd_tahun = $request->kd_tahun;
        $data->nm_tahun = $request->nm_tahun;
        $data->ket_tahun = $request->ket_tahun;
        $data->stts_tahun = $request->stts_tahun;
        $data->update();
        return response()->json(['success' => 'Tahun Akademik successfully updated!']);
    }

    public function destroy($id)
    {
        ThnAkademik::find($id)->delete();

        return redirect()->route('thnakademik')->with(['success' => 'Tahun Akademik successfully deleted!']);
    }
}
