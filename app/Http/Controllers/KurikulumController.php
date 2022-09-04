<?php

namespace App\Http\Controllers;

use App\Models\Kurikulum;
use Illuminate\Http\Request;

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
        // dd($request->all());

        $this->validate($request, [
            'nm_kurikulum'     => 'required',
            'stts_kurikulum'   => 'required'
        ]);

        //create post
        Kurikulum::create([
            'nm_kurikulum'     => $request->nm_kurikulum,
            'stts_kurikulum'   => $request->stts_kurikulum
        ]);

        // dd($request->all());


        // //redirect to index
        return redirect()->route('kurikulum')->with(['success' => 'Kurikulum successfully added!']);
    }

    public function edit($id)
    {
        $data = Kurikulum::find($id);
        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nm_kurikulum'     => 'required',
            'stts_kurikulum'   => 'required'
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
