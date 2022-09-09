<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;

class JobController extends Controller
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

  public function index(Request $request)
  {
    $client = new Client();

    $keyword = $request->input('keyword');
    $location = $request->input('location');
    $id = $request->input('id');

    $url =  'https://glints.com/id/opportunities/jobs/explore?keyword=' . $keyword . '&country=ID&locationName=' . $location . '$page=' . $id;
    $page = $client->request('GET', $url);

    $myArr = [];
    $page->filter('.compact_job_card')->each(function ($item) use (&$myArr) {
      $filtered = [
        'img' => $item->filter('img')->attr('src'),
        'link' => $item->filter('.hvpJwO a')->attr('href'),
        'title' => $item->filter('.bVuGlP')->text(),
        'perusahaan' => $item->filter('.iOneCq')->text(),
        'status' => $item->filter('span')->eq(1)->text(),
        // 'update' => $item->filter('.jgBEKn')->text(),
        'lokasi' => $item->filter('.ikxvyY')->eq(0)->text(),
        'gaji' => $item->filter('.ikxvyY')->eq(1)->text(),
        'pengalaman' => $item->filter('.ikxvyY')->eq(2)->text(),
      ];
      array_push($myArr, $filtered);
    });

    $data['data'] = array_slice($myArr, 0, 20);
    return $data;
    // return view('dashboard.jobSearch.index', $data);
  }
}
