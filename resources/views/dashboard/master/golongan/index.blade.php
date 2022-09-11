@extends('layouts.vite')

@section('content')
  <div class="page-body">
    <div class="container-fluid">
      <div class="page-header">
        <div class="row">
          <div class="col-sm-6">
            <h3>Golongan</h3>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">Applications</a>
              </li>
              <li class="breadcrumb-item">Data Master</li>
              <li class="breadcrumb-item active">Golongan</li>
            </ol>
          </div>
          <div class="col-sm-6">
            <div class="bookmark">
              <ul>
                <li>
                  <a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Tables">
                    <i data-feather="inbox"></i>
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Chat">
                    <i data-feather="message-square"></i>
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Icons">
                    <i data-feather="command"></i>
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Learning">
                    <i data-feather="layers"></i>
                  </a>
                  </li>
                <li>
                  <a href="javascript:void(0)">
                    <i class="bookmark-search" data-feather="star"></i>
                  </a>
                  <form class="form-inline search-form">
                    <div class="form-group form-control-search">
                      <input type="text" placeholder="Search..">
                    </div>
                  </form>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-original-title="test" data-bs-target="#addGolongan">
              Add Golongan
            </button>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="display table table-bordered" id="basic-1">
                <thead>
                  <tr style="text-align: center">
                    <th style="width: 55px">No</th>
                    <th>Nama Golongan</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $a)
                    <tr style="text-align: center">
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $a['nm_golongan'] }}</td>
                      <td>{{ $a['ket_golongan'] }}</td>
                      <td>
                        <form id="actionDelete" method="POST" action="{{ url('master/golongan/delete', $a->id_golongan) }}">
                          @csrf
                          <a id="edit" class="btn btn-primary btn-xs ml-4" href="{{ url('master/golongan/edit', $a->id_golongan) }}">
                            <i class="fa fa-edit"></i>
                          </a>
                          <input name="_method" type="hidden" class="btn-primary btn-xs" value="DELETE">
                          <a href="{{ url('master/golongan/delete', $a->id_golongan) }}" id="delete" class="btn btn-danger btn-xs">
                            <i class="fa fa-trash"></i>
                          </button>
                        </form>
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
@endsection

@pushOnce('my-modal')
  @include('dashboard.master.golongan.add')
  @include('dashboard.master.golongan.edit')
@endPushOnce

@pushOnce('css')
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/sweetalert2.css') }}">
@endPushOnce

@pushOnce('js')
  <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
  <script src="{{ asset('assets/js/sweet-alert/sweetalert.min.js') }}"></script>
  <script src="{{ asset('assets/js/form-validation-custom.js') }}"></script>
  <script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
  @vite('resources/js/golongan.js')
@endPushOnce
