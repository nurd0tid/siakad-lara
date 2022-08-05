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
    $this->middleware('auth');
  }
  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  // private $myarray = array();

  public function index()
  {
    $client = new Client();

    $url =  'https://glints.com/id/lowongan-kerja';
    $page = $client->request('GET', $url);


    $myarray = array();
    $page->filter('.JobCardsc__JobcardContainer-sc-1f9hdu8-0')->each(function ($item) use (&$myarray, $page) {
      $filtered = [
        'img' => $item->filter('img')->attr('src'),
        'link' => $item->filter('.CompactOpportunityCardsc__CardAnchorWrapper-sc-1y4v110-18')->attr('href'),
        // 'status' => $item->filter('.CheckMarkHotJobBadgesc__CheckMarkHotJobBadgeContainer-sc-9hcb5a-0')->text(),
        'title' => $item->filter('.CompactOpportunityCardsc__JobTitle-sc-1y4v110-7')->text(),
        'perusahaan' => $item->filter('.CompactOpportunityCardsc__CompanyLink-sc-1y4v110-8')->text(),
        'lokasi' => $item->filter('.CompactOpportunityCardsc__OpportunityInfo-sc-1y4v110-13')->eq(0)->text(),
        'gaji' => $item->filter('.CompactOpportunityCardsc__OpportunityInfo-sc-1y4v110-13')->eq(1)->text(),
        'pengalaman' => $item->filter('.CompactOpportunityCardsc__OpportunityInfo-sc-1y4v110-13')->eq(2)->text(),
        // 'activity' => $item->filter('.CompactOpportunityCardsc__OpportunityMeta-sc-1y4v110-14 > .CompactOpportunityCardsc__UpdatedAtMessage-sc-1y4v110-17')->text(),
      ];
      array_push($myarray, $filtered);
    });

    // echo "<pre>";
    // print_r($page);

    $data['data'] = array_slice($myarray, 0, 6);
    // return $data;
    return view('job', $data);
  }

  public function pagination($id = null)
  {
    $client = new Client();

    $url =  'https://glints.com/id/lowongan-kerja?page=' . $id;
    $page = $client->request('GET', $url);


    $myarray = array();
    $page->filter('.JobCardsc__JobcardContainer-sc-1f9hdu8-0')->each(function ($item) use (&$myarray, $page) {
      $filtered = [
        'img' => $item->filter('img')->attr('src'),
        'link' => $item->filter('.CompactOpportunityCardsc__CardAnchorWrapper-sc-1y4v110-18')->attr('href'),
        // 'status' => $item->filter('.CheckMarkHotJobBadgesc__CheckMarkHotJobBadgeContainer-sc-9hcb5a-0')->text(),
        'title' => $item->filter('.CompactOpportunityCardsc__JobTitle-sc-1y4v110-7')->text(),
        'perusahaan' => $item->filter('.CompactOpportunityCardsc__CompanyLink-sc-1y4v110-8')->text(),
        'lokasi' => $item->filter('.CompactOpportunityCardsc__OpportunityInfo-sc-1y4v110-13')->eq(0)->text(),
        'gaji' => $item->filter('.CompactOpportunityCardsc__OpportunityInfo-sc-1y4v110-13')->eq(1)->text(),
        'pengalaman' => $item->filter('.CompactOpportunityCardsc__OpportunityInfo-sc-1y4v110-13')->eq(2)->text(),
        // 'activity' => $item->filter('.CompactOpportunityCardsc__OpportunityMeta-sc-1y4v110-14 > .CompactOpportunityCardsc__UpdatedAtMessage-sc-1y4v110-17')->text(),
      ];
      array_push($myarray, $filtered);
    });

    $data['data'] = array_slice($myarray, 0, 6);
    // return $data;
    return view('job', $data);
  }
}
