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
        //validate form
        $this->validate($request, [
            'kd_tahun'     => 'required|unique:thn_akademiks|min:4',
            'nm_tahun'     => 'required',
            'ket_tahun'    => 'required|max:9',
            'stts_tahun'   => 'required'
        ]);

        //create post
        ThnAkademik::create([
            'kd_tahun'     => $request->kd_tahun,
            'nm_tahun'     => $request->nm_tahun,
            'ket_tahun'     => $request->ket_tahun,
            'stts_tahun'   => $request->stts_tahun
        ]);

        //redirect to index
        return redirect()->route('thnakademik')->with(['success' => 'Tahun Akademik successfully added!']);
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
            'ket_tahun'    => 'required',
            'stts_tahun'   => 'required'
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
