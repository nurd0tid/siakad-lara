@extends('layouts.app')
@section('content')
  @pushOnce('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables.css') }}">
  @endPushOnce
  <div class="page-body">
    <div class="container-fluid">
      <div class="page-header">
        <div class="row">
          <div class="col-sm-6">
            <h3>Zoom Meetings</h3>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Miscellaneous</a></li>
              <li class="breadcrumb-item active">Zoom</li>
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
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <a href="{{ route('zoom/create') }}" class="btn btn-primary">Add Meetings</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="display" id="basic-1">
                <thead>
                  <tr style="text-align: center">
                    <th>No</th>
                    <th>Topic</th>
                    <th>Start Time</th>
                    <th>Duration</th>
                    <th>Link</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $zoom)
                    <tr style="text-align: center">
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $zoom['topic'] }}</td>
                      <td>{{ $zoom['start_time'] }}</td>
                      @if ($zoom['duration'] < 30)
                        <td><span class="span badge rounded-pill pill-badge-secondary">{{ $zoom['duration'] }}</span></td>
                      @else
                        <td><span class="span badge rounded-pill pill-badge-primary">{{ $zoom['duration'] }}</span></td>
                      @endif
                      <td style="width: 200px"><a href="{{ $zoom['join_url'] }}"
                          class="txt-primary">{{ $zoom['join_url'] }}</a></td>
                      <td>
                        <a href="http://" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
                        <a href="http://" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @pushOnce('js')
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
    <script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
  @endPushOnce
@endsection
