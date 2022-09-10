<div class="modal fade" id="editGedung" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Kurikulum</h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="dataGedung" class="needs-validation" novalidate="">
          <div>
            <input class="form-control" id="id_gedung" type="hidden" name="id_gedung">
            <div class="row g-2">
              <div class="col-md-6">
                <label class="form-label">Kode Gedung</label>
                <input class="form-control" id="kd_gedung" type="text" name="kd_gedung" required>
                @error('kd_gedung')
                  <div class="valid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-6">
                <label class="form-label">Nama Gedung</label>
                <input class="form-control" id="nm_gedung" type="text" name="nm_gedung" required>
                @error('nm_gedung')
                  <div class="valid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-6">
                <label class="form-label">Jumlah Lantai</label>
                <input class="form-control" id="jml_lantai" type="text" name="jml_lantai" required>
                @error('jml_lantai')
                  <div class="valid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-6">
                <label class="form-label">Panjang Gedung</label>
                <input class="form-control" id="p_gedung" type="text" name="p_gedung" required>
                @error('p_gedung')
                  <div class="valid-feedback">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="row g-2">
              <div class="col-md-6">
                <label class="form-label">Tinggi Gedung</label>
                <input class="form-control" id="t_gedung" type="text" name="t_gedung" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Lebar Gedung</label>
                <input class="form-control" id="l_gedung" type="text" name="l_gedung" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Keterangan</label>
                <input class="form-control" id="ket_gedung" type="text" name="ket_gedung" required>
              </div>
              <div class="col-md-6">
                <div class="form-group m-t-15 m-checkbox-inline mb-0" id="stts_gedung">
                  <label class="form-label">Status</label>
                  <label class="d-block">
                    <input class="form-check-input" id="stts_gedung" type="radio" value="Active" name="stts_gedung">
                    Active
                  </label>
                  <label class="d-block">
                    <input class="form-check-input" id="stts_gedung" type="radio" value="Non Active"
                      name="stts_gedung">
                    Non Active
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
            <button class="btn btn-primary" id="update" type="submit">Save Changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
