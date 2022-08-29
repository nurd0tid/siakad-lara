<div class="modal fade" id="addGedung" tabindex="-1" role="dialog" aria-labelledby="addGedungLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addGedungLabel">Add Gedung</h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('gedung/save') }}" class="needs-validation" novalidate="" method="POST">
          @csrf
          <div>
            <div class="row g-2">
              <div class="col-md-6">
                <label class="form-label" for="validationCustom01">Kode Gedung</label>
                <input class="form-control" id="validationCustom01" type="text" name="kd_gedung" required>
                @error('kd_gedung')
                  <div class="valid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-6">
                <label class="form-label" for="validationCustom01">Nama Gedung</label>
                <input class="form-control" id="validationCustom01" type="text" name="nm_gedung" required>
                @error('nm_gedung')
                  <div class="valid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-6">
                <label class="form-label" for="validationCustom01">Jumlah Lantai</label>
                <input class="form-control" id="validationCustom01" type="text" name="jml_lantai" required>
                @error('jml_lantai')
                  <div class="valid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-6">
                <label class="form-label" for="validationCustom01">Panjang Gedung</label>
                <input class="form-control" id="validationCustom01" type="text" name="p_gedung" required>
                @error('p_gedung')
                  <div class="valid-feedback">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="row g-2">
              <div class="col-md-6">
                <label class="form-label" for="validationCustom01">Tinggi Gedung</label>
                <input class="form-control" id="validationCustom01" type="text" name="t_gedung" required>
                @error('t_gedung')
                  <div class="valid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-6">
                <label class="form-label" for="validationCustom01">Lebar Gedung</label>
                <input class="form-control" id="validationCustom01" type="text" name="l_gedung" required>
                @error('l_gedung')
                  <div class="valid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-6">
                <label class="form-label" for="validationCustom01">Keterangan</label>
                <input class="form-control" id="validationCustom01" type="text" name="ket_gedung" required>
                @error('ket_gedung')
                  <div class="valid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-6">
                <div class="form-group m-t-15 m-checkbox-inline mb-0">
                  <label class="form-label" for="validationCustom01">Status</label>
                  <label class="d-block" for="chk-ani1">
                    <input class="radio_animated" id="chk-ani1" type="radio" value="Active" name="stts_gedung">Active
                  </label>
                  <label class="d-block" for="chk-ani2">
                    <input class="radio_animated" id="chk-ani2" type="radio" value="Non Active"
                      name="stts_gedung">Non
                    Active
                  </label>
                </div>
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
