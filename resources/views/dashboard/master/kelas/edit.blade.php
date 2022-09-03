<div class="modal fade" id="editKelas" tabindex="-1" role="dialog" aria-labelledby="editKelasLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editKelasLabel">Edit Kelas</h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="dataKelas" class="needs-validation" novalidate="" method="POST">
          @csrf
          <div>
            <input type="hidden" id="id_kelas" name="id_kelas">
            <div class="row g-2">
              <div class="col-md-6">
                <label class="form-label">Kode Kelas</label>
                <input class="form-control" id="kd_kelas" type="text" name="kd_kelas" required>
                @error('kd_kelas')
                  <div class="valid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-6">
                <label class="form-label">Nama Kelas</label>
                <input class="form-control" id="nm_kelas" type="text" name="nm_kelas" required>
                @error('nm_kelas')
                  <div class="valid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-6">
                <label class="form-label">Wali Kelas</label>
                <select class="js-example-basic-single col-sm-12" id="nip" type="text" name="nip"
                  required="">
                </select>
                @error('nip')
                  <div class="valid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-6">
                <label class="form-label">Nama Jurusan</label>
                <select class="form-select" id="kd_jurusan" type="text" name="kd_jurusan" required="">
                </select>
                @error('kd_jurusan')
                  <div class="valid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-6">
                <label class="form-label">Nama Ruangan</label>
                <select class="form-select" id="kd_ruangan" type="text" name="kd_ruangan" required="">
                </select>
                @error('kd_ruangan')
                  <div class="valid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-6">
                <div class="form-group m-t-15 m-checkbox-inline mb-0">
                  <label class="form-label">Status</label>
                  <label class="d-block">
                    <input class="radio_animated" id="stts_kelas" type="radio" value="Active" name="stts_kelas">Active
                  </label>
                  <label class="d-block">
                    <input class="radio_animated" id="stts_kelas" type="radio" value="Non Active"
                      name="stts_kelas">Non
                    Active
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
