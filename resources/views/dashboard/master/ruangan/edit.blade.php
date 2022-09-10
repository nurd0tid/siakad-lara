<div class="modal fade" id="editRuangan" tabindex="-1" role="dialog" aria-labelledby="editRuanganLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editRuanganLabel">Edit Ruangan</h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="dataRuangan" class="needs-validation" novalidate="" method="POST">
          @csrf
          <div>
            <input type="hidden" id="id_ruangan" name="id_ruangan">
            <div class="row g-2">
              <div class="col-md-6">
                <label class="form-label">Kode Ruangan</label>
                <input class="form-control" id="kd_ruangan" type="text" name="kd_ruangan" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Nama Gedung</label>
                <select class="form-select" id="kd_gedung" type="text" name="kd_gedung" required>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label">Nama Ruangan</label>
                <input class="form-control" id="nm_ruangan" type="text" name="nm_ruangan" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Kapasitas Belajar</label>
                <input class="form-control" id="kps_belajar" type="text" name="kps_belajar" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Kapasitas Ujian</label>
                <input class="form-control" id="kps_ujian" type="text" name="kps_ujian" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Keterangan</label>
                <input class="form-control" id="ket_ruangan" type="text" name="ket_ruangan" required>
              </div>
              <div class="col-md-6">
                <div class="form-group m-t-15 m-checkbox-inline mb-0" id="stts_ruangan">
                  <label class="form-label">Status</label>
                  <label class="d-block">
                    <input class="form-check-input" id="stts_ruangan" type="radio" value="Active" name="stts_ruangan">
                    Active
                  </label>
                  <label class="d-block">
                    <input class="form-check-input" id="stts_ruangan" type="radio" value="Non Active"
                      name="stts_ruangan"> Non
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
