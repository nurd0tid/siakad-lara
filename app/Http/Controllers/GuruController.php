<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Datatables;
use Illuminate\Support\Facades\DB;

class GuruController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        $data = DB::table('gurus')
            ->join('ptks', 'gurus.id_ptk', '=', 'ptks.id_ptk')
            ->select('gurus.*', 'ptks.nm_ptk')->get();
        if (request()->ajax()) {
            return datatables()->of($data)
                ->addIndexColumn()
                ->make(true);
        }
        return view('dashboard.pengguna.guru.index');
    }
}
