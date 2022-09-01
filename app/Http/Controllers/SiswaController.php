<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Datatables;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        $data = DB::table('siswas')
            ->join('jurusans', 'siswas.kd_jurusan', '=', 'jurusans.kd_jurusan')
            ->select('siswas.*', 'jurusans.nm_jurusan')->get();
        if (request()->ajax()) {
            return datatables()->of($data)
                ->addIndexColumn()
                ->make(true);
        }
        return view('dashboard.pengguna.siswa.index');
    }
}
