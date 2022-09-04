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
                          <a type="button" class="btn btn-info btn-xs detail" data-bs-id="{{ $a->id_jurusan }}"><i
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
    @include('dashboard.master.jurusan.edit')
    @include('dashboard.master.jurusan.detail')
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
        toastr.success(
          '{{ session('success') }}',
          'Wohoooo!', {
            showDuration: 300,
            hideDuration: 900,
            timeOut: 900,
            closeButton: true,
            newestOnTop: true,
            progressBar: true,
          }
        );
      @endif
    </script>
    <script>
      $(document).ready(function() {
        $(".js-example-basic-single").select2();

        $('.add').on("click", function(e) {
          e.preventDefault()
          $.ajax({
            url: "{{ route('jurusan/add') }}",
            type: "GET",
            dataType: "json",
            success: function(data) {
              $.each(data, function(i, value) {
                $('#option').append('<option value=' + value.nip + '>' + value.nm_guru +
                  '</option>');
              });
              $('#addJurusan').modal('show');
            }
          });
        });

        $('#save').on("click", function(e) {
          e.preventDefault()
          $.ajax({
            type: "POST",
            data: $('#saveJurusan').serialize(),
            url: "{{ route('jurusan/save') }}",
            dataType: "json",
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data) {
              toastr.success(
                data.success,
                'Wohoooo!', {
                  showDuration: 300,
                  hideDuration: 900,
                  timeOut: 900,
                  closeButton: true,
                  newestOnTop: true,
                  progressBar: true,
                  onHidden: function() {
                    window.location.reload();
                  }
                }
              );
            },
            error: function(data) {
              var errors = data.responseJSON.errors;
              var errorsHtml = '';
              $.each(errors, function(key, value) {
                errorsHtml += '<li>' + value[0] + '</li>';
              });
              toastr.error(errorsHtml, 'Whoops!');
            }
          });
        });

        $('.edit').on("click", function(e) {
          e.preventDefault();
          var id = $(this).attr('data-bs-id');
          $.ajax({
            url: "/master/jurusan/edit/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {
              $('#id_jurusan').val(data['item'][0].id_jurusan);
              $('#kd_jurusan').val(data['item'][0].kd_jurusan);
              $('#nm_jurusan').val(data['item'][0].nm_jurusan);
              $('#bidang_keahlian').val(data['item'][0].bidang_keahlian);
              $('#kptsi_umum').val(data['item'][0].kptsi_umum);
              $('#kptsi_khusus').val(data['item'][0].kptsi_khusus);
              $.each(data['option'], function(key, value) {
                $('#nip').append('<option value=' + value.nip + '>' + value.nm_guru +
                  '</option>');
                if (data['item'][0].nip == value.nip) {
                  $('#nip').append('<option value="' + value.nip +
                    '" selected>' + value.nm_guru + '</option>').trigger('change');
                }
              });
              $('#jabatan').val(data['item'][0].jabatan);
              $('#ket_jurusan').val(data['item'][0].ket_jurusan);
              $('input[id="stts_jurusan"][value="' + data['item'][0].stts_jurusan + '"]').prop('checked',
                true);
              $('#editJurusan').modal('show');
            }
          });
        });

        $('#update').on("click", function(e) {
          e.preventDefault()
          var id_jurusan = $("#id_jurusan").val();
          $.ajax({
            type: "PUT",
            data: $('#dataJurusan').serialize(),
            url: '/master/jurusan/update/' + id_jurusan,
            dataType: "json",
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data) {
              toastr.success(
                data.success,
                'Wohoooo!', {
                  showDuration: 300,
                  hideDuration: 900,
                  timeOut: 900,
                  closeButton: true,
                  newestOnTop: true,
                  progressBar: true,
                  onHidden: function() {
                    window.location.reload();
                  }
                }
              );
            },
            error: function(data) {
              var errors = data.responseJSON.errors;
              var errorsHtml = '';
              $.each(errors, function(key, value) {
                errorsHtml += '<li>' + value[0] + '</li>';
              });
              toastr.error(errorsHtml, 'Whoops!');
            }
          });
        });

        $('.detail').on("click", function(e) {
          e.preventDefault();
          var id = $(this).attr('data-bs-id');
          $.ajax({
            url: "/master/jurusan/detail/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {
              $('#a').html(data[0].nm_guru);
              $('#b').html(data[0].jabatan);
              $('#c').html(data[0].kd_jurusan);
              $('#d').html(data[0].nm_jurusan);
              $('#e').html(data[0].bidang_keahlian);
              $('#f').html(data[0].kptsi_umum);
              $('#g').html(data[0].kptsi_khusus);
              if (data[0].stts_jurusan == 'Active')
                $('#h').html("<span class='span badge rounded badge-success'>Active</span>");
              else
                $('#h').html("<span class='span badge rounded badge-danger'>Non Active</span>");
              $('#i').html(data[0].ket_jurusan);
              $(".avatar").html("");
              $('.avatar').append('<img class="img-100 b-r-8" alt="" src="' + data[0].foto + '">')
              $('#detailJurusan').modal('show');
            }
          });
        });
      });
    </script>
  @endPushOnce
@endsection
