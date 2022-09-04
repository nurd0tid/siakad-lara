<?php

namespace App\Http\Controllers;

use App\Models\Kepegawaian;
use Illuminate\Http\Request;

class KepegawaianController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        $data = Kepegawaian::all();
        return view('dashboard.master.kepegawaian.index', compact('data'));
    }

    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'nm_kepegawaian'     => 'required',
            'ket_kepegawaian'   => 'required'
        ]);

        //create post
        Kepegawaian::create([
            'nm_kepegawaian'     => $request->nm_kepegawaian,
            'ket_kepegawaian'   => $request->ket_kepegawaian
        ]);

        //redirect to index
        return redirect()->route('kepegawaian')->with(['success' => 'Kepegawaian successfully added!']);
    }

    public function edit($id)
    {
        $data = Kepegawaian::find($id);
        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nm_kepegawaian'     => 'required',
            'ket_kepegawaian'   => 'required'
        ]);

        $data =  Kepegawaian::find($id);
        $data->nm_kepegawaian = $request->nm_kepegawaian;
        $data->ket_kepegawaian =  $request->ket_kepegawaian;
        $data->update();

        return response()->json(['success' => 'Kepegawaian successfully updated!']);
    }

    public function destroy($id)
    {
        Kepegawaian::find($id)->delete();
        return redirect()->route('kepegawaian')->with(['success' => 'Kepegawaian successfully deleted!']);
    }
}
