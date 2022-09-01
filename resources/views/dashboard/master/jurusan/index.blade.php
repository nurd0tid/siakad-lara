@extends('layouts.app')
@section('content')
  @pushOnce('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/sweetalert2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/select2.css') }}">
  @endPushOnce
  <div class="page-body">
    <div class="container-fluid">
      <div class="page-header">
        <div class="row">
          <div class="col-sm-6">
            <h3>Jurusan</h3>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Applications</a></li>
              <li class="breadcrumb-item">Data Master</li>
              <li class="breadcrumb-item active">Jurusan</li>
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
            <button class="btn btn-primary add" type="button">Add Jurusan</button>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="display table table-bordered" id="basic-1">
                <thead>
                  <tr style="text-align: center">
                    <th style="width: 55px">No</th>
                    <th>Kode Jurusan</th>
                    <th>Nama Jurusan</th>
                    <th>Bidang Keahlian</th>
                    <th>Kompetensi Umum</th>
                    <th>Kompetensi Khusus</th>
                    <th style="width: 120px">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $a)
                    <tr style="text-align: center">
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $a['kd_jurusan'] }}</td>
                      <td>{{ $a['nm_jurusan'] }}</td>
                      <td>{{ $a['bidang_keahlian'] }}</td>
                      <td>{{ $a['kptsi_umum'] }}</td>
                      <td>{{ $a['kptsi_khusus'] }}</td>
                      <td>
                        <form method="POST" action="jurusan/delete/{{ $a['id_jurusan'] }}">
                          @csrf
                          <a type="button" class="btn btn-info btn-xs edit" data-bs-id="{{ $a->id_jurusan }}"><i
                              class="fa fa-eye"></i></a>
                          <a type="button" class="btn btn-primary btn-xs edit" data-bs-id="{{ $a->id_jurusan }}"><i
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
    @include('dashboard.master.jurusan.add')
    {{-- @include('dashboard.master.ptk.edit') --}}
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
    <script src="{{ asset('assets/js/sweet-alert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/js/form-validation-custom.js') }}"></script>
    <script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
    <script src="{{ asset('assets/js/select2/select2.full.min.js') }}"></script>
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
            url: "jurusan/add",
            type: "GET",
            dataType: "json",
            success: function(data) {
              $(".js-example-basic-single").select2();
              $.each(data, function(i, value) {
                $('#option').append('<option value=' + value.nip + '>' + value.nm_guru +
                  '</option>');
              });
              $('#addJurusan').modal('show');
            }
          });
        });
        // $('.edit').on("click", function(e) {
        //   e.preventDefault()
        //   var id = $(this).attr('data-bs-id');
        //   $.ajax({
        //     url: "ptk/edit/" + id,
        //     type: "GET",
        //     dataType: "JSON",
        //     success: function(data) {
        //       $('#id_ptk').val(data.id_ptk);
        //       $('#nm_ptk').val(data.nm_ptk);
        //       $('#ket_ptk').val(data.ket_ptk);
        //       $('#editPtk').modal('show');
        //     }
        //   });
        // });

        // $('#update').on("click", function(e) {
        //   e.preventDefault()
        //   var id_ptk = $("#id_ptk").val();
        //   $.ajax({
        //     type: "PUT",
        //     data: $('#dataPtk').serialize(),
        //     url: 'ptk/update/' + id_ptk,
        //     dataType: "json",
        //     headers: {
        //       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //     },
        //   });
        //   window.location.reload();
        // });
      });
    </script>
  @endPushOnce
@endsection
