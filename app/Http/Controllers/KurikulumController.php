<?php

namespace App\Http\Controllers;

use App\Models\Kurikulum;
use Illuminate\Http\Request;

class KurikulumController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware(['auth', 'verified']);
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {
    $data = Kurikulum::all();
    return view('dashboard.master.kurikulum.index', compact('data'));
    // dd($data);
  }

  public function store(Request $request)
  {
    //validate form
    $this->validate($request, [
      'nm_kurikulum'     => 'required',
      'stts_kurikulum'   => 'required'
    ]);

    //create post
    Kurikulum::create([
      'nm_kurikulum'     => $request->nm_kurikulum,
      'stts_kurikulum'   => $request->stts_kurikulum
    ]);

    //redirect to index
    return redirect()->route('kurikulum')->with(['success' => 'Data Berhasil Ditambahkan!']);
  }

  public function destroy($id)
  {
    Kurikulum::find($id)->delete();

    return redirect()->route('kurikulum')->with(['success' => 'Data Berhasil Dihapus!']);
  }
}
