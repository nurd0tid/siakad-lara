@extends('layouts.app')
@section('content')
  @pushOnce('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/sweetalert2.css') }}">
  @endPushOnce
  <div class="page-body">
    <div class="container-fluid">
      <div class="page-header">
        <div class="row">
          <div class="col-sm-6">
            <h3>Ruangan</h3>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Applications</a></li>
              <li class="breadcrumb-item">Data Master</li>
              <li class="breadcrumb-item active">Ruangan</li>
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
            <button class="btn btn-primary add" type="button">Add
              Ruangan</button>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="display table table-bordered" id="basic-1">
                <thead>
                  <tr style="text-align: center">
                    <th style="width: 55px">No</th>
                    <th>Kode Ruangan</th>
                    <th>Nama Gedung</th>
                    <th>Nama Ruangan</th>
                    <th>Kapasitas Belajar</th>
                    <th>Kapasitas Ujian</th>
                    <th>Keterangan</th>
                    <th>Status</th>
                    <th style="width: 100px;">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $a)
                    <tr style="text-align: center">
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $a->kd_ruangan }}</td>
                      <td>{{ $a->nm_gedung }}</td>
                      <td>{{ $a->nm_ruangan }}</td>
                      <td>{{ $a->kps_belajar }}</td>
                      <td>{{ $a->kps_ujian }}</td>
                      <td>{{ $a->ket_ruangan }}</td>
                      @if ($a->stts_ruangan == 'Active')
                        <td>
                          <span class="span badge rounded badge-success">
                            Active
                          </span>
                        </td>
                      @else
                        <td>
                          <span class="span badge rounded badge-danger">
                            Non Active
                          </span>
                        </td>
                      @endif
                      <td>
                        <form method="POST" action="ruangan/delete/{{ $a->id_ruangan }}">
                          @csrf
                          <a type="button" class="btn btn-primary btn-xs edit" data-bs-id="{{ $a->id_ruangan }}"><i
                              class="fa fa-edit"></i></a>
                          <input name="_method" type="hidden" class="btn-primary btn-xs" value="DELETE">
                          <a type="submit" class="btn btn-danger btn-xs show_confirm"><i class="fa fa-trash"></i></a>
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
  @pushOnce('js')
    @include('dashboard.master.ruangan.add')
    @include('dashboard.master.ruangan.edit')
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
    <script src="{{ asset('assets/js/sweet-alert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/js/form-validation-custom.js') }}"></script>
    <script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
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
    <script>
      $(document).ready(function() {
        $('.add').on("click", function(e) {
          e.preventDefault()
          $.ajax({
            url: "ruangan/add",
            type: "GET",
            dataType: "json",
            success: function(data) {
              $.each(data, function(i, value) {
                $('#option').append('<option value=' + value.kd_gedung + '>' + value.nm_gedung +
                  '</option>');
              });
              $('#addRuangan').modal('show');
            }
          });
        });

        $('#save').on("click", function(e) {
          e.preventDefault()
          $.ajax({
            type: "POST",
            data: $('#saveRuangan').serialize(),
            url: '/ruangan/save',
            dataType: "json",
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
          });
          window.location.reload();
        });

        $('.edit').on("click", function(e) {
          e.preventDefault()
          var id = $(this).attr('data-bs-id');
          $.ajax({
            url: "ruangan/edit/" + id,
            type: "GET",
            dataType: "json",
            success: function(data) {
              $('#id_ruangan').val(data['item'][0].id_ruangan);
              $('#kd_ruangan').val(data['item'][0].kd_ruangan);;
              $.each(data['option'], function(key, value) {
                $('#kd_gedung').append('<option value=' + value.kd_gedung + '>' + value.nm_gedung +
                  '</option>');
                if (data['item'][0].kd_gedung == value.kd_gedung) {
                  $('#kd_gedung').append('<option value="' + value.kd_gedung +
                    '" selected>' + value.nm_gedung + '</option>').trigger('change');
                }
              });
              $('#nm_ruangan').val(data['item'][0].nm_ruangan);
              $('#kps_belajar').val(data['item'][0].kps_belajar);
              $('#kps_ujian').val(data['item'][0].kps_ujian);
              $('#ket_ruangan').val(data['item'][0].ket_ruangan);
              $('input[id="stts_ruangan"][value="' + data['item'][0].stts_ruangan + '"]').prop('checked',
                true);
              $('#editRuangan').modal('show');
            }
          });
        });

        $('#update').on("click", function(e) {
          e.preventDefault()
          var id_ruangan = $("#id_ruangan").val();
          $.ajax({
            type: "PUT",
            data: $('#dataRuangan').serialize(),
            url: 'ruangan/update/' + id_ruangan,
            dataType: "json",
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
          });
          window.location.reload();
        });
      });
    </script>
  @endPushOnce
@endsection