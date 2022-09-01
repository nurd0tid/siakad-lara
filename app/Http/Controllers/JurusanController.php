<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan;

class JurusanController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        $data = Jurusan::all();
        return view('dashboard.master.jurusan.index', compact('data'));
    }

    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'kd_jurusan'     => 'required|unique:jurusans',
            'nm_jurusan'   => 'required',
            'bidang_keahlian'   => 'required',
            'kptsi_umum'   => 'required',
            'kptsi_khusus'   => 'required',
            'pejabat'   => 'required',
            'jabatan'   => 'required',
            'ket_jurusan'   => 'required',
            'stts_jurusan'   => 'required',
        ]);

        //create post
        Jurusan::create([
            'kd_jurusan'     => $request->kd_jurusan,
            'nm_jurusan'   => $request->nm_jurusan,
            'bidang_keahlian'   => $request->bidang_keahlian,
            'kptsi_umum'   => $request->kptsi_umum,
            'kptsi_khusus'   => $request->kptsi_khusus,
            'pejabat'   => $request->pejabat,
            'jabatan'   => $request->jabatan,
            'ket_jurusan'   => $request->ket_jurusan,
            'stts_jurusan'   => $request->stts_jurusan,
        ]);

        //redirect to index
        return redirect()->route('jurusan')->with(['success' => 'Data Berhasil Ditambahkan!']);
    }
}
