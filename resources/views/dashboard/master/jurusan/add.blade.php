<div class="modal fade" id="addJurusan" aria-labelledby="addJurusanLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addJurusanLabel">Add Jurusan</h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" id="saveJurusan">
          @csrf
          <div>
            <div class="row g-2">
              <div class="col-md-6">
                <label class="form-label">Kode Jurusan</label>
                <input class="form-control" type="text" name="kd_jurusan" required>
                @error('kd_jurusan')
                  <div class="valid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-6">
                <label class="form-label">Nama Jurusan</label>
                <input class="form-control" type="text" name="nm_jurusan" required>
                @error('nm_jurusan')
                  <div class="valid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-6">
                <label class="form-label">Bidang Keahlian</label>
                <input class="form-control" type="text" name="bidang_keahlian" required>
                @error('bidang_keahlian')
                  <div class="valid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-6">
                <label class="form-label">Kompetensi Umum</label>
                <input class="form-control" type="text" name="kptsi_umum" required>
                @error('kptsi_umum')
                  <div class="valid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-6">
                <label class="form-label">Kompetensi Khusus</label>
                <input class="form-control" type="text" name="kptsi_khusus" required>
                @error('kptsi_khusus')
                  <div class="valid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-6">
                <label class="form-label">Nama Guru</label>
                <select class="js-example-basic-single col-sm-12" id="option" name="nip" required="">
                </select>
                @error('nip')
                  <div class="valid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-6">
                <label class="form-label">Jabatan</label>
                <input class="form-control" type="text" name="jabatan" required>
                @error('jabatan')
                  <div class="valid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-6">
                <label class="form-label">Keterangan</label>
                <input class="form-control" type="text" name="ket_jurusan" required>
                @error('ket_jurusan')
                  <div class="valid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-6">
                <div class="form-group m-t-15 m-checkbox-inline mb-0">
                  <label class="form-label">Status</label>
                  <label class="d-block">
                    <input class="radio_animated" type="radio" value="Active" name="stts_jurusan">Active
                  </label>
                  <label class="d-block">
                    <input class="radio_animated" type="radio" value="Non Active" name="stts_jurusan">Non
                    Active
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
            <button class="btn btn-primary" id="save" type="submit">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
