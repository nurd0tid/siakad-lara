<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ptk;

class PtkController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        $data = Ptk::all();
        return view('dashboard.master.ptk.index', compact('data'));
    }

    public function store(Request $request)
    {
        // //validate form
        $this->validate($request, [
            'nm_ptk'     => 'required',
            'ket_ptk'     => 'required'
        ]);

        Ptk::create([
            'nm_ptk' => $request->nm_ptk,
            'ket_ptk' => $request->ket_ptk
        ]);
        return redirect()->route('ptk')->with(['success' => 'Jenis PTK successfully added!']);
    }

    public function edit($id)
    {
        $data = Ptk::find($id);
        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nm_ptk'     => 'required',
            'ket_ptk'     => 'required'
        ]);


        $data = Ptk::find($id);
        $data->nm_ptk = $request->nm_ptk;
        $data->ket_ptk = $request->ket_ptk;
        $data->update();
        return response()->json(['success' => 'Jenis PTK successfully updated!']);
    }

    public function destroy($id)
    {
        Ptk::find($id)->delete();
        return redirect()->route('ptk')->with(['success' => 'Jenis PTK successfully deleted!']);
    }
}
