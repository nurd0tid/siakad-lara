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

    public function add()
    {
        $data['wali_kelas'] =  DB::table('gurus')
            ->select([
                'nip',
                'nm_guru'
            ])->get();
        $data['nm_jurusan'] = DB::table('jurusans')
            ->select([
                'kd_jurusan',
                'nm_jurusan'
            ])->get();
        $data['nm_ruangan'] = DB::table('ruangans')
            ->select([
                'kd_ruangan',
                'nm_ruangan'
            ])->get();
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'kd_kelas' => 'required|unique:kelas,kd_kelas',
            'nm_kelas' => 'required',
            'nip' => 'required',
            'kd_jurusan' => 'required',
            'kd_ruangan' => 'required',
            'stts_kelas' => 'required'
        ]);

        //create post
        Kelas::create([
            'kd_kelas'     => $request->kd_kelas,
            'nm_kelas'     => $request->nm_kelas,
            'nip'    => $request->nip,
            'kd_jurusan'      => $request->kd_jurusan,
            'kd_ruangan'      => $request->kd_ruangan,
            'stts_kelas'      => $request->stts_kelas
        ]);

        //redirect to index
        return response()->json(['success' => 'Kelas successfully added!']);
    }

    public function edit($id)
    {
        $data['item'] = DB::table('kelas')
            ->join('gurus', 'kelas.nip', '=', 'gurus.nip')
            ->join('jurusans', 'kelas.kd_jurusan', '=', 'jurusans.kd_jurusan')
            ->join('ruangans', 'kelas.kd_ruangan', '=', 'ruangans.kd_ruangan')
            ->join('gedungs', 'ruangans.kd_gedung', '=', 'gedungs.kd_gedung')
            ->where('id_kelas', '=', $id)
            ->select('kelas.*', 'gurus.nm_guru', 'gurus.nip', 'gurus.foto', 'jurusans.nm_jurusan', 'ruangans.nm_ruangan', 'gedungs.nm_gedung',)
            ->get();
        $data['wali_kelas'] =  DB::table('gurus')
            ->select([
                'nip',
                'nm_guru'
            ])->get();
        $data['nm_jurusan'] = DB::table('jurusans')
            ->select([
                'kd_jurusan',
                'nm_jurusan'
            ])->get();
        $data['nm_ruangan'] = DB::table('ruangans')
            ->select([
                'kd_ruangan',
                'nm_ruangan'
            ])->get();
        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'kd_kelas' =>
            'required|unique:kelas,kd_kelas,' . $id . ',id_kelas',
            'nm_kelas' => 'required',
            'nip' => 'required',
            'kd_jurusan' => 'required',
            'kd_ruangan' => 'required',
            'stts_kelas' => 'required'
        ]);

        $data = Kelas::find($id);
        $data->kd_kelas = $request->kd_kelas;
        $data->nm_kelas = $request->nm_kelas;
        $data->nip = $request->nip;
        $data->kd_jurusan = $request->kd_jurusan;
        $data->kd_ruangan = $request->kd_ruangan;
        $data->stts_kelas = $request->stts_kelas;
        $data->update();
        return response()->json(['success' => 'Kelas successfully updated!']);
    }

    public function destroy($id)
    {
        Kelas::find($id)->delete();
        return redirect()->route('kelas')->with(['success' => 'Kelas successfully deleted!']);
    }
}
