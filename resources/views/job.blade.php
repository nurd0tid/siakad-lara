@extends('layouts.app')
@section('content')
  <div class="page-body">
    <div class="container-fluid">
      <div class="page-header">
        <div class="row">
          <div class="col-sm-6">
            <h3>Job Searching</h3>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item">Miscellaneous</li>
              <li class="breadcrumb-item active">Job Searching</li>
            </ol>
          </div>
          <div class="col-sm-6">
            <!-- Bookmark Start-->
            <div class="bookmark">
              <ul>
                <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top"
                    title="" data-original-title="Tables"><i data-feather="inbox"></i></a></li>
                <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top"
                    title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top"
                    title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
                <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top"
                    title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
                <li><a href="javascript:void(0)"><i class="bookmark-search" data-feather="star"></i></a>
                  <form class="form-inline search-form">
                    <div class="form-group form-control-search">
                      <input type="text" placeholder="Search..">
                    </div>
                  </form>
                </li>
              </ul>
            </div>
            <!-- Bookmark Ends-->
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row g-3 mb-3">
        <div class="col-xl-5">
          <form action="{{ route('job-search') }}" method="get">
            <div class="faq-form">
              <input class="form-control" type="text" name="keyword" placeholder="Cari Lowongan"><i class="search-icon"
                data-feather="search"></i>
            </div>
        </div>
        <div class="col-xl-5">
          <div class="faq-form">
            <input class="form-control" type="text" name="location" placeholder="Tambahkan Negara"><i
              class="search-icon" data-feather="map-pin"></i>
          </div>
        </div>
        <div class="col-xl-2">
          <button class="btn btn-pill btn-light" type="submit"><i class="fa fa-spin fa-circle-o-notch"></i> Go
            Search</button>
        </div>
        </form>
      </div>
      <div class="row">
        @if ($data == null)
          <div class="col-sm-12">
            <div class="card">
              <div class="card-body">
                <center>
                  <img src="{{ asset('assets/images/job-search.gif') }}" alt="job-search">
                </center>
                <center>
                  <h5>
                    <b>
                      <i class="fa fa-spin fa-spinner"></i> Maaf, tidak ada lowongan ditemukan.
                    </b>
                  </h5>
                </center>
              </div>
            </div>
          </div>
        @else
          @foreach ($data as $key)
            <div class="col-md-6">
              <div class="card">
                <div class="job-search">
                  <div class="card-body">
                    {{-- @if ($key['status'] == null)
                  @else
                  @endif --}}
                    <div class="ribbon ribbon-bookmark ribbon-right ribbon-secondary">HOT JOB <i class="fa fa-leaf"></i>
                    </div>
                    <div class="media mt-3"><img class="img-40 img-fluid m-r-20" src="{{ $key['img'] }}" alt="">
                      <div class="media-body">
                        <div class="row">
                          <div class="col-sm-11">
                            <h6 class="f-w-600"><a href="https://glints.com{{ $key['link'] }}">{{ $key['title'] }}</a>
                            </h6>
                          </div>
                          <div class="col-sm-1">
                            <a href="https://glints.com{{ $key['link'] }}"><i data-feather="bookmark"></i></a>
                          </div>
                        </div>
                        <p>{{ $key['perusahaan'] }}</p>
                      </div>
                    </div>
                    <p><i class="fa fa-map-marker"></i> {{ $key['lokasi'] }}</p>
                    <p><i class="fa fa-dollar"></i> {{ $key['gaji'] }}</p>
                    @if ($key['pengalaman'] == null)
                      <br>
                      <p class="mt-4"></p>
                    @else
                      <p><i class="fa fa-suitcase"></i> {{ $key['pengalaman'] }}</p>
                    @endif
                    <div class="row">
                      <div class="col-4">
                        <h6><span class="badge badge-primary"><i class="fa fa-check-square-o"></i>
                            Actively Hiring</span></h6>
                      </div>
                      <div class="col-7">
                        <span class="txt-success"><i class="fa fa-clock-o"></i> Diperbaharui 12 jam yang lalu.</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        @endif
      </div>
    </div>
    <!-- Container-fluid Ends-->
  </div>
@endsection
