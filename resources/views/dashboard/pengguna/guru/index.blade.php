@extends('layouts.app')
@section('content')
  @pushOnce('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/sweetalert2.css') }}">
  @endPushOnce
  <style type="text/css">
    #data tr {
      text-align: center;
    }
  </style>
  <div class="page-body">
    <div class="container-fluid">
      <div class="page-header">
        <div class="row">
          <div class="col-sm-6">
            <h3>Guru</h3>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Applications</a></li>
              <li class="breadcrumb-item">Data Pengguna</li>
              <li class="breadcrumb-item active">Guru</li>
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
            {{-- <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-original-title="test"
              data-bs-target="#addGedung">Add Gedung</button> --}}
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="display datatables table table-bordered" id="data">
                <thead>
                  <tr style="text-align: center">
                    <th style="width: 55px">No</th>
                    <th>NIP</th>
                    <th>Nama Guru</th>
                    <th>Jenis Kelamin</th>
                    <th>No Telepon</th>
                    <th>Jenis PTK</th>
                    <th style="width: 120px;">Action</th>
                  </tr>
                </thead>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @pushOnce('js')
    <script src="{{ asset('assets/js/sweet-alert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/js/form-validation-custom.js') }}"></script>
    <script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript">
      $('.show_confirm').click(function(e) {
        var form = $(this).closest("form");
        e.preventDefault();
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              swal("Poof! Your imaginary file has been deleted!", {
                icon: "success",
                // timer: 3000
              });
              form.submit();
            } else {
              swal("Your imaginary file is safe!", {
                icon: "info"
              });
            }
          })
      });
    </script>
    <script>
      @if (session()->has('success'))
        toastr.success('{{ session('success') }}', 'Wohoooo!');
      @else
        toastr.error('{{ session('error') }}', 'Whoops!');
      @endif
    </script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#data').DataTable({
          aLengthMenu: [
            [5, 10, 25, 50, 100, -1],
            [5, 10, 25, 50, 100, "All"]
          ],
          processing: true,
          serverSide: true,
          responsive: true,
          ajax: "{{ route('guru') }}",
          columns: [{
              "data": null,
              "sortable": false,
              render: function(data, type, row, meta) {
                return meta.row + meta.settings._iDisplayStart + 1;
              }
            },
            {
              data: 'nip',
              name: 'nip'
            },
            {
              data: 'nm_guru',
              name: 'nm_guru'
            },
            {
              data: 'jenkel',
              name: 'jenkel'
            },
            {
              data: 'no_telp',
              name: 'no_telp'
            },
            {
              data: 'nm_ptk',
              name: 'nm_ptk'
            },
            {
              render: function(data, type, row) {
                var html = '<a href="" class="btn btn-info btn-xs m-r-5"><i class="fa fa-eye"></i></a>'
                html += '<a href="" class="btn btn-primary btn-xs m-r-5"><i class="fa fa-edit"></i></a>'
                html += '<a href="" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>'
                return html
              }
            }
          ]
        });
      });
    </script>
  @endPushOnce
@endsection
