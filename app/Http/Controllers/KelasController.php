<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelasController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        $data = DB::table('kelas')
            ->join('gurus', 'kelas.nip', '=', 'gurus.nip')
            ->join('jurusans', 'kelas.kd_jurusan', '=', 'jurusans.kd_jurusan')
            ->select('kelas.*', 'gurus.nm_guru', 'jurusans.nm_jurusan')
            ->get();
        return view('dashboard.master.kelas.index', compact('data'));
    }

    public function detail($id)
    {
        $data = DB::table('kelas')
            ->join('gurus', 'kelas.nip', '=', 'gurus.nip')
            ->join('jurusans', 'kelas.kd_jurusan', '=', 'jurusans.kd_jurusan')
            ->join('ruangans', 'kelas.kd_ruangan', '=', 'ruangans.kd_ruangan')
            ->join('gedungs', 'ruangans.kd_gedung', '=', 'gedungs.kd_gedung')
            ->where('id_kelas', '=', $id)
            ->select('kelas.*', 'gurus.nm_guru', 'gurus.nip', 'gurus.foto', 'jurusans.nm_jurusan', 'ruangans.nm_ruangan', 'gedungs.nm_gedung',)
            ->get();
        return response()->json($data);
    }
}
