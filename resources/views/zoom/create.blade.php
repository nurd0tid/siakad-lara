@extends('layouts.app')
@section('content')
  <div class="page-body">
    <div class="container-fluid">
      <div class="page-header">
        <div class="row">
          <div class="col-sm-6">
            <h3>Zoom Meetings</h3>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Miscellaneous</a></li>
              <li class="breadcrumb-item">Zoom</li>
              <li class="breadcrumb-item active">Create Meetings</li>
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
    <!-- Container-fluid starts-->
    <div class="container-fluid">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header pb-0">
            <h5>Add Meeting Zoom</h5>
          </div>
          <form class="form theme-form" method="POST" action="{{ route('zoom/save') }}">
            @csrf
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Topic</label>
                    <div class="col-sm-9">
                      <input class="form-control" type="text" name="topic">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Duration</label>
                    <div class="col-sm-9">
                      <input class="form-control digits" type="number" name="duration">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Date and time</label>
                    <div class="col-sm-9">
                      <input class="form-control digits" type="datetime-local" name="start_time">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer text-end">
              <div class="col-sm-9 offset-sm-3">
                <button class="btn btn-primary" type="submit">Submit</button>
                <input class="btn btn-light" type="reset" value="Cancel">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Container-fluid Ends-->
  </div>
@endsection
