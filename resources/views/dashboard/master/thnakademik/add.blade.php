<div class="modal fade" id="addThnAkademik" tabindex="-1" role="dialog" aria-labelledby="addThnAkademikLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addThnAkademikLabel">Add Tahun Akademik</h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/thnakademik/save" class="needs-validation" novalidate="" method="POST">
          @csrf
          <div>
            <div class="col-md-12">
              <label class="form-label" for="validationCustom01">Kode Tahun</label>
              <input class="form-control" id="validationCustom01" type="text" name="kd_tahun" required>
              @error('kd_tahun')
                <div class="valid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-md-12">
              <label class="form-label" for="validationCustom01">Nama Tahun</label>
              <input class="form-control" id="validationCustom01" type="text" name="nm_tahun" required>
              @error('nm_tahun')
                <div class="valid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-md-12">
              <label class="form-label" for="validationCustom01">Keterangan</label>
              <input class="form-control" id="validationCustom01" type="text" placeholder="Cth: 2016/2017"
                name="ket_tahun" required>
              @error('ket_tahun')
                <div class="valid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="col">
              <div class="form-group m-t-15 m-checkbox-inline mb-0">
                <label class="form-label" for="validationCustom01">Status</label>
                <label class="d-block" for="chk-ani1">
                  <input class="radio_animated" id="chk-ani1" type="radio" value="Active" name="stts_tahun">Active
                </label>
                <label class="d-block" for="chk-ani2">
                  <input class="radio_animated" id="chk-ani2" type="radio" value="Non Active" name="stts_tahun">Non
                  Active
                </label>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
            <button class="btn btn-primary" type="submit">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
