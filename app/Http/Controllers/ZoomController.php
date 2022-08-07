<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use \MacsiDigital\Zoom\Facades\Zoom;

class ZoomController extends Controller
{
  public function index()
  {
    return view('zoom.index');
  }

  public function create()
  {
    return view('zoom.create');
  }

  public function save(Request $request)
  {
    /**
     *
     * Membuat Meeting Baru
     */
    $topic = $request->input('topic');
    $duration = $request->input('duration');
    $start_time = $request->input('start_time');

    $meetings = Zoom::user()->find('devapps@gmailwe.com')->meetings()->create([
      'topic' => $topic,
      'duration' => $duration, // In minutes, optional
      'start_time' => new Carbon($start_time),
      'timezone' => 'Asia/Jakarta',
    ]);
    return [$meetings];
  }
}
