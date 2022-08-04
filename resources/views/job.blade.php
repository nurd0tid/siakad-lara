@extends('layouts.app')
@section('content')
  <div class="page-body">
    <div class="container-fluid">
      <div class="page-header">
        <div class="row">
          <div class="col-sm-6">
            <h3>List View</h3>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item">Job Search</li>
              <li class="breadcrumb-item active">List View</li>
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
      <div class="row">
        @foreach ($data as $key)
          <div class="col-md-6">
            <div class="card">
              <div class="job-search">
                <div class="card-body">
                  <div class="ribbon ribbon-bookmark ribbon-right ribbon-secondary">HOT JOB <i class="fa fa-leaf"></i>
                  </div>
                  <div class="media mt-3"><img class="img-40 img-fluid m-r-20" src="{{ $key['img'] }}" alt="">
                    <div class="media-body">
                      <h6 class="f-w-600"><a href="job-details.html">{{ $key['title'] }}</a></h6>
                      <p>{{ $key['perusahaan'] }}</p>
                      <ul class="rating">
                        <li><i class="fa fa-star font-warning"></i></li>
                        <li><i class="fa fa-star font-warning"></i></li>
                        <li><i class="fa fa-star font-warning"></i></li>
                        <li><i class="fa fa-star font-warning"></i></li>
                        <li><i class="fa fa-star font-warning"></i></li>
                      </ul>
                    </div>
                  </div>
                  <p><i class="fa fa-map-marker"></i> {{ $key['lokasi'] }}</p>
                  <p><i class="fa fa-dollar"></i> {{ $key['gaji'] }}</p>
                  <p><i class="fa fa-suitcase"></i> {{ $key['pengalaman'] }}</p>
                  <h5><span class="badge badge-primary"><i class="fa fa-check-square-o"></i>
                      sd</span></h5>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
    <!-- Container-fluid Ends-->
  </div>
@endsection
