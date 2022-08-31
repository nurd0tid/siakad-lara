<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RuanganController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        $data = DB::table('ruangans')
            ->join('gedungs', 'ruangans.kd_gedung', '=', 'gedungs.kd_gedung')
            ->select('ruangans.*', 'gedungs.nm_gedung')
            ->get();
        return view('dashboard.master.ruangan.index', compact('data'));
        // dd($data);
    }

    public function add()
    {
        $data = DB::table('gedungs')->select([
            'kd_gedung',
            'nm_gedung'
        ])->get();
        return response()->json($data);
        // return view('dashboard.master.ruangan.add', compact('data'));
        // dd($data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'kd_ruangan' => 'required|unique:ruangans',
            'kd_gedung' => 'required',
            'nm_ruangan' => 'required',
            'kps_belajar' => 'required',
            'kps_ujian' => 'required',
            'ket_ruangan' => 'required',
            'stts_ruangan' => 'required'
        ]);

        //create post
        Ruangan::create([
            'kd_ruangan'     => $request->kd_ruangan,
            'kd_gedung'     => $request->kd_gedung,
            'nm_ruangan'    => $request->nm_ruangan,
            'kps_belajar'      => $request->kps_belajar,
            'kps_ujian'      => $request->kps_ujian,
            'ket_ruangan'      => $request->ket_ruangan,
            'stts_ruangan'    => $request->stts_ruangan
        ]);

        //redirect to index
        return redirect()->route('ruangan')->with(['success' => 'Data Berhasil Ditambahkan!']);
    }

    public function edit($id)
    {
        // $data = [
        //     $item = DB::table('ruangans')
        //         ->join('gedungs', 'ruangans.kd_gedung', '=', 'gedungs.kd_gedung')
        //         ->where('id_ruangan', '=', $id)
        //         ->select('ruangans.*', 'gedungs.nm_gedung')->get(),
        //     $item1 = DB::table('gedungs')
        //         ->select([
        //             'kd_gedung',
        //             'nm_gedung'
        //         ])->get()
        // ];
        $data['item'] = DB::table('ruangans')
            ->join('gedungs', 'ruangans.kd_gedung', '=', 'gedungs.kd_gedung')
            ->where('id_ruangan', '=', $id)
            ->select('ruangans.*', 'gedungs.nm_gedung')->get();
        $data['option'] =  DB::table('gedungs')
            ->select([
                'kd_gedung',
                'nm_gedung'
            ])->get();
        // $data = DB::table('ruangans')
        //     ->join('gedungs', 'ruangans.kd_gedung', '=', 'gedungs.kd_gedung')
        //     ->where('id_ruangan', '=', $id)
        //     ->select('ruangans.*', 'gedungs.nm_gedung')->get();
        return response()->json($data);
    }
}
