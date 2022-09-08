<div class="modal fade" id="editJurusan" aria-labelledby="editJurusanLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editJurusanLabel">Edit Jurusan</h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="dataJurusan" class="needs-validation" novalidate="" method="POST">
          @csrf
          <div>
            <input type="hidden" id="id_jurusan" name="id_jurusan">
            <div class="row g-2">
              <div class="col-md-6">
                <label class="form-label">Kode Jursan</label>
                <input class="form-control" id="kd_jurusan" type="text" name="kd_jurusan" required>
                @error('kd_jurusan')
                  <div class="valid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-6">
                <label class="form-label">Nama Jursan</label>
                <input class="form-control" id="nm_jurusan" type="text" name="nm_jurusan" required>
                @error('nm_jurusan')
                  <div class="valid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-6">
                <label class="form-label">Bidang Keahlian</label>
                <input class="form-control" id="bidang_keahlian" type="text" name="bidang_keahlian" required>
                @error('bidang_keahlian')
                  <div class="valid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-6">
                <label class="form-label">Kompetensi Umum</label>
                <input class="form-control" id="kptsi_umum" type="text" name="kptsi_umum" required>
                @error('kptsi_umum')
                  <div class="valid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-6">
                <label class="form-label">Kompetensi Khusus</label>
                <input class="form-control" id="kptsi_khusus" type="text" name="kptsi_khusus" required>
                @error('kptsi_khusus')
                  <div class="valid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-6">
                <label class="form-label">Nama Guru</label>
                <select class="js-example-basic-single col-sm-12" id="nip" name="nip" required="">
                </select>
                @error('nip')
                  <div class="valid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-6">
                <label class="form-label">Jabatan</label>
                <input class="form-control" id="jabatan" type="text" name="jabatan" required>
                @error('jabatan')
                  <div class="valid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-6">
                <label class="form-label">Keterangan</label>
                <input class="form-control" id="ket_jurusan" type="text" name="ket_jurusan" required>
                @error('ket_jurusan')
                  <div class="valid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-6">
                <div class="form-group m-t-15 m-checkbox-inline mb-0">
                  <label class="form-label">Status</label>
                  <label class="d-block">
                    <input class="radio_animated" id="stts_jurusan" type="radio" value="Active"
                      name="stts_jurusan">Active
                  </label>
                  <label class="d-block">
                    <input class="radio_animated" id="stts_jurusan" type="radio" value="Non Active"
                      name="stts_jurusan">Non Active
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
            <button class="btn btn-primary" id="update" type="submit">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
