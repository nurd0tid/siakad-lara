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

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  private $result = array();

  public function index()
  {
    $client = new Client();
    $url =  'https://www.loker.id/cari-lowongan-kerja';
    $crawler = $client->request('GET', $url);

    echo $crawler->filter('.media-body')->text();
    // echo "<pre>";
    // print_r($crawler);
    // return view('job');
  }
}
