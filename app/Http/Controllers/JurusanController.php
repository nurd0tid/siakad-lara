<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan;
use Illuminate\Support\Facades\DB;

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

    public function add()
    {
        $data = DB::table('gurus')->select([
            'nip',
            'nm_guru'
        ])->get();
        return response()->json($data);
    }

    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'kd_jurusan'     => 'required|unique:jurusans,kd_jurusan',
            'nm_jurusan'   => 'required',
            'bidang_keahlian'   => 'required',
            'kptsi_umum'   => 'required',
            'kptsi_khusus'   => 'required',
            'nip'   => 'required',
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
            'nip'   => $request->nip,
            'jabatan'   => $request->jabatan,
            'ket_jurusan'   => $request->ket_jurusan,
            'stts_jurusan'   => $request->stts_jurusan,
        ]);

        //redirect to index
        return response()->json(['success' => 'Jurusan successfully added!']);
    }

    public function detail($id)
    {
        $data = DB::table('jurusans')
            ->join('gurus', 'jurusans.nip', '=', 'gurus.nip')
            ->where('id_jurusan', '=', $id)
            ->select('jurusans.*', 'gurus.nm_guru', 'gurus.foto')->get();
        return response()->json($data);
    }

    public function edit($id)
    {
        $data['item'] = DB::table('jurusans')
            ->join('gurus', 'jurusans.nip', '=', 'gurus.nip')
            ->where('id_jurusan', '=', $id)
            ->select('jurusans.*', 'gurus.nm_guru')->get();
        $data['option'] =  DB::table('gurus')
            ->select([
                'nip',
                'nm_guru'
            ])->get();
        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'kd_jurusan'     =>
            'required|unique:jurusans,kd_jurusan,' . $id . ',id_jurusan',
            'nm_jurusan'   => 'required',
            'bidang_keahlian'   => 'required',
            'kptsi_umum'   => 'required',
            'kptsi_khusus'   => 'required',
            'nip'   => 'required',
            'jabatan'   => 'required',
            'ket_jurusan'   => 'required',
            'stts_jurusan'   => 'required',
        ]);

        $data = Jurusan::find($id);
        $data->kd_jurusan       = $request->kd_jurusan;
        $data->nm_jurusan       = $request->nm_jurusan;
        $data->bidang_keahlian  = $request->bidang_keahlian;
        $data->kptsi_umum       = $request->kptsi_umum;
        $data->kptsi_khusus     = $request->kptsi_khusus;
        $data->nip              = $request->nip;
        $data->jabatan          = $request->jabatan;
        $data->ket_jurusan      = $request->ket_jurusan;
        $data->stts_jurusan     = $request->stts_jurusan;
        $data->update();
        return response()->json(['success' => 'Jurusan successfully updated!']);
    }

    public function destroy($id)
    {
        Jurusan::find($id)->delete();
        return redirect()->route('jurusan')->with(['success' => 'Jurusan successfully deleted!']);
    }
}
