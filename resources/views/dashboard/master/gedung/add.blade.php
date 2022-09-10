<div class="modal fade" id="addGedung" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addGedungLabel">Add Gedung</h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="saveGedung" class="needs-validation" novalidate="">
          <div>
            <div class="row g-2">
              <div class="col-md-6">
                <label class="form-label">Kode Gedung</label>
                <input class="form-control" type="text" name="kd_gedung" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Nama Gedung</label>
                <input class="form-control" type="text" name="nm_gedung" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Jumlah Lantai</label>
                <input class="form-control" type="text" name="jml_lantai" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Panjang Gedung</label>
                <input class="form-control" type="text" name="p_gedung" required>
              </div>
            </div>
            <div class="row g-2">
              <div class="col-md-6">
                <label class="form-label">Tinggi Gedung</label>
                <input class="form-control" type="text" name="t_gedung" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Lebar Gedung</label>
                <input class="form-control" type="text" name="l_gedung" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Keterangan</label>
                <input class="form-control" type="text" name="ket_gedung" required>
              </div>
              <div class="col-md-6">
                <div class="form-group m-t-15 m-checkbox-inline mb-0" id="stts_gedung">
                  <label class="form-label">Status</label>
                  <label class="d-block">
                    <input class="form-check-input" id="stts_gedung_1" type="radio" value="Active" name="stts_gedung">
                    Active
                  </label>
                  <label class="d-block">
                    <input class="form-check-input" id="stts_gedung_2" type="radio" value="Non Active"
                      name="stts_gedung"> Non
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
