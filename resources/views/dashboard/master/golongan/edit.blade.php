<div class="modal fade" id="editGolongan" tabindex="-1" role="dialog" aria-labelledby="editGolonganLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editGolonganLabel">Edit Golongan</h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="dataGolongan" class="needs-validation" novalidate="" method="POST">
          @csrf
          <div>
            <input class="form-control" id="id_golongan" type="hidden" name="id_golongan">
            <div class="col-md-12">
              <label class="form-label" for="nm_golongan">Nama Golongan</label>
              <input class="form-control" id="nm_golongan" type="text" name="nm_golongan" required>
              @error('nm_golongan')
                <div class="valid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-md-12">
              <label class="form-label" for="ket_golongan">Keterangan</label>
              <input class="form-control" id="ket_golongan" type="text" name="ket_golongan" required>
              @error('ket_golongan')
                <div class="valid-feedback">{{ $message }}</div>
              @enderror
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
