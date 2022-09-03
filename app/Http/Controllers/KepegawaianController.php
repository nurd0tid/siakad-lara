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
        return redirect()->route('kepegawaian')->with(['success' => 'Data Berhasil Ditambahkan!']);
    }
}
