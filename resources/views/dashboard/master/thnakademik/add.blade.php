<div class="modal fade" id="addThnAkademik" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Tahun Akademik</h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="saveThnAkademik" class="needs-validation" novalidate="">
          @csrf
          <div>
            <div class="col-md-12">
              <label class="form-label">Kode Tahun</label>
              <input class="form-control" type="text" name="kd_tahun" required>
            </div>
            <div class="col-md-12">
              <label class="form-label">Nama Tahun</label>
              <input class="form-control" type="text" name="nm_tahun" required>
            </div>
            <div class="col-md-12">
              <label class="form-label">Keterangan</label>
              <input class="form-control" type="text" placeholder="Cth: 2016/2017" name="ket_tahun" required>
            </div>
            <div class="col-md-6">
              <div class="form-group m-t-15 m-checkbox-inline mb-0" id="stts_tahun">
                <label class="form-label">Status</label>
                <label class="d-block">
                  <input class="form-check-input" id="stts_tahun_1" type="radio" value="Active" name="stts_tahun">
                  Active
                </label>
                <label class="d-block">
                  <input class="form-check-input" id="stts_tahun_2" type="radio" value="Non Active" name="stts_tahun">
                  Non
                  Active
                </label>
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
