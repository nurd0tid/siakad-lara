<div class="modal fade" id="editThnAkademik" id aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Tahun Akademik</h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="dataThnAkademik" class="needs-validation" novalidate="">
          <div>
            <input class="form-control" id="id_tahun" type="hidden" name="id_tahun">
            <div class="col-md-12">
              <label class="form-label" for="kd_tahun">Kode Tahun</label>
              <input class="form-control" id="kd_tahun" type="text" name="kd_tahun" required>
            </div>
            <div class="col-md-12">
              <label class="form-label" for="nm_tahun">Nama Tahun</label>
              <input class="form-control" id="nm_tahun" type="text" name="nm_tahun" required>
            </div>
            <div class="col-md-12">
              <label class="form-label" for="ket_tahun">Keterangan</label>
              <input class="form-control" id="ket_tahun" type="text" name="ket_tahun" required>
            </div>
            <div class="col-md-6">
              <div class="form-group m-t-15 m-checkbox-inline mb-0" id="stts_tahun">
                <label class="form-label">Status</label>
                <label class="d-block">
                  <input class="form-check-input" id="stts_tahun" type="radio" value="Active" name="stts_tahun">
                  Active
                </label>
                <label class="d-block">
                  <input class="form-check-input" id="stts_tahun" type="radio" value="Non Active" name="stts_tahun">
                  Non
                  Active
                </label>
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
