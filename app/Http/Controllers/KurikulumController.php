<?php

namespace App\Http\Controllers;

use App\Models\Kurikulum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KurikulumController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        $data = Kurikulum::all();
        return view('dashboard.master.kurikulum.index', compact('data'));
    }

    public function store(Request $request)
    {
        // $messages = [
        //     'nm_kurikulum.required' => 'Nama kurikulum tidak boleh kosong.',
        //     'stts_kurikulum.required' => 'Status tidak boleh kosong.',
        // ];

        // $rule = [
        //     'nm_kurikulum' => 'required',
        //     'stts_kurikulum' => 'required',
        // ];

        // $validator = Validator::make(
        //     $request->all(),
        //     $rule,
        //     $messages
        // );

        // if ($validator->fails()) {
        //     return redirect()
        //         ->route('kurikulum', ['modal-add-is-open' => 'true'])
        //         ->withErrors($validator)
        //         ->withInput();
        // }

        $this->validate($request, [
            'nm_kurikulum' => 'required'
        ], [
            'nm_kurikulum.required'   => 'Silahkan isi nama kurikulum terlebih dahulu!'
        ]);

        //create post
        Kurikulum::create([
            'nm_kurikulum'     => $request->nm_kurikulum,
            'stts_kurikulum'   => $request->stts_kurikulum
        ]);

        return response()->json(['success' => 'Kurikulum successfully added']);
    }

    public function edit($id)
    {
        $data = Kurikulum::find($id);
        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nm_kurikulum' => 'required'
        ], [
            'nm_kurikulum.required'   => 'Silahkan isi nama kurikulum terlebih dahulu!'
        ]);

        $data = Kurikulum::find($id);
        $data->nm_kurikulum = $request->nm_kurikulum;
        $data->stts_kurikulum = $request->stts_kurikulum;
        $data->update();
        return response()->json(['success' => 'Kurikulum successfully updated!']);
    }

    public function destroy($id)
    {
        Kurikulum::find($id)->delete();

        return redirect()->route('kurikulum')->with(['success' => 'Kurikulum successfully deleted!']);
    }
}
